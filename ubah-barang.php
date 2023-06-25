<!--panggil file database terlebih dahlu -->
<?php include 'layout/header.php';

// mengambil id_barang dari url (link)
$id_barang = (int)$_GET['id_barang'];

$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0] ;
// validasi data menggunakan required


// <!-- check apakah tombol ubah di tekan berhasil atau tidak di notifikasi menggunakan javascript-->
if (isset($_POST['ubah'])) {
  if (update_barang($_POST) > 0) {
    // echo "<script>
    // alert('Data Barang Berhasil Diubahkan');
    // document.location.href = 'index.php';
    //  </script>";
    header("Location:index.php?message=berhasil diupdate");
   
  } else {
    // validate ketika error belum ada form yang di isi
    // echo "<script>
    // alert('Data Barang Tidak Berhasil Diubahkan');
    // document.location.href = 'index.php';
    //  </script>";
    header("Location:index.php?message=gagal diupdate");
  }
}
?>
<div class="container mt-3">
  <h1>Ubah Barang</h1>
  <hr>

  <form action="" method="post">
    <input type="hidden" name="id_barang" value="<?= $barang['id_barang'];?>">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang ['nama']; ?>" placeholder="Nama barang..." required>
  </div>
  <div class="mb-3">
    <label for="jumlah" class="form-label">Jumlah Barang</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $barang ['jumlah']; ?>"placeholder="Jumlah barang..." required>
  </div>
 
  <div class="mb-3">
    <label for="harga" class="form-label">Harga Barang</label>
    <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang ['harga']; ?>" placeholder="Harga barang..."required>
  </div>
 
  <button type="submit" name="ubah" class="btn btn-info" style="float: right;">Ubah</button>
 
  </form>
</div>

<?php include 'layout/footer.php' ?>