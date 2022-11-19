@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hai {{ Auth::user()->name }} !! </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('SELAMAT DATANG di Sistem Web Perhimpunan Pemilik dan Penghuni Satuan Rumah Susun Klender') }}
                </div>
                <div class="card-body">
                    <h6>Apa sosial media PPPSRSK ?</h6>
                    <a href="https://m.facebook.com/SARUSUNKLENDER/">Facebook Komunitas PPPSRSK</a>
                </div>
                <div class="card-body">
                    <h6>Dimana Letak Gedung Serbaguna PPPSRSK ?</h6>
                    <a href="https://maps.app.goo.gl/xAG7aEtZgxyozZHH6">Gedung Serbaguna PPPSRSK</a>
                </div>
                <div class="card-body">
                    <h6>Provider apa saja yang tersedia ?</h6>
                    <h6>Tersedia Pembayaran Biaya Rumah Tangga dengan berbagai macam Provider :</h6>
                </div>
                <div>
                    <img src="asset/img/logo_pln.png" width="50">
                    <img src="asset/img/logo_token_pln.png" width="70">
                    <img src="asset/img/logo_pdam1.png" width="70">
                    <img src="asset/img/logo_pdam2.png" width="70">
                    <img src="asset/img/logo_pgn.png" width="80">
                    <img src="asset/img/logo_telkomsel.png" width="90">
                    <img src="asset/img/logo_im3.png" width="90">
                    <img src="asset/img/logo_xl.png" width="50">
                    <img src="asset/img/logo_tree.png" width="50">
            </div>
        </div>
    </div>
</div>
@endsection
