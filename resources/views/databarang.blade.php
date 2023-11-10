@extends('layouts.main')

@section('container')
<h3>Barang</h3>
<div class="card">
  <div class="card-header">
      <span style="float: left;">
  <h5>Data Barang</h5>
</span>
      <span style="float: right";>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data Barang</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

      <!--  -->

<form action="" method="post">

      <div class="form-group">
      <label>Nama Barang</label>
      <input type="text" name="nama" class="form-control">
    </div>
    <div class="form-group">
      <label>Harga</label>
      <input type="text" name="alamat" class="form-control">
    </div>
    <div class="form-group">
      <label>Stok Barang</label>
      <input type="text" name="telp" class="form-control">
    </div>
    <div class="form-group">
      <label>Kategori Barang</label>
      <select name="username" class="form-control">
        <option value="option1">Pakaian Wanita</option>
        <option value="option2">Pakaian Pria</option>
        <option value="option3">Tas Wanita</option>
        <option value="option3">Tas Pria</option>
        <option value="option3">Sepatu Wanita</option>
        <option value="option3">Sepatu Pria</option>
        <option value="option3">Aksesoris</option>


      </select>
    </div>
  </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">

      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>

  </div>
</div>
</div>

</form>
          
</span>
</div>
<div class="card-body">
<table class="table table-bordered table-hover">
<tr>
    <th>NO</th>
    <th>Nama Barang</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Kategori</th>
    <th>OPSI</th>
</tr>
              
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td>
      <a href="#" class="btn btn-warning">EDIT</a>
      <a href="#" class="btn btn-danger">HAPUS</a>
  </td>
</tr>      

@endsection