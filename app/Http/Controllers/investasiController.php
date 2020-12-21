<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\investasi;

class investasiController extends Controller
{
    public function index(){
        $investasi =  investasi::all();

        return view('investasi', ['investasi' => $investasi]);
    }
}
