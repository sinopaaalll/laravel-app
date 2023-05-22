<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dataMahasiswa()
    {
        //set data
        $mhs1 = 'Budi Santoso'; $asal1 = 'Depok';
        $mhs2 = 'Siti Aminah'; $asal2 = 'Tangerang';
        //lempar data ke view
        return view('mahasiswa',compact('mhs1','mhs2','asal1','asal2'));
    }
}
