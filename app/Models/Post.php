<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    public function author()
    {
        return $this->hasOne('App\User','id','author_id');
    }
}
