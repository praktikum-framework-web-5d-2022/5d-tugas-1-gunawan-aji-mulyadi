@extends('layout.master')
@section('title'.'Dosen')
@section('active3','active')
@section('judul_halaman','Daftar Mata Kuliah Semester Ganjil 2022')
@section('daftar')
<div class="container">
    <ol class="list-group list-group-flush">
        @foreach ($mata_kuliah as $mk)
        <li class="list-group-item">{{ $mk }}</li>
        @endforeach
    </ol>
</div>
@endsection