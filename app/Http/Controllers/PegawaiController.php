<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($nama)
    {
        return $nama;
    }
    public function formulir()
    {
        return view('formulir');
    }
    public function proses(Request $g)
    {
        $nama = $g->input('nama');
        $alamat = $g->input('alamat');
        $kelas = $g->input('kelas');
        $umur = $g->input('umur');
        $gender = $g->input('gender');
        return "Nama : " . $nama . "<br/>
         Alamat :" . $alamat . "<br/>
         Kelas :" . $kelas . "<br/>
         Umur :" . $umur . "<br/>
         Jenis Kelamin : " . $gender;
    }
}
