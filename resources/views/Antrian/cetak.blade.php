@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('assets') }}/img/p.jfif" alt="">
                        <span class="d-none d-lg-block">Data Antrian</span>
                    </a>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="row mt-3">
                        @foreach ($data_antrian as $antrian)
                            {{-- @dd($antrian) --}}
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h5 class="card-title">{{ $antrian->nama_poli }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">No Antrian</h6>
                                            <h1>{{ $antrian->kode }}{{ $antrian->no_antrian }}</h1>
                                            <a href="#" class="card-link">{{ $antrian->created_at }}</a>
                                        </center>
                                    </div>
                                    <div class="card-footer">
                                        <center>
                                            <a href="{{ route('kunjungan.show', $antrian->id_kunjungan) }}" target="_blank"
                                                class="btn btn-sm btn-success">Cetak</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
