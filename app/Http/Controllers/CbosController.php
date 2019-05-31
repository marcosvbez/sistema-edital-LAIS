<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cbo;

class CbosController extends Controller
{
    public function index()
    {


        $cbos =Cbo::all();

        return view('cbos.index',compact('cbos'));

    }
}
