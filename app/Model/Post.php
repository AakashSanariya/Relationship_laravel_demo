<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ['title', 'body'];

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public static function getPost($id){
        $postComment = Post::find($id);
        return $postComment;
    }

    public static function getTag($id){
        $postTag = Post::find($id);
        return $postTag;
    }
}
