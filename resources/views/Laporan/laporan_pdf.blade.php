<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
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
        <tr align="center"><td><h2>Laporan Pembayaran Biaya Rumah Tangga<br>PPPSRSK</h2><hr></td></tr>
    </table>
        <table class="table table-bordered" width="100%" align="center">
            <thead>
                <tr>
                    <th width="10%">ID Pembayaran</th>
                    <th width="10%">Tanggal Bayar</th>
                    <th width="10%">Catatan</th>
                    <th width="15%">Bayar</th>
                </tr>
            </thead>
            <tbody>
                @php($total_byr = 0)
                @foreach ($laporan as $laporan)
                <tr align="center">
                    <td>{{$laporan->id_byr}}</td>
                    <td>{{$laporan->tgl_byr}}</td>
                    <td>{{$laporan->memo}}</td> 
                    <td>Rp {{ number_format($laporan->bayar) }}</td>
                </tr>
                @php($total_byr += $laporan->bayar)
                @endforeach 
            </tbody>
        </table>
        <table class="table table-bordered" width="100%" align="center">
            <tr>
                <td>TOTAL</td>
                <td>Rp {{ number_format($total_byr) }}</td>
            </tr>
        </table>
        <div align="left">
            <h6>Tanda Tangan </h6><br><br><h6>Bendahara PPPSRSK</h6>
        </div>
        <div align="right">
            <h6>Tanda Tangan </h6><br><br><h6>Ketua PPPSRSK</h6>
        </div>
</body>
</html>