<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;


class AnswersController extends Controller
{
    public function check (Request $request){

     /**
      * Was bringt dir das? du speicherst ja nicht die vom User eingegebene Antwort ab,
      * sondern die korrekte Antwort, wenn ich das richtig verstehe. Du musst also die Antwort,
      * die der User über das $request Objekt übermittelt hat, in dieser Funktion vergleichen.
      */
      $user_answer = DB::table('levels')->find(3);

       $answer = Answers::all();

       // $answer =  User::where('answer','=','$answer');
        
        if(!$user_answer ===  $answer){
           // return response()->json(['success'=>false,'message'=>'Try again!']);
           return Redirect::to('/game2')
           ->with('true','yeahhh');
        }
      //  return response()->json(['success'=>true,'message'=>'perfect!']);

      return Redirect::to('/game2')
      ->with('error','answer Wrong');
      
        


        


    }
}
