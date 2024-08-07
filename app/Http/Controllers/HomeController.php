<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil() {
    return view('accueil');
    }
    public function contacts() {
        return view('contacts');
            }
    

}