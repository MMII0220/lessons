<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

//    protected $fillable = ['title', 'content', 'images', 'likes', 'is_published'];
//    public $someProperty;
//    public $table = 'posts';
}
