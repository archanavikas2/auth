<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutControlleer extends Controller
{
    //

    public function view(){
        return view('about_us');
    }

    public function itra(){
        return view('Infrastructure');
    }
    public function cont(){
        return view('Contect');
    }

     public function pvd(){
        return view('pvd-louver-panels');
    }

     public function sheet(){
        return view('pvd-metal-sheets');
    }

    public function stain(){
        return view('stainless-steel-decorative-profiles');
    }


    public function text(){
        return view('textured-sheets');
    }
}
