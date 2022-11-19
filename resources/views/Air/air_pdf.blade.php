<!DOCTYPE html>
<html>
<head>
    <title>Kuitansi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
    table tr td,
    table tr th{
        font-size: 10pt;
    } 
    </style>
</head>
<body>
    <table class="table table-bordered" width="100%" align="center">
        <tr align="left"><td><img src="asset/img/logo_pppsrsk.png" width="100"></td></tr>
        <tr align="center"><td><h2>Kuitansi Bayar Air<br>PPPSRSK</h2><hr></td></tr>
    </table>
        <table class="table table-bordered" width="100%" align="center">
            <thead>
                <tr>
                    <th width="10%">ID Pembayaran</th>
                    <th width="10%">Nomor Seri</th>
                    <th width="10%">NIK</th>
                    <th width="10%">Nama</th>
                    <th width="25%">Catatan</th>
                    <th width="10%">Tanggal Bayar</th>
                    <th width="15%">Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($air as $pdam)
                <tr align="center">
                    <td>{{$pdam->id_pdam}}</td>
                    <td>{{$pdam->no_seri}}</td>
                    <td>{{$pdam->nik}}</td> 
                    <td>{{$pdam->nama}}</td>
                    <td>{{$pdam->memo}}</td> 
                    <td>{{$pdam->tgl_byr}}</td> 
                    <td>Rp {{ number_format($pdam->bayar) }}</td>
                </tr>
                @endforeach 
            </tbody>
        </table>
        <div align="center">
                <h2>LUNAS</h2><br>
        <div>
        <div align="right">
            <h6>Tanda Tangan Admin</h6><br><br><h6>{{ Auth::user()->name }}</h6>
        </div>
</body>
</html>