@extends('layout')
@section('header')
    <div class="pagetitle">
        <h1>Tambah Identitas Pasien</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Pasien</li>
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
                    <h5 class="card-title">Data Identitas </h5>

                    <!-- General Form Elements -->
                    <form action="{{ route('pasien.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Pasien</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="nohp">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tempat_lahir">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal_lahir">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">

                                <select class="form-control" name="jenis_kelamin">
                                    <option selected disabled>.:: Jenis Kelamin ::.</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Golongan Darah</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="goldar">
                                    <option selected disabled>.:: Golongan Darah ::.</option>
                                    @foreach (['A', 'B', 'AB', 'O'] as $r)
                                        <option value="{{ $r }}">Darah {{ $r }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="agama">
                                    <option selected disabled>.:: Pilih Agama ::.</option>
                                    @foreach (['Islam', 'Kristen', 'Hindu', 'Budha', 'Kepercayaan'] as $r)
                                        <option value="{{ $r }}">{{ $r }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Status Perkawinan</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status_perkawinan">
                                    <option selected disabled>.:: Pilih Agama ::.</option>
                                    @foreach (['Kawin', 'Tidak Kawin', 'Cerai Mati', 'Cerai Hidup'] as $r)
                                        <option value="{{ $r }}">{{ $r }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" rows="4" name="alamat"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">&nbsp;</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('pasien.index') }}" class="btn btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                </div>

                </form><!-- End General Form Elements -->

            </div>
        </div>

    </div>
@endsection
