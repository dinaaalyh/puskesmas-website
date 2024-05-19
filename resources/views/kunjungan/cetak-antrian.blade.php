    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    <body onload="return window.print()">
        <div class="row justify-content-center">
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
                </div>
            </div>
        </div>
    </body>
