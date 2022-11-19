<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
class RekapAirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekapair.rekapair');
    }

    public function show(Request $request)
    {
        $jenis=$request->get('jenis');
        if($jenis=='harian'){
            $tanggal=$request->get('tanggal');
            $ra=DB::table('rekap_air')
            ->where('tgl_byr', [$tanggal])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekapair.rekapair_pdf',['rekapair'=>$ra])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
        elseif($jenis=='mingguan')
        {
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $ra=DB::table('rekap_air')
            ->whereBetween('tgl_byr', [$tglawal,$tglakhir])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekapair.rekapair_pdf',['rekapair'=>$ra])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
        elseif($jenis=='bulanan')
        {
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $ra=DB::table('rekap_air')
            ->whereBetween('tgl_byr', [$tglawal,$tglakhir])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekapair.rekapair_pdf',['rekapair'=>$ra])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
    }
}