@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Produk</h1>
</div>
<div class="table-responsive m-3">
    <a href="/produk/create" class="btn btn-primary mb-3">Tambah Data<i class="bi bi-plus-circle"></i></a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Hrg</th>
                <th scope="col">jml</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $rec)
            <tr>
                <td>{{ $rec->id }}</td>
                <td>{{ $rec->nama }}</td>
                <td>{{ $rec->harga }}</td>
                <td>{{ $rec->jml }}</td>
                <td>
                    <a href="/produk/{{$rec->id}}" class="badge bg-info">
                        <i class="bi bi-eye"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('produk.edit', $rec->id) }}">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('produk.destroy', $rec->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="badge bg-danger"><i class="bi bi-x-circle-fill"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection