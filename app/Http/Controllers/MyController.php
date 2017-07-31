<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orangtua;
class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Faksy Gumantera";
    	return $a;
    }
    public function tampilmodel()
    {
    	$ortu = Orangtua::all();
    	return $ortu;
    }
    public function tampilview()
    {
    	return view('about');
    }
    public function percobaan()
    {
    	$ortu = Orangtua::all();
    	return view('about', compact('ortu'));
    }

}
