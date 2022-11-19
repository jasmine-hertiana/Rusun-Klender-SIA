@extends('layouts.layout')
@section('content') 
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pembayaran Pulsa</h1>
</div><hr>
<div>
    <img src="asset/img/logo_telkomsel.png" width="200">
    <img src="asset/img/logo_im3.png" width="150">
    <img src="asset/img/logo_xl.png" width="80">
    <img src="asset/img/logo_tree.png" width="100">
</div>
<div class="card-header py-3" align="right"> 
    <a href="{{route('pulsa.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr align="center">
                    <th width="15%">ID Bayar</th>
                    <th width="15%">Provider</th>
                    <th width="15%">Nomor Telepon</th>
                    <th width="15%">Tanggal Bayar</th>
                    <th width="15%">Total Bayar</th>
                    <th width="25%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pulsa as $pls)
                <tr>
                    <td>{{$pls->id_pls}}</td>
                    <td>{{$pls->provider}}</td>
                    <td>{{$pls->notelp}}</td> 
                    <td>{{$pls->tgl_byr}}</td> 
                    <td>{{$pls->bayar}}</td>
                    <td align="center">
                        <a href="{{route('pulsa.show',[$pls->id_pls])}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
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
