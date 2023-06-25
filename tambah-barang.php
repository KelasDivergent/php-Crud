<!--panggil file database terlebih dahlu -->
<?php include 'layout/header.php';
// validasi data menggunakan required

// <!-- check apakah tombol tambah di tekan berhasil atau tidak di notifikasi menggunakan javascript-->
if (isset($_POST['tambah'])) {
  if (create_barang($_POST) > 0) {
    // echo "<script>
    // alert('Data Barang Berhasil Ditambahkan');
    // document.location.href = 'index.php';
    //  </script>";
    header("Location:index.php?message=berhasil diupdate");

  } else {

    // echo "<script>
    // alert('Data Barang Tidak Berhasil Ditambahkan');
    // document.location.href = 'index.php';
    //  </script>";
    header("Location:index.php?message=gagal diupdate");

  }
}
?>
<div class="container mt-3">
  <h1>Tambah Barang</h1>
  <hr>

  <form action="" method="post">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama barang..." required>
  </div>
  <div class="mb-3">
    <label for="jumlah" class="form-label">Jumlah Barang</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah barang..." required>
  </div>
 
  <div class="mb-3">
    <label for="harga" class="form-label">Harga Barang</label>
    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga barang..."required>
  </div>
 
  <button type="submit" name="tambah" class="btn btn-info" style="float: right;">Tambah</button>
 
  </form>
</div>

<?php include 'layout/footer.php' ?>