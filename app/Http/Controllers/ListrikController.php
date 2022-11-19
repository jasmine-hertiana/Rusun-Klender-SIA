<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class ListrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pln = \App\Listrik::All();
        return view( 'listrik.listrik' , ['listrik' => $pln]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pln = \App\Listrik::All();
        return view( 'listrik.input' , ['listrik' => $pln]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menyimpan Data Ke Tabel Listrik
        $save_pln = new \App\Listrik;
        $save_pln->id_pln=$request->get('id_pln');
        $save_pln->no_seri=$request->get('no_seri');
        $save_pln->nik=$request->get('nik');
        $save_pln->nama=$request->get('nama'); 
        $save_pln->alamat=$request->get('alamat');
        $save_pln->notelp=$request->get('notelp');
        $save_pln->memo=$request->get('memo');
        $save_pln->tgl_byr=$request->get('tgl_byr');
        $save_pln->bayar=$request->get('bayar');
        $save_pln->save(); 

        //Menyimpan Data Ke Tabel rekap_listrik
        $save_rl = new \App\RekapListrik;
        $save_rl->id_pln=$request->get('id_pln');
        $save_rl->nik=$request->get('nik');
        $save_rl->memo=$request->get('memo');
        $save_rl->tgl_byr=$request->get('tgl_byr');
        $save_rl->bayar=$request->get('bayar'); 
        $save_rl->save();

        //Menyimpan Data Ke Tabel laporan
        $save_laporan= new \App\Laporan;
        $save_laporan->id_byr=$request->get('id_pln');
        $save_laporan->tgl_byr=$request->get('tgl_byr');
        $save_laporan->memo=$request->get('memo');
        $save_laporan->bayar=$request->get('bayar');
        $save_laporan->save();

        return redirect()->route( 'listrik.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $pln = \App\Listrik::All();
    	$pdf = PDF::loadview('listrik.listrik_pdf',['listrik'=>$pln])->setPaper('A4','landscape');
    	return $pdf->stream();
    }
}
