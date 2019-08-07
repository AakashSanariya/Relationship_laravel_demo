<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "videos";
    protected $fillable = ['title', 'url'];

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
    
    public static function getVideo($id){
        $videoComment = Video::find($id);
        return $videoComment;
    }

    public static function getTag($id){
        $videoTags = Video::find($id);
        /*$tag = new Tag;
        $tag->name = "Video Tag 3";
        $videoTags->tags()->save($tag);*/
        return $videoTags;
    }
}
