<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReponseModel extends Model
{
    public $timestamps = false;
    protected $table = "Reponse";
    //protected $primaryKey = "id";
    protected $fillable = Array(
		"id",
        "_Question",
        "_Possibilite");
}
