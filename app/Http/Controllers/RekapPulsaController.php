<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
class RekapPulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekappulsa.rekappulsa');
    }

    public function show(Request $request)
    {
        $jenis=$request->get('jenis');
        if($jenis=='harian'){
            $tanggal=$request->get('tanggal');
            $rp=DB::table('rekap_pulsa')
            ->where('tgl_byr', [$tanggal])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekappulsa.rekappulsa_pdf',['rekappulsa'=>$rp])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
        elseif($jenis=='mingguan')
        {
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $rp=DB::table('rekap_pulsa')
            ->whereBetween('tgl_byr', [$tglawal,$tglakhir])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekappulsa.rekappulsa_pdf',['rekappulsa'=>$rp])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
        elseif($jenis=='bulanan')
        {
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $rp=DB::table('rekap_pulsa')
            ->whereBetween('tgl_byr', [$tglawal,$tglakhir])
            ->orderby('tgl_byr','ASC')
            ->get();
            $pdf = PDF::loadview('rekappulsa.rekappulsa_pdf',['rekappulsa'=>$rp])->setPaper('A4','landscape');
            return $pdf->stream(); 
        }
    }
}
