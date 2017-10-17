<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return 'Show form to collect information from user...';
    }
    
    public function checkAnswer(){
        return 'At this step it should check the answer...';
        #redirect...
    }
}
