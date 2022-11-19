@extends('layouts.layout')
@section('content') 
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pembayaran Gas</h1>
</div><hr>
<div>
    <img src="asset/img/logo_pgn.png" width="250">
</div>
<div class="card-header py-3" align="right"> 
    <a href="{{route('gas.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr align="center">
                    <th width="15%">ID Bayar</th>
                    <th width="15%">Nomor Seri</th>
                    <th width="15%">NIK</th>
                    <th width="15%">Tanggal Bayar</th>
                    <th width="15%">Total Bayar</th>
                    <th width="25%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gas as $pgn)
                <tr>
                    <td>{{$pgn->id_pgn}}</td>
                    <td>{{$pgn->no_seri}}</td>
                    <td>{{$pgn->nik}}</td> 
                    <td>{{$pgn->tgl_byr}}</td> 
                    <td>{{$pgn->bayar}}</td>
                    <td align="center">
                        <a href="{{route('gas.show',[$pgn->id_pgn])}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                            <i class="fas fa-print fa-sm text-white-50"></i> Cetak Kuitansi
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
