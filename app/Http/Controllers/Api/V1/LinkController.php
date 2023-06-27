<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\LinkResource;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!isset($user)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $links = Auth::user()->isAdmin()
            ? Link::all()
            : Auth::user()->links;
        return LinkResource::collection($links);
    }
    public function generate(Request $request)
    {

        $this->validate($request, [
            'url' => 'required|url',
        ]);

        $link = new Link();
        $link->original_url = $request->url;
        $link->short_code = $this->generateShortCode();
        $link->user_id = Auth::id();
        $link->save();

        return new LinkResource($link);
    }

    public function redirect($code)
    {
        $link = Link::where('short_code', $code)->firstOrFail();
        $link->increment('clicks');

        return response()->json(['url' => $link->original_url]);
    }

    private function generateShortCode()
    {
        $length = 6;
        $code = Str::random($length);

        while (Link::where('short_code', $code)->exists()) {
            $code = Str::random($length);
        }

        return $code;

    }
}
