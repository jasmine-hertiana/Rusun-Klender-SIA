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
        <tr align="center"><td><h2>Kuitansi Bayar Listrik<br>PPPSRSK</h2><hr></td></tr>
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
                @foreach ($listrik as $pln)
                <tr align="center">
                    <td>{{$pln->id_pln}}</td>
                    <td>{{$pln->no_seri}}</td>
                    <td>{{$pln->nik}}</td> 
                    <td>{{$pln->nama}}</td>
                    <td>{{$pln->memo}}</td> 
                    <td>{{$pln->tgl_byr}}</td> 
                    <td>Rp {{ number_format($pln->bayar) }}</td>
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