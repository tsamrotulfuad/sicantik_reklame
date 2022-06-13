<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Reklame 2021</title>
  </head>
  <body>
    <div class="container-fluid">
        <main>
            <div class="py-3 text-center">
                <h4>DATA REKLAME</h4>
                <h5 class="pt-0">DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU</h5>
                <h5 class="pt-0">KOTA PASURUAN</h5>
                <h5 class="pt-0">TAHUN 2021</h5>
            </div>
            <div class="py-3">
                <table class="table table-bordered table-responsive-sm">
                    <tr>
                        <td class="table-secondary"><b>No</b></td>
                        <td class="table-secondary"><b>No. Register Izin</b></td>
                        <td class="table-secondary"><b>Nama Pemohon</b></td>
                        <td class="table-secondary"><b>Alamat Pemohon</b></td>
                        <td class="table-secondary"><b>Bentuk Reklame</b></td>
                        <td class="table-secondary"><b>Ukuran & Sisi</b></td>
                        <td class="table-secondary"><b>Jumlah Unit</b></td>
                        <td class="table-secondary"><b>Teks Reklame</b></td>
                        <td class="table-secondary"><b>Jenis Reklame</b></td>
                        <td class="table-secondary"><b>Lokasi</b></td>
                        <td class="table-secondary"><b>Mulai</b></td>
                        <td class="table-secondary"><b>Selesai</b></td>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($collection as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">{{ $item['no_izin'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['alamat'] }}</td>
                        <td>{{ $item['jenis_reklame'] }}</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">{{ $item['ukuran'] }}</td>
                        <td>{{ $item['jumlah'] }}</td>
                        <td>{{ $item['isi_reklame'] }}</td>
                        <td>{{ $item['jenis_izin'] }}</td>
                        <td>{{ $item['lokasi_izin'] }}</td>
                        <td>{{ $item['tgl_mulai_berlaku'] }}</td>
                        <td>{{ $item['tgl_akhir_berlaku'] }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </main>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
