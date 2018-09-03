<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultatModel extends Model
{
    public $timestamps = false;
    protected $table = "Resultat";
    //protected $primaryKey = "id";
    protected $fillable = Array(
		"id",
        "_Probleme",
        "_Reponse");
}
