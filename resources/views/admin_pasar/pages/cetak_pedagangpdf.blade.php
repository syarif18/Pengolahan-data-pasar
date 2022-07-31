<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Pdf</title>
</head>
<body>
    {{-- judul laporan --}}
    <div>
        <h1 align="center">
            <b>Data Pedagang {{ auth()->user()->name }}
                <br>
                Tahun {{ $tahun }}
            </b>
        </h1>
    </div>
    <div style="padding-left: 2rem;">
        <h3 >{{ $search }}</h3>
    </div>

    {{-- nama --}}
            <table class="static" align="center" rules="all" border="1px" style="width: 95%">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Tempat</th>
                    <th scope="col">Ukuran M2</th>
                    <th scope="col">Nama Pedagang</th>
                    <th scope="col">Nomor NIK</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Jualan</th>
                    <th scope="col">Status Lapak</th>
                    <th scope="col">Nomer Handphone</th>
                    <th scope="col">Keterangan</th>
                </tr>
                @foreach ($cetakpdf as $item)
                    <tr>
                        <td style="text-align: center">{{ $loop->iteration }}</td>
                        <td style="text-align: center">{{ $item->nomor_tempat }}</td>
                        <td style="text-align: center">{{ $item->ukuran_tempat }}</td>
                        <td style="text-align: left">{{ $item->nama }}</td>
                        <td style="text-align: center">{{ $item->nik }}</td>
                        <td style="text-align: center">{{ $item->tanggal_lahir }}</td>
                        <td style="text-align: center">{{ $item->jenis_kelamin }}</td>
                        <td style="text-align: left">{{ $item->alamat }}</td>
                        <td style="text-align: center">{{ $item->jenis_jualan }}</td>
                        <td style="text-align: center">-</td>
                        <td style="text-align: center">{{ $item->nomor_hp }}</td>
                        <td style="text-align: center">-</td>
                    </tr>
                @endforeach
            </table>

            {{-- untuk rekap --}}

            <div style="width: 50%; text-align: justify; padding-left: 6rem; margin-top: 2%; float: left;">
               <b> CATATAN: </b><br><br>
                Laki-Laki: {{ $lk }}
                <br>
                Perempuan: {{ $pr }}
                <br>
                <b>JUMLAH: {{ $jum }}</b>
                <br><br>
                <b>STATUS:</b><br><br>
                buka: 90
                <br>
                buka/tutup: 10
                <br>
                tutup: 0
                <br>
                <b>JUMLAH: 100</b>

            </div>
            <div style="margin-top: 6%; d-flex;">

                {{-- <div style="width: 30%; text-align: center; float: left; font-weight: bold;">Mengetahui:</div> --}}
                <div style="width: 30%; text-align: center; float: right; font-weight: bold;">Mengetahui:</div> <br>

                {{-- <div style="width: 30%; text-align: center; float: left;  font-weight: bold;">Kepala {{ auth()->user()->name }}</div> --}}
                <div style="width: 30%; text-align: center; float: right;  font-weight: bold;">Kepala {{ auth()->user()->name }}</div>
            </div>
            <div style="margin-top: 6%;">
                {{-- <div style="width: 30%; text-align: center; float: left;  font-weight: bold;">Kepala {{ auth()->user()->name }}</div> --}}

                <div style="width: 30%; text-align: center; float: right;  font-weight: bold; text-decoration: underline;" >Sugiono</div>
                <div style="width: 30%; text-align: center; float: right;  font-weight: bold;">NIP. 0000000000</div>
            </div>

            {{-- Untuk TTD Rata --}}
            {{-- <div style="margin-top: 5%; d-flex;">
                <div style="width: 30%; text-align: center; float: left; font-weight: bold;">Mengetahui:</div>
                <div style="width: 30%; text-align: center; float: right; font-weight: bold;">Mengetahui:</div> <br>

                <div style="width: 30%; text-align: center; float: left;  font-weight: bold;">Kepala {{ auth()->user()->name }}</div>
                <div style="width: 30%; text-align: center; float: right;  font-weight: bold;">Kepala {{ auth()->user()->name }}</div>
            </div>
            <div style="margin-top: 5%;">
                <div style="width: 30%; text-align: center; float: left;  font-weight: bold;">Kepala {{ auth()->user()->name }}</div>

                <div style="width: 30%; text-align: center; float: right;  font-weight: bold;">Kepala {{ auth()->user()->name }}</div>
            </div> --}}

</body>
</html>

