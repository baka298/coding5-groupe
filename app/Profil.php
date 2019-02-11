<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table ='profils';

   
    public  function  user()

    {
    
    return  $this->hasOne('App\User','user_id','id');
    
    
    }
}
