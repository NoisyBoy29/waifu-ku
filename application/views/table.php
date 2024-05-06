<?php
echo $this->session->flashdata('error');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('asset/css/stylebaru.css'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('asset/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('asset/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css'); ?>">

    <title>My Lovely Waifu</title>
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

<body class="pt-3" style="position: relative;">
<div style="background-image: url('http://localhost/waifu-ku/asset/img/lovelive.jpg'); width: 100%; height:100vh; position:fixed; z-index: index 0;top:0;left:0; background-repeat:round;"></div>
    <div class="container" style="position: relative; z-index: index 10;">
        <div class="card">
            <div class="card-body">
                <button type="button" style="float: right;" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                    Tentang Kami
                </button>

                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tentang Kami</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col">NPM</th>
                                            <th scope="col">Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Farhan Alba Saputra</th>
                                            <td>50420456</td>
                                            <td><img width="100px" src=".\asset\img\farhan.png"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Naufal Maulana Al-Ghifari Irawan</th>
                                            <td>50420956</td>
                                            <td><img width="100px" src=".\asset\img\naufal.png"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 style="text-align: center; color: pink; ">WAIFU KU</h1>
                <button style="float: right; " class='btn btn-outline-waifu' onclick="window.location.href='<?= site_url('controller/create/') ?>';">Tambah Waifu</button>

                
                <table id="table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kode Waifu</th>
                            <th>Nama Waifu</th>
                            <th>Asal Anime Waifu</th>
                            <th>Foto Waifu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($hasil as $row) : ?>
                            <?php
                            $gambar = $row['gambar'];
                            ?>
                            <tr>
                                <td><?= $row['kode'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['asal'] ?></td>
                                <td>
                                    <img height="200" src="<?= base_url('asset/images/' . $gambar) ?>">
                                </td>
                                <td>
                                    <button class="btn btn-primary mr-1" onclick="location.href='<?= site_url('controller/index/' . $row['kode']) ?>'">Lihat</button>
                                    <button type="button" class="btn btn-danger" onclick="confirmAndRedirect('<?= site_url('controller/delete/' . $row['kode']) ?>')">Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <footer class="text-center">
                    &#169; Project Praktikum Sistem Multimedia 2024 4IA01 Naufal & Farhan
                </footer>
            </div>
        </div>
    </div>
    <br>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables -->
    <script src="asset/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="asset/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script src="asset/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="asset/DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
    <script src="asset/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="asset/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="asset/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="asset/DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <script src="asset/DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>
    <script src="asset/DataTables/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#table').DataTable({

                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ]
            });

            table.buttons().container()
                .appendTo('#table_wrapper .col-md-5:eq(0)');
        });

        function confirmAndRedirect(url) {
            if (confirm('Apakah ingin menghapus waifu ini?')) {
                window.location.href = url;
            }
        }
    </script>
</body>

</html>