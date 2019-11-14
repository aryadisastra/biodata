<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DosenController extends Controller
{
    public function index()
    {
        $nama = "Aryadsstr";
        $pelajaran = ["a","b","c"];
        return view('biodata',['nama'=>$nama, 'pelajaran' => $pelajaran]);
    }
}
