<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dosen', function () {
    $dsn = [
        'Gunawan Aji Mulyadi M.Kom',
        'Abrar Riza S.T',
        'Daniel Christianto S.T.,M.T',
        'Diah Anggraini M.Si',
        'Hadian Satria Utama MSEE',
        'Alfianto Martin Sp.PD',
        'Daniel Ruslim Sp.Rad',
        'Denrich Suryadi M.Psi',
        'Kiky Dwi Hapsari S.Psi',
        'Ninawati Dra., M.M',
    ];
    return view('dosen')->with('dosen',$dsn);
});
Route::get('/mahasiswa', function () {
    $mhs = [
        'Nina Hardianti',
        'Hakky Maulana Alamsyah',
        'Jonathan Syafiqri',
        'Aditya Atreus',
        'Syafiqa Widianengsih',
        'Simon Riley',
        'Afiqa Kikonaktaw',
        'Deny Natalan',
        'Ujang Sosro',
        'Risky Syahrudin',
    ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});
Route::get('/mata_kuliah', function () {
    $mk = [
        'Bahasa Inggris',
        'Data Mining',
        'Kalkulus',
        'Framework Pemrograman',
        'Cloud Computing',
        'Technopreneur',
        'Pendidikan Pancasila',
        'Blockchain',
        'Kecerdasan Buatan',
        'Statistika & Probabilitas',

    ];
    return view('mata_kuliah')->with('mata_kuliah',$mk);
});
