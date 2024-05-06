<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<head>
  <meta charset="utf-8">
  <title>Informasi waifu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('asset/css/styleform.css'); ?>">

  <style>
    .btn-outline-waifu:hover {
      color: white !important;
      border-color: pink !important;
      background-color: pink !important;
    }

    .btn-outline-waifu {
      color: pink !important;
      border-color: pink !important;
    }
  </style>
</head>

<body style="background-image: url('http://localhost/waifu-ku/asset/img/classroomoftheelite.png'); background-repeat:round;">

  <div class="container">
    <div class="badan-bawah">
      
    <h3 class="mt-3">Informasi Waifu </h3>
      <form class="tengah" action="<?php echo site_url('controller/update/' . $waifu->kode); ?>" method="post"
        autocomplete="off" enctype="multipart/form-data">
        <div class="col-md-12 mb-3">
          <input class="form-control" readonly="readonly" type="text" name="nama" id="nama" placeholder="Nama waifu"
            value="<?php echo $waifu->nama; ?>"> 
        </div>
        <div class="col-md-12 mb-3">
          <input class="form-control" readonly="readonly" type="text" name="asal" id="asal" placeholder="asal"
            value="<?php echo $waifu->asal; ?>"> 
        </div>
        <div class="col-md-12">
          <div class="center col s12">
            <img class="responsive-img" id="image" width="100%"
              src="<?php echo site_url('asset/images/' . $waifu->gambar); ?>">
          </div>
        </div>
        <div class="form-group mt-3">
          <a href="<?= site_url(''); ?>" class="btn btn-secondary">Kembali</a>
          <a href="<?= site_url('controller/update/' . $waifu->kode); ?>" class="btn btn-outline-waifu"
            id="update">Update</a>
        </div>
        <footer class="text-center">
          &#169; Project Praktikum Sistem Multimedia 2024 4IA01 Naufal & Farhan
        </footer>
    </div>
  </div>
</body>