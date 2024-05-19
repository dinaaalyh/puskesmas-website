<body onload="javascript:window.print()" style="margin:0 auto; width: 1000px;">
    <div style="margin-left:20px"></div>
    <table width="90%" cellpadding="0" cellpading="0">
        <tr>
            <td>
                <div align="center">
                    <img width="150px" src="{{ asset('assets') }}/img/p.jfif" alt="" alt="">

                </div>
            </td>

            <td>
                <div align="center">
                    <font size="20"> CETAK DATA KUNJUNGAN PASIEN</forn>
                        <font size="5">
                            <br>Jl. Mangga Raya |No.2 Telp.0231-8800756</forn>
                </div>
            </td>
        </tr>
    </table><br>
    <hr>
    <label>
        <font size="5">DATA KUNJUNGAN PASIEN</font>
    </label>
    <br></br>
    <table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <th style="border-right: 1px solid grey;"> No.</th>
            <th align="center" style="border-right: 1px solid grey;">Nama Poli</th>
            <th align="center" style="border-right: 1px solid grey;">Antrian</th>
            <th align="center" style="border-right: 1px solid grey;">Nama</th>
            <th align="center" style="border-right: 1px solid grey;">Tempat, Tanggal Lahir</th>
        </tr>

        @foreach ($kunjungans as $i => $kunjungan)
            <td align="center" style="border:-right: 1px solid gray; border-top: 1px solid gray; padding; 3px 5px;">
                {{ ++$i }}</td>
            <td align="center" style="border:-right: 1px solid gray; border-top: 1px solid gray; padding; 3px 5px;">
                {{ $kunjungan->nama_poli }}</td>
            <td align="center" style="border:-right: 1px solid gray; border-top: 1px solid gray; padding; 3px 5px;">
                {{ $kunjungan->kode }}{{ $kunjungan->no_antrian }}</td>
            <td align="center" style="border:-right: 1px solid gray; border-top: 1px solid gray; padding; 3px 5px;">
                {{ $kunjungan->nama }}</td>
            <td align="center" style="border:-right: 1px solid gray; border-top: 1px solid gray; padding; 3px 5px;">
                {{ $kunjungan->tempat_lahir }},
                {{ date('d M Y', strtotime($kunjungan->tanggal_lahir)) }}</td>

            </tr>
        @endforeach
    </table>
    <p>&nbsp;</p>
    <table align="right" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <center>Cirebon, <?php echo date('d F Y'); ?> </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    KEPALA PUSKESMAS
                </center>
                <p><img width="150px"
                        src=https://www.shutterstock.com/image-vector/vector-signature-autograph-hand-drawn-260nw-2046349127.jpg
                        alt=""></p>
                <center> H. Rastam, AMK, SE.</center>
            </td>
        </tr>
    </table>
</body>
