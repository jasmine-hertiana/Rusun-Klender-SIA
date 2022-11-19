@extends('layouts.layout')
@section('content') 
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pembayaran Air</h1>
</div><hr>
<div>
    <img src="asset/img/pam jaya.png" width="220">
    <img src="asset/img/aetra.png" width="200">
</div>
<div class="card-header py-3" align="right"> 
    <a href="{{route('air.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                @foreach ($air as $pdam)
                <tr>
                    <td>{{$pdam->id_pdam}}</td>
                    <td>{{$pdam->no_seri}}</td>
                    <td>{{$pdam->nik}}</td> 
                    <td>{{$pdam->tgl_byr}}</td> 
                    <td>{{$pdam->bayar}}</td>
                    <td align="center">
                        <a href="{{route('air.show',[$pdam->id_pdam])}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
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
