<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $ar_barang = Barang::all();
        return view('landingpage.home', compact('ar_barang'));
    }
}
