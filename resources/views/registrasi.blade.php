<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Register - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register  align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-6">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('assets') }}/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">NiceAdmin</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-success" onclick="pasienBaru()">Pesien Baru</button>
                                    <button class="btn btn-info" onclick="pasienLama()">Pasien Lama</button>

                                </div>
                                <div class="card-body">
                                    <form action="{{ route('pendaftaran.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <!-- General Form Elements -->
                                        <div id="data_form">

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="credits"> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>


        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('assets') }}/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.js"></script>
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
                <input type="hidden" name="opsi_kunjungan" value="online">
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
                <input type="hidden" name="opsi_kunjungan" value="online">
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
</body>

</html>
