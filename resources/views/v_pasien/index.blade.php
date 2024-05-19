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
                        <div class="col-lg-8 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="card-title">Identitas Pasien</span>
                                </div>
                                <div class="card-body pt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card border-1">
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
                                                        <a href="{{ route('v_pasien_cetak', $antrian->id_kunjungan) }}" target="_blank"
                                                            class="btn btn-sm btn-success">Cetak</a>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <table>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>:</td>
                                                    <td>{{ $antrian->nama }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
</body>

</html>


