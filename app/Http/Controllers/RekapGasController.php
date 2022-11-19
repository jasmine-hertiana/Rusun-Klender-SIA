<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
class RekapGasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekapgas.rekapgas');
    }

    public function show(Request $request)
    {
        $jenis=$request->get('jenis');
        if($jenis=='harian'){
            $tanggal=$request->get('tanggal');
            $rg=DB::table('rekap_gas')
            ->where('tgl_byr', [$tanggal])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekapgas.rekapgas_pdf',['rekapgas'=>$rg])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
        elseif($jenis=='mingguan')
        {
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $rg=DB::table('rekap_gas')
            ->whereBetween('tgl_byr', [$tglawal,$tglakhir])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekapgas.rekapgas_pdf',['rekapgas'=>$rg])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
        elseif($jenis=='bulanan')
        {
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $rg=DB::table('rekap_gas')
            ->whereBetween('tgl_byr', [$tglawal,$tglakhir])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekapgas.rekapgas_pdf',['rekapgas'=>$rg])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
    }
}
