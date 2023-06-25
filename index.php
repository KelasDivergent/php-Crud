<?php
// headernya dipanngil melalui header.php
include 'layout/header.php';


// variabel baru menggunakan fungsi SELECT untuk memasukkan data barang
$data_barang = select("SELECT * FROM barang");

?>

<div class="container mt-3">
 

  <h1>Data Barang</h1>
  <hr>
  <a href="tambah-barang.php" class="btn btn-info mb-3">Tambah</a>

  <!-- table boostrap -->
  <table class="table table-bordered table-striped-columns mt-3">
    <thead>
      <tr>
        <th>No:</th>
        <th>Nama:</th>
        <th>Jumlah:</th>
        <th>Harga:</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      <?php $no = 1; ?>
      <!-- untuk memanggil data yang ada di data base mysql -->
      <?php foreach ($data_barang as $barang) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $barang['nama']; ?></td>
          <td><?= $barang['jumlah']; ?></td>
          <td>Rp.<?= number_format($barang['harga'], 0, ',', '.'); ?></td>
          <td><?= date('d/m/Y | H:i:s', strtotime($barang['tanggal'])) ?></td>
          <td width="15%" class="text-center">

            <a href="ubah-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-success">Edit</a>
            <a href="hapus-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>

<!-- footernya dipanggil melalui footer.php -->
<?php include 'layout/footer.php' ?>