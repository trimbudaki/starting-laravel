<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about(){

       /* $data=[];
        $data =['first']= 'Lenart';
        $data =['last']= 'Avdiu';
       ==Second Medtod
       */

        $people =[
            'Lenart Avdiu','Elbasan Kadrija', 'Ardian Aliaj'
        ];

        return view('about', compact('people'));
    }


    public function contact(){
        return view('contact');
    }


    public function app(){
        return view('app');
    }

}
