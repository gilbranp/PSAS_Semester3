@extends('layouts.main')

@section('container')
<h3>Data Barang</h3> 
<div class="card">
    <div class="card-header">
<button type="button" class="btn btn-sm btn-success">
    <i class="fas fa-plus-circle"></i>Tambahkan Data
</button>
    </div>
</div>
<div class="alert alert-info">
    <table class="table table-sm table-striped table-bordered">
<thead>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Kategori</th>
        <th>Opsi</th>

    </tr>
</thead>
<tbody>
    @foreach ($tbbarangs as $row)
        <tr>
            <th>{{ $loop->iteration  }}</th>
            <td>{{ $row->no }}</td>
        </tr>
    @endforeach
</tbody>
    </table>
</div>

@endsection