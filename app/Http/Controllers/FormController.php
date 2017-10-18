<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('p3form.index');
    }
    
    public function checkAnswer(){
        return 'At this step it should check the answer...';
        #redirect...
    }
}
