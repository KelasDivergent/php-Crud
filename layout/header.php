<?php
// panggil file database terlebih dahlu
include 'config/app.php';

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar CRUD PHP</title>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="div">
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container">
                <a class="navbar-brand" href="#">CRUD Php</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link aria-current=" page" href="index.php">Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Modal</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>