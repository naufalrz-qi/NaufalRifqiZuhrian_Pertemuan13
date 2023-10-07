<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        return view('index');
    }

    public function list_barang(){
        return view('list_barang');
    }
}
