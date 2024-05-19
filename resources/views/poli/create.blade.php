@extends('layout')
@section('header')
    <div class="pagetitle">
        <h1>Tambah Poliklinik</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Poliklinik</li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Poliklinik </h5>

                    <!-- General Form Elements -->
                    <form action="{{ route('poli.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Poliklinik </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_poli">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Kode Poliklinik</label>
                            <div class="col-sm-10">
                                <input type="text" pattern="[A-Z]{1}"class="form-control" name="kode">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">&nbsp;</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('poli.index') }}" class="btn btn-outline-secondary">Kembali</a>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    @endsection
