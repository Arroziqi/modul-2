<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class asu extends Controller
{
    //
    //
    public function showForm(){
        return view('index');
    }

    public function submitForm(){
        $data = [
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'prov' => $request->input('prov'),
            'kota' => $request->input('kota'),
            'no' => $request->input('no'),
        ];

        return view('dashboardAdmin', 'data');
    }
}