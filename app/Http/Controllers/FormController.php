<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request){
        $firstTerm = $request->input('firstTerm',null);
        $factor = $request->input('factor',null);
        $terms = $request->input('terms',null);
        $type = $request->input('type',null);
        $roundup = $request->input('roundup',false);
        $output=null;
        $message='Please fill in all the required fields.';
        return view('p3form.index')->with(['firstTerm'=>$firstTerm,'factor'=>$factor,'terms'=>$terms,'type'=>$type, 'roundup'=>$roundup,'message'=>$message]);
    }
    
    public function answer(Request $request){
        $firstTerm = $request->input('firstTerm',null);
        $factor = $request->input('factor',null);
        $terms = $request->input('terms',null);
        $type = $request->input('type',null);
        $roundup = $request->input('roundup',false);
        
        $this->validate($request, [
        'firstTerm' => 'required|numeric',
        'factor' => 'required|numeric',
        'terms' => 'required|numeric',
        'type' => 'required'
        ]);
        
        if($type=='arithmetic'){
            $output=$terms*($firstTerm*2+($terms-1)*$factor)/2;
        }elseif($type=='geometric'){
            $output=$firstTerm*(1-pow($factor,$terms))/(1-$factor);
        }
        
        if($roundup==true){
            $output=round($output);
        }

        $message='The sum of this sequence is '.$output;

        return view('p3form.index')->with(['firstTerm'=>$firstTerm,'factor'=>$factor,'terms'=>$terms,'type'=>$type, 'roundup'=>$roundup,'message'=>$message]);
    }
}
