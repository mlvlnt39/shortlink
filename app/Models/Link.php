<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable = ['original_url', 'short_code', 'user_id'];

    public function __construct()
    {
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
