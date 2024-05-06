<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h6><?php echo validation_errors(); ?></h6>
<h6><?php echo $this->session->flashdata('error'); ?></h6>

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

<body>

  <body style="background-image: url('http://localhost/waifu-ku/asset/img/gotobun.png'); background-repeat:round;">

    <div class="container">
      <div class="badan-bawah">
        
      <h3 class="mt-3">Tambah Waifu Baru</h3>
        <p>Silahkan isi data dibawah.</p>
        <form class="tengah" action="<?php echo site_url('controller/create/'); ?>" method="post" autocomplete="off"
          enctype="multipart/form-data">
          <div class="col-md-12 mb-3">
            <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Waifu" required value="">
            
          </div>
          <div class="col-md-12">
            <input class="form-control" type="text" name="asal" id="asal" placeholder="Asal Anime Waifu" required
              value="">
          </div>
          <div class="col-md-12">
            <div class="custom-file my-3">
              <input name="image" type="file" class="custom-file-input" id="image">
              <label class="custom-file-label" for="customFile" style="text-align: left;">Pilih Foto Waifu</label>
            </div>
          </div>
          <div class="form-group">
            <button class='btn btn-secondary' onclick="window.location.href='<?= site_url(''); ?>'">
              Kembali</button>
            <button class="btn btn-outline-waifu" type="submit" name="submit" id="submitButton" disabled>Submit</button>

            <script type="text/javascript">
              const inputFields = document.querySelectorAll('.form-control');
              const submitButton = document.getElementById('submitButton');

              // Add an event listener to each input field that checks if any of them are empty
              inputFields.forEach(inputField => {
                inputField.addEventListener('input', () => {
                  // If any of the input fields are empty, disable the button
                  if (Array.from(inputFields).some(input => input.value === '')) {
                    submitButton.disabled = true;
                  } else {
                    // Otherwise, enable the button
                    submitButton.disabled = false;
                  }
                });
              });

            </script>
          </div>
          <footer class="text-center">
            &#169; Project Praktikum Sistem Multimedia 2024 4IA01 Naufal & Farhan
          </footer>
      </div>
      </form>
    </div>