<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = ['name'];

    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function videos(){
        return $this->morphedByMany(Post::class, 'taggable');
    }
}
