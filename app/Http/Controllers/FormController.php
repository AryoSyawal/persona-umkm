<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('pages.forms.index');
    }

    public function show(){
        return view('pages.forms.show');
    }
}
