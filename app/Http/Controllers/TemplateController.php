<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function affiche(){
        return view('frontend.aide');
    }

    public function jobs(){
        return view('frontend.job');
    }
    
    public function inscription(){
        return view('frontend.inscription');
    }

    public function renvoie(){
        return view('frontend.renvoie');
    }
    public function outils(){
        return view('frontend.outils');
    }

}
