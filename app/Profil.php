<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profil extends Model
{

    use SoftDeletes;

    protected $table = 'profils';

    protected $dates = ['deleted_at'];
}
