<?php

// fungsi untuk menampilkan data
function select($query)

// SELECT * FROM nama_tabel

{

    // panngil koneksi dari database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// function untuk menambahkan data barang
function create_barang($post)
{
    global $db;

    $nama = $post['nama'];
    $jumlah = $post['jumlah'];
    $harga = $post['harga'];

    // query tambah data
    $query = "INSERT INTO barang VALUES(null, '$nama', '$jumlah', '$harga',CURRENT_TIMESTAMP())";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


// fuction untuk mengupdate barang
function update_barang($post)
{
    global $db;

    $id_barang = $post['id_barang'];
    $nama = $post['nama'];
    $jumlah = $post['jumlah'];
    $harga = $post['harga'];

    // query ubah data
    $query = "UPDATE barang SET nama = '$nama', jumlah = '$jumlah', harga = '$harga' WHERE id_barang = $id_barang";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


// fuction untuk menghapus data barang

function delete_barang ($id_barang)
{
    global $db;


  // query hapus data 
  $query = "DELETE FROM barang WHERE id_barang = $id_barang";

  mysqli_query($db, $query);
  
  return mysqli_affected_rows($db);
}