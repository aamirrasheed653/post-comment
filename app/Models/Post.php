<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PostController;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type', 'comment_id'];
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
