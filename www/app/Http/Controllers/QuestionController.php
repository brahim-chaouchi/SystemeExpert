<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function nouveau(){
        return view('Question/Nouveau');
    }
}
