<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plantillaRevisor extends Model
{
    protected $table = 'plantillarevisors';
    protected $primaryKey  = ['idPlantilla','idUsuariRevisor'];
    public $timestamps = false;
    //public $incrementing = false;
}
