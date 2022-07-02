<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasar Pasalaran Pdf</title>
</head>
<body>
    {{-- judul laporan --}}
    <div>
        <h1 align="center">
            <b>Data Pedagang Pasalaran
                <br>
                Tahun
            </b>
        </h1>
    </div>
    <div class="mt-5">
        <h3>Toko</h3>
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
                        <td style="text-align: center">-</td>
                        <td style="text-align: center">-</td>
                        <td >{{ $item->nama }}</td>
                        <td style="text-align: center">{{ $item->nik }}</td>
                        <td style="text-align: center">{{ $item->tanggal_lahir }}</td>
                        <td style="text-align: center">{{ $item->jenis_kelamin }}</td>
                        <td style="text-align: center">{{ $item->alamat }}</td>
                        <td style="text-align: center">{{ $item->jenis_jualan }}</td>
                        <td style="text-align: center">-</td>
                        <td style="text-align: center">{{ $item->nomor_hp }}</td>
                        <td style="text-align: center">-</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</body>
</html>

