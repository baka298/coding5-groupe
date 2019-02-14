<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function art() {
        return $this->belongsTo('App\Tech','tech_id','id');
    }
}
