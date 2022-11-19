<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
class GasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pgn = \App\Gas::All();
        return view( 'gas.gas' , ['gas' => $pgn]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pgn = \App\Gas::All();
        return view( 'gas.input' , ['gas' => $pgn]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menyimpan Data Ke Tabel gas
        $save_pgn = new \App\Gas;
        $save_pgn->id_pgn=$request->get('id_pgn');
        $save_pgn->no_seri=$request->get('no_seri');
        $save_pgn->nik=$request->get('nik');
        $save_pgn->nama=$request->get('nama'); 
        $save_pgn->alamat=$request->get('alamat');
        $save_pgn->notelp=$request->get('notelp');
        $save_pgn->memo=$request->get('memo');
        $save_pgn->tgl_byr=$request->get('tgl_byr');
        $save_pgn->bayar=$request->get('bayar');
        $save_pgn->save(); 

        //Menyimpan Data Ke Tabel rekap_gas
        $save_rg = new \App\RekapGas;
        $save_rg->id_pgn=$request->get('id_pgn');
        $save_rg->nik=$request->get('nik');
        $save_rg->memo=$request->get('memo');
        $save_rg->tgl_byr=$request->get('tgl_byr');
        $save_rg->bayar=$request->get('bayar'); 
        $save_rg->save();

        //Menyimpan Data Ke Tabel laporan
        $save_laporan= new \App\Laporan;
        $save_laporan->id_byr=$request->get('id_pgn');
        $save_laporan->tgl_byr=$request->get('tgl_byr');
        $save_laporan->memo=$request->get('memo');
        $save_laporan->bayar=$request->get('bayar');
        $save_laporan->save();

        return redirect()->route( 'gas.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pgn = \App\Gas::All();
    	$pdf = PDF::loadview('gas.gas_pdf',['gas'=>$pgn])->setPaper('A4','landscape');
    	return $pdf->stream();
    }
}
