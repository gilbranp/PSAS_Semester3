<div class="card">
    <div class="card-header">
        <span style="float: left;">
    <h3>Data Kasir</h3>
</span>
        <span style="float: right";>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data Kasir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!--  -->

<form action="" method="post">
  
        <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
      </div>
      <div class="form-group">
        <label>Telp</label>
        <input type="text" name="telp" class="form-control">
      </div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
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

<?php
include "koneksi.php";

if (isset($_POST['simpan'])) 
{
  mysqli_query($conn, "insert into tbkasir_18351 set 
  namakasir = '$_POST[nama]',
  alamat = '$_POST[alamat]',
  telp = '$_POST[telp]',
  username = '$_POST[username]'");

}


?>
        </span>
    </div>
  <div class="card-body">
    <table class="table table-bordered table-hover">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Username</th>
        <th>OPSI</th>
    </tr>
    <?php
    require "koneksi.php";
    $no=1;
    $data = mysqli_query($conn,"select * from tbkasir_18351");

    while ($row = mysqli_fetch_array($data)) {
        
        ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['namakasir']; ?></td>
        <td><?php echo $row['alamat'];?></td>
        <td><?php echo $row['telp'];?></td>
        <td><?php echo $row['username'];?></td>
        <td>
            <a href="#" class="btn btn-warning">EDIT</a>
            <a href="#" class="btn btn-danger">HAPUS</a>
        </td>
    </tr>
    <?php
        }
    ?>
    </table>
  </div>
</div>

