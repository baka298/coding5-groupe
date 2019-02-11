<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{

    protected $table = 'profils';
    
    public function user() {
        return $this->belongsTo('App\User');
    }

    protected $dates = [
        'dateDeNaissance'
    ];
}
