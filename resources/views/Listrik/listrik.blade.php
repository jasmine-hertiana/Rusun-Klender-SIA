@extends('layouts.layout')
@section('content') 
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pembayaran Listrik</h1>
</div><hr>
<div>
    <img src="asset/img/logo_pln.png" width="100">
    <img src="asset/img/logo_token_pln.png" width="180">
</div>
<div class="card-header py-3" align="right"> 
    <a href="{{route('listrik.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                    <th width="35%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listrik as $pln)
                <tr>
                    <td>{{$pln->id_pln}}</td>
                    <td>{{$pln->no_seri}}</td>
                    <td>{{$pln->nik}}</td> 
                    <td>{{$pln->tgl_byr}}</td> 
                    <td>{{$pln->bayar}}</td>
                    <td align="center">
                        <a href="{{route('listrik.show',[$pln->id_pln])}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
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
