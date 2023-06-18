<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::all();
        return view('produk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Produk;
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->jml = $request->jml;
        $data->save();
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $data = Produk::find($id);
        return view('produk.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Produk::find($id);
        return view('produk.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($produk->id);
        $model = Produk::find($id);
        $model->nama = $request->nama;
        $model->harga = $request->harga;
        $model->jml = $request->jml;
        $model->save();
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Produk::find($id);
        $model->delete();
        return redirect('produk');
    }
}
