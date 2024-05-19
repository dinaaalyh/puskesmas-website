@extends('layout')
@section('header')
    <div class="pagetitle">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets') }}/img/p.jfif" alt="">
            <span class="d-none d-lg-block">Tambah Poliklinik</span>
        </a>
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
                <div class="card-header">
                    <button class="btn btn-success" onclick="pasienBaru()">Pesien Baru</button>
                    <button class="btn btn-info" onclick="pasienLama()">Pasien Lama</button>

                </div>
                <div class="card-body">
                    <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <!-- General Form Elements -->
                        <div id="data_form">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('javascript')
    <script>
        let form_layanan = `
                        <h5 class="card-title">Pilih Layanan Pasien</h5>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Pilih Layanan</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="layanan" onclick="getLayanan(this.value)" id="" value="bpjs"> BPJS
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="layanan" onclick="getLayanan(this.value)" id="" value="umum"> Umum
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Biaya Layanan</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="biaya" id="biaya" readonly>
            </div>
        </div>
        `;
        let form_kunjungan_lama = `
                        <h5 class="card-title">Form Kunjungan</h5>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Pilih Nama Pasien</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_identitas">
                            <option selected disabled>.:: Pilih Pasien ::.</option>
                            @foreach ($identitas as $r)
                                <option value="{{ $r->id_identitas }}">{{ $r->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Pilih Antrian</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_poli">
                            <option selected disabled>.:: Pilih Poli Tujuan ::.</option>
                            @foreach ($poli as $r)
                                <option value="{{ $r->id_poli }}">{{ $r->nama_poli }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Status pasien</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" value="Sehat" type="radio" name="kondisi_kesehatan"> Sehat
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" value="Sakit" type="radio" name="kondisi_kesehatan"> Sakit
                            </label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="opsi_kunjungan" value="offline">
                <input type="hidden" name="status_pasien" value="lama">


                <div class="row mb-3" id="btn-submit">
                    <label class="col-sm-2 col-form-label">&nbsp;</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('poli.index') }}" class="btn btn-outline-secondary">Kembali</a>
                    </div>
                </div>

                `;

                let form_identitas = `
                <h5 class="card-title">Identitas Pasien</h5>
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
                `;

            let form_kunjungan_baru = `
                <h5 class="card-title">Form Kunjungan</h5>

            <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Pilih Antrian</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_poli">
                            <option selected disabled>.:: Pilih Poli Tujuan ::.</option>
                            @foreach ($poli as $r)
                                <option value="{{ $r->id_poli }}">{{ $r->nama_poli }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Status pasien</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" value="Sehat" type="radio" name="kondisi_kesehatan"> Sehat
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" value="Sakit" type="radio" name="kondisi_kesehatan"> Sakit
                            </label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="opsi_kunjungan" value="offline">
                <input type="hidden" name="status_pasien" value="baru">


                <div class="row mb-3" id="btn-submit">
                    <label class="col-sm-2 col-form-label">&nbsp;</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('poli.index') }}" class="btn btn-outline-secondary">Kembali</a>
                    </div>
                </div>`;
    </script>
        <script>

            function pasienBaru() {
                $('#data_form').html(form_layanan + form_identitas + form_kunjungan_baru);
            }

            function pasienLama() {
                $('#data_form').html(form_layanan + form_kunjungan_lama);
            }
        </script>
        <script>
        const biaya_layanan = 15000;
        function getLayanan(value){
            // alert(value);
            if(value == "bpjs"){
                $('#biaya').val(0);
            }else{
                $('#biaya').val(biaya_layanan);
            }
        }
    </script>
    @endsection
