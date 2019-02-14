<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $table = 'teches';
    public function tech()
    {
        return $this->hasMany('App\Article','article_id','id');
    }
}
