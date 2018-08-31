<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PossibiliteModel extends Model
{
    public $timestamps = false;
    protected $table = "Possibilite";
    //protected $primaryKey = "id";
    protected $fillable = Array(
		"id",
		"Texte");
}
