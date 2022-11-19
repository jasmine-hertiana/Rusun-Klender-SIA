@extends('layouts.layout')

@section('content') 
<form action="{{route('pulsa.store')}}" method="POST">
@csrf
    <fieldset>
        <div class="form-group row">
            <div class="col-md-5"> 
                ID Pembayaran<input id="id_pls" type="text" name="id_pls" class="form-control" value="" required>
            </div>
            <div class="col-md-5"> 
                Provider
                <select id="provider" name="provider" class="form-control" required>
                    <option value="">--Pilih Provider--</option>
                    <option value="Telkomsel">Telkomsel</option>
                    <option value="MyIm3">MyIm3</option>
                    <option value="XL">XL</option>
                    <option value="Tree">Tree</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                NIK<input id="nik" type="text" name="nik" class="form-control" value="" required>
            </div>
            <div class="col-md-5">
                Nama<input id="nama" type="text" name="nama" class="form-control" value="" required>
            </div>
            <div class="col-md-10">
                Alamat<textarea id="alamat" type="text" name="alamat" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5"> 
                Nomor Telepon<input id="notelp" type="text" name="notelp" class="form-control" value="" required>
            </div>
            <div class="col-md-10">
                Memo<textarea id="memo" type="text" name="memo" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group row"> 
            <div class="col-md-5">
                Tanggal Bayar<input id="tgl_byr" type="date" name="tgl_byr" value=""class="form-control" required>
            </div>
            <div class="col-md-10">
                Total Bayar <input id="bayar" type="text" name="bayar" class="form-control" value="" required>
            </div>
        </div>
        <div class="form-group row">
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div>
        </div><hr>
    </fieldset>
</form>
@endsection