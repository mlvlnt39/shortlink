<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke()
    {
        $links = Link::all();
        return view('admin.index');
    }
}
