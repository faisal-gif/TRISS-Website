<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\transaksi;
use App\pemasukan;
use App\katalog;
use PDF;
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
    public function katalog()
    {
        $kt=katalog::all();
        $br=barang::all();
         return view('Katalog.formKatalog',compact('kt','br'));
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
    public function cetakTransaksi()
    {
    	$transaksi =  transaksi::all();
 
    	$pdf = PDF::loadview('Transaksi.pdfTransaksi',['transaksi'=>$transaksi]);
    	return $pdf->stream();
    }
    public function cetakPemasukan()
    {
    	$pemasukan =  pemasukan::all();
 
    	$pdf = PDF::loadview('Transaksi.pdfPemasukan',['pemasukan'=>$pemasukan]);
    	return $pdf->stream();
    }
    public function editStok($id)
    {
        $stok=barang::where('id',$id)->get();
        return view('Stock.updateStock',['stok'=> $stok]);
    }
    public function updateStok(Request $request)
    {
        $id = $request->input('id');
        $bar= barang::where('id',$id)->first();

        $bar->nama_barang =$request->input('nama_barang');
        $bar->ukuran =$request->input('ukuran');
        $bar->jumlah = $request->input('jumlah');
        $bar->harga_barang = $request->input('harga_barang');
        $bar->save();
        //return dd($kat);
        
        return redirect('/stok');
    }
    public function deleteStok($id)
    {
        $bar= barang::where('id',$id)->first()->delete(); 
         return redirect('/stok');
    }
    public function insertKatalog(Request $request)
    {
        $file = $request->file('foto');

        $filename = time().'.'.$file->getClientOriginalExtension();
        $path = $file->move('img',$filename);

        
        $add=new katalog([
            'foto' => $path,
            'id_barang' =>$request->input('id_barang'),
            'id_user' =>$request->input('id_user'),
            'deskripsi' => $request->input('deskripsi')

        ]);
        $add->save();
        
        return redirect('/tabelBuk');
       
        
    }
}

