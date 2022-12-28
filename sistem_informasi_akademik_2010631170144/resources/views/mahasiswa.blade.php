@extends('layout.master')
@section('title'.'Dosen')
@section('active2','active')
@section('judul_halaman','Daftar Mahasiswa Kelas 5C Teknik Informatika 2022')
@section('daftar')
<div class="container">
    <ol class="list-group list-group-flush">
        @foreach ($mahasiswa as $mhs)
        <li class="list-group-item">{{ $mhs }}</li>
        @endforeach
    </ol>
</div>
@endsection