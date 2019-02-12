<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Article extends Model
{
    protected $table = 'articles';
    public function techs(){
        return $this->belongsTo('App\Tech', 'tech_id','id');
    }
}