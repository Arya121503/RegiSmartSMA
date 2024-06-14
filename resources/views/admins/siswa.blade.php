@extends('layouts.appadmin')

@section('title', 'Data Siswa')

@section('header-content', 'Data Siswa')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Daftar Siswa</h4>
        </div>
        <div class="card-body">

        </div>
    </div>
</div>
@endsection
