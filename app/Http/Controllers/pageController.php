<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function action(){
        $ation = "action";
        return view('page.action',compact('action'));
    }

    public function showCustomer(){
      $id= "id";
      $customers = array(
        array(1,'Chandaraty','chandaraty@example.org'),
        array(2,'Maly','maly@example.org'),
        array(3,'Somphes','samphas@example.org'),
        array(4,'Donat','donat@example.org')
      );
      return view('pages.customer',compact('customers','id'));
    }
}
