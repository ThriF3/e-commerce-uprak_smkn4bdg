<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $produks = Produk::all();
        return view('dashboard', ['produks'=>$produks]);
    }
    public function handleAdmin() {
        $produks = Produk::all();
        return view('admin.dashboard', ['produks'=>$produks]);
    }

    public function detail($id) {
        $produk = Produk::findOrFail($id);
        return view('detailproduct', ['produk'=>$produk]);
    }
    public function adminDetail($id) {
        $produk = Produk::findOrFail($id);
        return view('admin.detailproduct', ['produk'=>$produk]);
    }

    //Add Data
    public function tambah() {
        return view('admin.tambahdata');
    }
    public function store(Request $request) {
        $request->validate([
            'nama_produk'=>'required',
            'harga_produk'=>'required',
            'stok_produk'=>'required',
            'deskripsi_produk'=>'required',
            'img_produk'=>'required',
            'img_produk' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $name = 'img/'.$request->nama_produk.'.'.$request->file('img_produk')->getClientOriginalExtension();

        $save = new Produk;

        $img = $request->file('img_produk');
        $img->move('img', $name);

        $save->img_produk = $name;
        
        $save->nama_produk = $request->nama_produk;
        $save->harga_produk = $request->harga_produk;
        $save->stok_produk = $request->stok_produk;
        $save->deskripsi_produk = $request->deskripsi_produk;

        $save->save();
        return redirect('admin/dashboard')->with('success', 'Data berhasil disimpan!');
    }

    //Edit Edit
    public function edit($id) {
        $produk = Produk::findOrFail($id);
        return view('admin.tambahdata', ['produk'=>$produk]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'nama_produk'=>'required',
            'harga_produk'=>'required',
            'stok_produk'=>'required',
            'deskripsi_produk'=>'required',
            'img_produk'=>'required',
            'img_produk' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        
        $name = 'img/'.$request->nama_produk.'.'.$request->file('img_produk')->getClientOriginalExtension();

        $update = new Produk;

        $img = $request->file('img_produk');
        $img->move('img', $name);

        $requestData = $request->all();
        $requestData['img_produk'] = $name;

        $data = Produk::find($id)->update($requestData);
        return redirect('admin/dashboard')->with('success', 'Data berhasil disimpan!');
    }

    public function delete($id) {
        $produk = Produk::find($id);
        $produk->delete();

        return redirect('admin/dashboard')->with('success', 'Data berhasil dihapus!');
    }
}
