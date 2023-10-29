<?php

namespace App\Http\Controllers;

use App\Models\anggota_ukm_model;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function insert(Request $req){
        $date = date('YYYY-mm-dd H:i');
        $date = $req->tanggal_lahir;
    
        $anggota = anggota_ukm_model::updateOrCreate([
            'npm' => $req -> npm,
            'nama' => $req -> nama,
            'jenis_kelamin' => $req -> jenis_kelamin,
            'tanggal_lahir' => $date,
            'tempat_lahir' => $req -> tempat_lahir
        ]);
        return redirect()->back()->with('success', 'Data '. $anggota->npm .' berhasil ditambahkan');
    }

    public function select(){
        $data = anggota_ukm_model::all();

        return view('form_select' , ['anggota' => $data]);
    }
}
