@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Produk</h1>
    <a href="/produk" class="btn btn-success">Back to Produk</a>
</div>
<div class="col-lg-8">
    <form action="{{ route('produk.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="namaProduk" class="form-label">Nama Produk</label>
            <input type="text" name="nama" id="namaProduk" class="form-control">
        </div>
        <div class="mb-3">
            <label for="hrgProduk" class="form-label">Harga Produk</label>
            <input type="text" name="hrg" id="hrgProduk" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jmlProduk" class="form-label">Jumlah</label>
            <input type="text" name="jml" id="jmlProduk" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection