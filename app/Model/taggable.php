<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class taggable extends Model
{
    protected $table = "taggables";
    protected  $fillable = ['tag_id', 'taggable_id', 'taggable_type'];
}
