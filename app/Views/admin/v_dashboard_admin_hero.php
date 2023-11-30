<?php
$session = \Config\Services::session();
include('template/v_dashboard_template_header.php');
?>

<body class="sb-nav-fixed">
    <?php include('template/v_dashboard_template_top_nav.php'); ?>
    <div id="layoutSidenav">
        <?php include('template/v_dashboard_template_side_nav.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div style="padding:10px; margin-top:15px;">
                        <h2 style="text-align: center;">Ubah Gambar</h2>
                        <h5 style="font-size:medium; font-weight: 400; padding-bottom:5px;">Masukkan Gambar Terbaru</h5>
                        <?php include("tampil_flash/flash_warning.php") ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="deskripsi_desa">Gambar : </label>
                                </div>
                                <div class="mb-3">
                                <label for="image" class="form-label">Thumbnail (JPG, JPEG, PNG, Max : 3Mb):</label>
                                <?php if (isset($image) && strlen($image) > 1) : ?>
                                    <h6>Gambar saat ini:</h6>
                                    <img style="width: 400px; margin-bottom: 13px; " src="<?= base_url(LOKASI_UPLOAD . "/$image") ?>" alt="">
                                <?php endif ?>
                                <input required name="image" accept=".jpg, .png, .jpeg" type="file" class="form-control" id="image">
                                </div>
                            </div>
                            <button type="submit" onclick="return confirm('Anda akan mengubah deskripsi desa yang tersedia saat ini! Lanjutkan?')" class="btn btn-success">Ubah Deskripsi Desa</button>
                        </form>
                    </div>
                </div>
            </main>
            <?php include('template/v_dashboard_template_footercontent.php'); ?>
        </div>
    </div>

    <script>
        <?php if ($session->getFlashdata('alert')) : ?>
            <?php foreach ($session->getFlashdata('alert') as $alert) : ?>
                alert('<?= $alert ?>')
            <?php endforeach ?>
        <?php endif ?>
    </script>

    <?php
    include('template/v_dashboard_template_footer.php');
    ?>