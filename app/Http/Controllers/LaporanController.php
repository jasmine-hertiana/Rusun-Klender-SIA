<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporan.laporan');
    }

    public function show(Request $request)
    {
        $periode=$request->get('periode');
        $jenis=$request->get('jenis');
        if($periode == 'All')
        {
            $laporan = \App\Laporan::All();
            $pdf = PDF::loadview('laporan.laporan_pdf',['laporan'=>$laporan])->setPaper('A4','landscape');
            return $pdf->stream();
        }elseif($periode == 'periode'){
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $laporan=DB::table('laporan')
            ->whereBetween('tgl_byr', [$tglawal,$tglakhir])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('laporan.laporan_pdf',['laporan'=>$laporan])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
    }  
}