@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Rekapitulasi Pembayaran Air Harian</div>
                <div class="card-body"> 
                <form action="/rekapair/air" method="PUT" target="_blank"> 
                    @csrf
                    <fieldset>
                    <div class="form-group row"> 
                        <div class="col-md-4">
                            <label for="klasifikasi">Periode Transaksi</label>
                            <input id="jenis" type="hidden" name="jenis"value="harian" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="no_hp">Tanggal</label>
                            <input id="tanggal" type="date" name="tanggal" class="form-control">
                        </div>
                        <div class="col-md-10">
                        <input type="submit" class="btn btn-success btn-send" value="Cetak" >
                        </div>
                    </fieldset>
                </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Rekapitulasi Pembayaran Air Mingguan</div>
                <div class="card-body"> 
                <form action="/rekapair/air" method="PUT" target="_blank"> 
                    @csrf
                    <fieldset>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="klasifikasi">Periode Transaksi</label>
                            <input id="jenis" type="hidden" name="jenis"value="mingguan" class="form-control">
                        </div> 
                        <div class="col-md-3">
                            <label for="no_hp">Tanggal Awal</label>
                            <input id="tglawal" type="date" name="tglawal" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="no_hp">Tanggal Akhir</label>
                            <input id="tglakhir" type="date" name="tglakhir" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-10">
                        <input type="submit" class="btn btn-success btn-send" value="Cetak" >
                        </div>
                    </fieldset>            
                </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Rekapitulasi Pembayaran Air Bulanan</div>
                <div class="card-body"> 
                <form action="/rekapair" method="PUT" target="_blank"> 
                    @csrf
                    <fieldset>
                    <div class="form-group row"> 
                        <div class="col-md-4">
                            <label for="klasifikasi">Periode Transaksi</label>
                            <input id="jenis" type="hidden" name="jenis"value="bulanan" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="no_hp">Tanggal Awal</label>
                            <input id="tglawal" type="date" name="tglawal" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="no_hp">Tanggal Akhir</label>
                            <input id="tglakhir" type="date" name="tglakhir" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-10">
                        <input type="submit" class="btn btn-success btn-send" value="Cetak" >
                        </div>
                    </fieldset>
                </form>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection