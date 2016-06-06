<?php

namespace mir24\Http\Controllers;

use Illuminate\Http\Request;

use mir24\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
      	return view('main');
    }
}
