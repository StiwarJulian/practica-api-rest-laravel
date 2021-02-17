<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $hidden = ['created_at', 'updated_at'];
    // protected $appends = ['post_name'];

    // public function getPostNameAttribute()
    // {
    //     return strtoupper($this->title);
    // }

    protected $fillable = ['title', 'body'];
}
