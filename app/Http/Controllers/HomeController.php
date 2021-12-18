<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\transaksi;
use App\pemasukan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function barang()
    {
        $bs= barang::all();
       
         return view('Stock.stockForm',['barang'=>$bs]);
        
    }
    public function transaksi()
    {
        $ts= transaksi::all();
        $br=barang::all();
         return view('Transaksi.transaksiPenjualan',compact('ts','br'));
    }
    public function pembelian()
    {
        $pm=pemasukan::all();
        $br=barang::all();
         return view('Transaksi.transaksiPembelian',compact('pm','br'));
    }
    public function cetakLaporan()
    {
        $pm=pemasukan::all();
        $ts=transaksi::all();
         return view('Transaksi.cetakTransaksi',compact('pm','ts'));
    }
    public function saveBarang(Request $request)
    {
        
        $add=new barang([
            'nama_barang' =>$request->input('nama_barang'),
            'id_user' =>$request->input('id_user'),
            'ukuran' =>$request->input('ukuran'),
            'jumlah' => $request->input('jumlah'),
            'harga_barang' => $request->input('harga_barang')

        ]);
        $add->save();
        
        return redirect('/stok');
       
        
    }
    public function saveTransaksi(Request $request)
    {
        $id =$request->input('id_barang');
        $buk= barang::where('id',$id)->pluck('harga_barang')->first(); 
        $jm =$request->input('jumlah_barang');
        $th=($buk*$jm);
        $coba=barang::where('id',$id)->pluck('jumlah')->first();
        $coba2=($coba-$jm);
        $upt=barang::where('id',$id)->first();
        $add=new transaksi([
            'id_barang' =>$request->input('id_barang'),
            'id_user' =>$request->input('id_user'),
            'jumlah_barang' =>$request->input('jumlah_barang'),
            'total_harga' => $th,

        ]);
        $add->save();
        $upt->jumlah =$coba2;
        $upt->save();
        return redirect('/transaksiPenjualan');
       
        
    }
    public function savePembelian(Request $request)
    {
        $id =$request->input('id_barang');
        $buk= barang::where('id',$id)->pluck('harga_barang')->first(); 
        $jm =$request->input('jumlah_barang');
        $th=($buk*$jm);
        $coba=barang::where('id',$id)->pluck('jumlah')->first();
        $coba2=($coba+$jm);
        $upt=barang::where('id',$id)->first();
        $add=new pemasukan([
            'id_barang' =>$request->input('id_barang'),
            'id_user' =>$request->input('id_user'),
            'jumlah_barang' =>$request->input('jumlah_barang'),
            'total_harga' => $th,

        ]);
       
        $add->save();
        $upt->jumlah =$coba2;
        $upt->save();
        return redirect('/transaksiPembelian');
       
        
    }
    public function cetak_transaksi()
    {
    	$transaksi =  transaksi::all();
 
    	$pdf = PDF::loadview('transaksi_pdf',['transaksi'=>$transaksi]);
    	return $pdf->download('laporan-transaksi-pdf');
    }
    public function cetak_pemasukan()
    {
    	$pemasukan =  pemasukan::all();
 
    	$pdf = PDF::loadview('pemasukan_pdf',['pemasukan'=>$pemasukan]);
    	return $pdf->download('laporan-pemasukan-pdf');
    }
}

