@extends('layouts.appadmin')

@section('content')
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="javascript:void(0);" class="brand-logo" id="logoutBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark"
                    class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M10 15a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 10 13h3.5A1.5 1.5 0 0 0 15 11.5v-7A1.5 1.5 0 0 0 13.5 3H10a.5.5 0 0 1 0-1h3.5A2.5 2.5 0 0 1 16 4.5v7a2.5 2.5 0 0 1-2.5 2.5H10z" />
                    <path fill-rule="evenodd"
                        d="M4.854 11.854a.5.5 0 0 0 0-.708L2.707 9.5H10.5a.5.5 0 0 0 0-1H2.707l2.147-2.146a.5.5 0 0 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                </svg>
                <p class="brand-title" width="124px" height="33px" style="font-size: 20px;">Logout</p>
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
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none">Generate
                                    Report<i class="las la-signal ms-3 scale5"></i></a>
                            </li>
                        </ul>
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
                                <span class="font-w600">Hi, <b>{{ $admin->name }}</b></span>
                                <small class="text-end font-w400">{{ $admin->email }}</small>
                            </div>
                        </a>
                    </li>
                    <li><a href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashboard</span>
                        </a></li>
                    <li><a href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-050-info"></i>
                            <span class="nav-text">Data Siswa</span>
                        </a></li>
                    <li><a href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Table</span>
                        </a></li>
                </ul>
            </div>
        </div>

        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Rekapitulasi Pendaftaran</h4>
                            </div>
                            <div class="card-body">
                                <!-- Isi Konten Rekapitulasi Pendaftaran -->
                                <p>Jumlah pendaftar: 500</p>
                                <p>Jumlah diterima: 200</p>
                                <p>Jumlah cadangan: 50</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
