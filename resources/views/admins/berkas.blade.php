

@extends('layouts.appadmin') <!-- Pastikan layout 'appadmin' sudah ada -->

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Berkas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Pengguna</th>
                                            <th>Nama Berkas</th>
                                            <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($berkas as $item)
                                            <tr>
                                                <td>{{ $item->nama_pengguna }}</td>
                                                <td>{{ $item->nama_berkas }}</td>
                                                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
