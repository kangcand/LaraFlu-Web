<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','content','post_type','author_id','category_id', 'meta_data'];

}
