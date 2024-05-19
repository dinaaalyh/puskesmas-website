<div class="pagetitle">
    <h1>Data Kunjungan Pasien</h1>
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

                <a href="{{ route('pendaftaran.create') }}" class="btn btn-success">Tambah Kunjungan</a>
                <a class="btn btn-primary" href="/report-Kunjungan" target="_blank""><i class="fas fa-print"></i>
                    Cetak Data</a>
            </div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover mt-3">
                        <thead class="thead-light">
                            <tr>
                                <td>No</td>
                                <td>Nama Poli</td>
                                <td>Antrian</td>
                                <td>Nama</td>
                                <td>Biaya Dibayarkan</td>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kunjungans as $i => $kunjungan)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $kunjungan->nama_poli }}</td>
                                    <td align="center">
                                        <h5>{{ $kunjungan->kode }}{{ $kunjungan->no_antrian }}</h5>
                                        <a href="{{ route('kunjungan.show', $kunjungan->id_kunjungan) }}"
                                            target="_blank">
                                            <i class="bi bi-printer-fill" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>{{ $kunjungan->nama }}</td>
                                    <td>Rp.{{ number_format($kunjungan->biaya) }}</td>
                                    <td>{{ $kunjungan->tempat_lahir }},
                                        {{ date('d M Y', strtotime($kunjungan->tanggal_lahir)) }}</td>
                                    <td>
                                        {{-- <form action="{{ route('kunjungan.destroy', $kunjungan->id_identitas) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-warning"
                                                    href="{{ route('kunjungan.edit', $kunjungan->id_identitas) }}">Ubah</a>
                                                    <button type="submit" class="btn btn-danger" on
                                                    click="javascript: return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                                    <button type="submit" class="btn btn-danger" on
                                                    click="javascript: return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form> --}}
                                        <a class="btn btn-secondary"
                                            href="{{ route('kunjungan.show', $kunjungan->id_identitas) }}">Lihat
                                            Detail</a>
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
