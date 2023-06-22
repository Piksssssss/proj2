<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function show(){
        $data['product'] = Product::all();
        return view('product',$data);
    }
    function add(){
        $data = [
            'action'=> url('product/create'),
            'tombol'=> 'SIMPAN',
            'product'=>(object)[
                'nama' => '',
                'deskripsi' =>'',
                'harga' =>'',
                'foto' =>'',
            ]
            ];
        return view('form_product',$data);
    }
    function create(Request $request){ 
        Product::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto' => $request->file('foto')->store('foto'),
        ]);
        return redirect ('product');
    }
    function edit($id){
        $data['product'] = Product::find($id);
        $data['action'] = url('product/update').'/'.$data['product']->id;
        $data['tombol'] = "Update";
        return view('form_product',$data);
    }
    function update(Request $request){
        Product::where('id',$request->id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto' => $request->file('foto')->store('foto'),
        ]);
        return redirect ('product');
    }
    function hapus($id){
        Product::where('id',$id)->delete();
        return redirect('product');
    }
}
