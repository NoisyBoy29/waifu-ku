<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<head>
  <meta charset="utf-8">
  <title>Upload Image File</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href=<?= base_url('asset/css/styleform.css'); ?>>

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

<body style="background-image: url('http://localhost/waifu-ku/asset/img/bangdream.png'); background-repeat:round;">


  <div class="container">
    <div class="badan-bawah">
      
      <h3 class="mt-3">Edit Profil Waifu </h3>
      <h6><?php echo validation_errors(); ?></h6>
      <h6><?php echo $this->session->flashdata('error'); ?></h6>
      <form class="tengah" action="<?php echo site_url('controller/update/' . $waifuku->kode); ?>" method="post"
        autocomplete="off" enctype="multipart/form-data">
        <div class="col-md-12 mb-3">
          <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama waifu"
            value="<?php echo $waifuku->nama; ?>"> 
        </div>
        <div class="col-md-12 mb-3">
          <input class="form-control" type="text" name="asal" id="asal" placeholder="asal"
            value="<?php echo $waifuku->asal; ?>"> 
        </div>
        <div class="col-md-12">
          <div class="center col s12">
            <img class="responsive-img" id="image" width="100%"
              src="<?php echo site_url('asset/images/' . $waifuku->gambar); ?>">
          </div>
          <div class="file-field input-field col s12">
            <div class="custom-file my-3">
              <input name="image" type="file" class="custom-file-input" id="images" onchange="thumbnail();">
              <label class="custom-file-label" for="customFile" style="text-align: left;">Pilih Foto Waifu</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <a href="<?= site_url('controller/index/' . $waifuku->kode); ?>" class="btn btn-secondary">Kembali</a>
          <button class="btn btn-outline-waifu" type="submit" name="submit" id="submitButton">Submit</button>
        </div>
        <footer class="text-center">
          &#169; Project Praktikum Sistem Multimedia 2024 4IA01 Naufal & Farhan
        </footer>
    </div>

    </form>
  </div>
</body>

<script type="text/javascript">

  document.getElementById("deleteLink").addEventListener("click", function (event) {
    var confirmation = confirm('Apakah ingin dihapus data ini?');
    if (!confirmation) {
      event.preventDefault(); // Menghentikan eksekusi link jika pengguna memilih Cancel
    }
  });

  function thumbnail() {
    var preview = document.querySelector('#image');
    var file = document.querySelector('input[type=file]').files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
      preview.src = reader.result;
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  }

</script>