<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Api\PostController;
class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title','description'];
}
