<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atos extends Model
{

    protected $table = 'atos';

    public $timestamps = false;//desabilitar o campo 

    const UPDATE_AT = false;//desabilitar o campo

    protected $fillable = ['ato'];
}
