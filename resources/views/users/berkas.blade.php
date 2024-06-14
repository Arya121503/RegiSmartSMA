@extends('layouts.appuser')

@section('content')
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="{{ route('index') }}" class="brand-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark"
                    class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M10 15a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 10 13h3.5A1.5 1.5 0 0 0 15 11.5v-7A1.5 1.5 0 0 0 13.5 3H10a.5.5 0 0 1 0-1h3.5A2.5 2.5 0 0 1 16 4.5v7a2.5 2.5 0 0 1-2.5 2.5H10z" />
                    <path fill-rule="evenodd"
                        d="M4.854 11.854a.5.5 0 0 0 0-.708L2.707 9.5H10.5a.5.5 0 0 0 0-1H2.707l2.147-2.146a.5.5 0 0 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                </svg>
                <p class="brand-title" style="font-size: 20px;">Kembali ke Dashboard</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Upload Berkas
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="images/ion/man (1).png" width="20" alt="" />
                            <div class="header-info ms-3">
                                <span class="font-w600">Hi, <b>{{ $user->name }}</b></span>
                                <small class="text-end font-w400">{{ $user->email }}</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('upload.berkas') }}" aria-expanded="false">
                            <i class="bi bi-archive"></i>
                            <span class="nav-text">Upload Berkas</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="card">
                                            <div class="card-header">Upload Berkas</div>
                                            <div class="card-body">
                                                @if ($message = Session::get('success'))
                                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                                    <script>
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'File berhasil diupload',
                                                            showConfirmButton: false,
                                                            timer: 1500
                                                        });
                                                    </script>
                                                @endif

                                                @if ($message = Session::get('error'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @endif

                                                <!-- Form untuk mengunggah berkas -->
                                                <form action="{{ route('upload.submit') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="excel_file">Pilih berkas Excel:</label>
                                                        <input type="file" class="form-control-file @error('excel_file') is-invalid @enderror"
                                                            id="excel_file" name="excel_file">
                                                        @error('excel_file')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Unggah</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
