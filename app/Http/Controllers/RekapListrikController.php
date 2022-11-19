<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class RekapListrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekaplistrik.rekaplistrik');
    }

    public function show(Request $request)
    {
        $jenis=$request->get('jenis');
        if($jenis=='harian'){
            $tanggal=$request->get('tanggal');
            $rl=DB::table('rekap_listrik')
            ->where('tgl_byr', [$tanggal])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekaplistrik.rekaplistrik_pdf',['rekaplistrik'=>$rl])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
        elseif($jenis=='mingguan')
        {
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $rl=DB::table('rekap_listrik')
            ->whereBetween('tgl_byr', [$tglawal,$tglakhir])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekaplistrik.rekaplistrik_pdf',['rekaplistrik'=>$rl])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
        elseif($jenis=='bulanan')
        {
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $rl=DB::table('rekap_listrik')
            ->whereBetween('tgl_byr', [$tglawal,$tglakhir])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekaplistrik.rekaplistrik_pdf',['rekaplistrik'=>$rl])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
    }
}
