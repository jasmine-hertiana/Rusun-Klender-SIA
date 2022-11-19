<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
class PulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pls = \App\Pulsa::All();
        return view( 'pulsa.pulsa' , ['pulsa' => $pls]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pls = \App\Pulsa::All();
        return view( 'pulsa.input' , ['pulsa' => $pls]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menyimpan Data Ke Tabel pulsa
        $save_pls = new \App\Pulsa;
        $save_pls->id_pls=$request->get('id_pls');
        $save_pls->provider=$request->get('provider');
        $save_pls->nik=$request->get('nik');
        $save_pls->nama=$request->get('nama'); 
        $save_pls->alamat=$request->get('alamat');
        $save_pls->notelp=$request->get('notelp');
        $save_pls->memo=$request->get('memo');
        $save_pls->tgl_byr=$request->get('tgl_byr');
        $save_pls->bayar=$request->get('bayar');
        $save_pls->save(); 

        //Menyimpan Data Ke Tabel rekap_pulsa
        $save_rp = new \App\RekapPulsa;
        $save_rp->id_pls=$request->get('id_pls');
        $save_rp->nik=$request->get('nik');
        $save_rp->memo=$request->get('memo');
        $save_rp->tgl_byr=$request->get('tgl_byr');
        $save_rp->bayar=$request->get('bayar'); 
        $save_rp->save();

        //Menyimpan Data Ke Tabel laporan
        $save_laporan= new \App\Laporan;
        $save_laporan->id_byr=$request->get('id_pls');
        $save_laporan->tgl_byr=$request->get('tgl_byr');
        $save_laporan->memo=$request->get('memo');
        $save_laporan->bayar=$request->get('bayar');
        $save_laporan->save();

        return redirect()->route( 'pulsa.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pls = \App\Pulsa::All();
    	$pdf = PDF::loadview('pulsa.pulsa_pdf',['pulsa'=>$pls])->setPaper('A4','landscape');
    	return $pdf->stream();
    }
}
