<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function dataPenduduk(){
        $warga = Penduduk::all();

        return view('penduduk', compact('warga'));
    }
}
