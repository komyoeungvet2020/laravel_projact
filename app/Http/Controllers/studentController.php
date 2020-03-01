<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
   public $students = ['Preab','Sovath','Reach','Rith','Kanha'];
   public function showStudent(){
   return view('pages.student')->with('students',$this->students);
  }
}
