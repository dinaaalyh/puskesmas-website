@extends('layout')

@section('header')
    <div class="pagetitle">
        <h1>Data Identitas Pasien</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="/report-Pasien" target="_blank""><i class="fas fa-print"></i>
                        Cetak Data</a>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <form action="/cari" method="GET">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="dari" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="sampai" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Cari Data">
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover mt-3">
                            <thead class="thead-light">
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Tempat Lahir</td>
                                    <td>Tanggal Lahir</td>
                                    <td>Jenis Kelamin</td>
                                    <td>Gol.Darah</td>
                                    <td>Agama</td>
                                    <td>Status Perkawinan</td>
                                    <td>Alamat</td>
                                    <td>No. HP</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasiens as $i => $pasien)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $pasien->nama }}</td>
                                        <td>{{ $pasien->tempat_lahir }}</td>
                                        <td>{{ $pasien->tanggal_lahir }}</td>
                                        <td>{{ $pasien->jenis_kelamin }}</td>
                                        <td>{{ $pasien->goldar }}</td>
                                        <td>{{ $pasien->agama }}</td>
                                        <td>{{ $pasien->status_perkawinan }}</td>
                                        <td>{{ $pasien->alamat }}</td>
                                        <td>{{ $pasien->nohp }}</td>
                                        <td>
                                            <form action="{{ route('pasien.destroy', $pasien->id_identitas) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-warning"
                                                    href="{{ route('pasien.edit', $pasien->id_identitas) }}">Ubah</a>
                                                <button type="submit" class="btn btn-danger" on
                                                    click="javascript: return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
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
