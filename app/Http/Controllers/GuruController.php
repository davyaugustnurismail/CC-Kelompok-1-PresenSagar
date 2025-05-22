<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
   public function index()
{
    $guruList = [
        [
            'nama' => 'Budi Santoso',
            'mapel' => 'Matematika',
            'wali_kelas' => 'XI PPL 2'
        ],
        [
            'nama' => 'Siti Aminah',
            'mapel' => 'Bahasa Indonesia',
            'wali_kelas' => 'XI PPL 1'
        ],
        [
            'nama' => 'Ahmad Fauzi',
            'mapel' => 'Fisika',
            'wali_kelas' => 'X TKJ 1'
        ],
        [
            'nama' => 'Dewi Lestari',
            'mapel' => 'Bahasa Inggris',
            'wali_kelas' => 'XI RPL 3'
        ],
    ];

    return view('daftar-guru', compact('guruList'));
}
}
