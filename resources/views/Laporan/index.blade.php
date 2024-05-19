@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('assets') }}/img/p.jfif" alt="">
                        <span class="d-none d-lg-block">Data Laporan Puskesmas</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th colspan="4">Laporan</th>
                                </tr>
                                @foreach ($data['opsi_kunjungan'] as $r)
                                    <tr>
                                        <th>{{ $r->opsi_kunjungan }}</th>
                                        <td>:</td>
                                        <td>{{ $r->res }}</td>
                                    </tr>
                                @endforeach
                                @foreach ($data['jenis_kelamin'] as $r)
                                    <tr>
                                        <th>{{ $r->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</th>
                                        <td>:</td>
                                        <td>{{ $r->res }}</td>
                                    </tr>
                                @endforeach
                                @foreach ($data['layanan'] as $r)
                                    <tr>
                                        <th>{{ $r->layanan }}</th>
                                        <td>:</td>
                                        <td>{{ $r->res }}</td>
                                    </tr>
                                @endforeach
                                @foreach ($data['kondisi_kesehatan'] as $r)
                                    <tr>
                                        <th>{{ $r->kondisi_kesehatan }}</th>
                                        <td>:</td>
                                        <td>{{ $r->res }}</td>
                                    </tr>
                                @endforeach
                                @foreach ($data['nama_poli'] as $r)
                                    <tr>
                                        <th>{{ $r->nama_poli }}</th>
                                        <td>:</td>
                                        <td>{{ $r->res }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
