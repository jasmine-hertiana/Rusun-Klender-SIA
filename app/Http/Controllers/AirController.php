<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
class AirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdam = \App\Air::All();
        return view( 'air.air' , ['air' => $pdam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pdam = \App\Air::All();
        return view( 'air.input' , ['air' => $pdam]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menyimpan Data Ke Tabel air
        $save_pdam = new \App\Air;
        $save_pdam->id_pdam=$request->get('id_pdam');
        $save_pdam->no_seri=$request->get('no_seri');
        $save_pdam->nik=$request->get('nik');
        $save_pdam->nama=$request->get('nama'); 
        $save_pdam->alamat=$request->get('alamat');
        $save_pdam->notelp=$request->get('notelp');
        $save_pdam->memo=$request->get('memo');
        $save_pdam->tgl_byr=$request->get('tgl_byr');
        $save_pdam->bayar=$request->get('bayar');
        $save_pdam->save(); 

        //Menyimpan Data Ke Tabel rekap_air
        $save_ra = new \App\RekapAir;
        $save_ra->id_pdam=$request->get('id_pdam');
        $save_ra->nik=$request->get('nik');
        $save_ra->memo=$request->get('memo');
        $save_ra->tgl_byr=$request->get('tgl_byr');
        $save_ra->bayar=$request->get('bayar'); 
        $save_ra->save();

        //Menyimpan Data Ke Tabel laporan
        $save_laporan= new \App\Laporan;
        $save_laporan->id_byr=$request->get('id_pdam');
        $save_laporan->tgl_byr=$request->get('tgl_byr');
        $save_laporan->memo=$request->get('memo');
        $save_laporan->bayar=$request->get('bayar');
        $save_laporan->save();

        return redirect()->route( 'air.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pdam = \App\Air::All();
    	$pdf = PDF::loadview('air.air_pdf',['air'=>$pdam])->setPaper('A4','landscape');
    	return $pdf->stream();
    }
}
