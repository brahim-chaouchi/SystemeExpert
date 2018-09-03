<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProblemeModel extends Model
{
    public $timestamps = false;
    protected $table = "Probleme";
    //protected $primaryKey = "id";
    protected $fillable = Array(
		"id",
		"Intitule");
}
