<?php
$session = \Config\Services::session();
include('template/v_dashboard_template_header.php');

echo base64_encode("http://localhost:8080/46b3b10e-c245-4676-a493-de1b6927c9c9");
?>

<body class="sb-nav-fixed">
    <?php include('template/v_dashboard_template_top_nav.php'); ?>
    <div id="layoutSidenav">
        <?php include('template/v_dashboard_template_side_nav.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 style="text-align: center;" class="mt-4">Tambah Aparatur Desa</h1>
                    <form class="card" action="" method="post" enctype="multipart/form-data">
                        <h4 style="font-size: medium;" class="card-header">Isikan Form berikut</h4>
                        <?php if ($session->getFlashdata('warning')) : ?>
                            <div class="alert alert-warning">
                                <ul>
                                    <?php foreach ($session->getFlashdata('warning') as $warn) : ?>
                                        <li><?= $warn ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="nama_aparatur" class="form-label">Nama Aparatur:</label>
                                <input name="nama_aparatur" type="text" class="form-control" id="nama_aparatur" placeholder="Masukkan Nama Aparatur" value="<?= (isset($nama_aparatur)) ? $nama_aparatur : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="posisi_aparatur" class="form-label">Posisi Aparatur:</label>
                                <input name="posisi_aparatur" type="text" class="form-control" id="posisi_aparatur" placeholder="Masukkan Nama Aparatur" value="<?= (isset($posisi_aparatur)) ? $posisi_aparatur : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="gambar_aparatur" class="form-label">Foto (JPG, JPEG, PNG, Max : 3Mb):</label>
                                <?php if (isset($gambar_aparatur) && strlen($gambar_aparatur) > 1) : ?>
                                    <h6>Thumbnail saat ini:</h6>
                                    <img style="width: 60px; margin-bottom: 13px; " src="<?= base_url(LOKASI_UPLOAD . "/$gambar_aparatur") ?>" alt="">
                                <?php endif ?>
                                <input name="gambar_aparatur" accept=".jpg, .png, .jpeg" type="file" class="form-control" id="gambar_aparatur">
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Simpan Data</button>
                            <a href="<?= site_url('admin/dashboard/aparatur') ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </main>
            <?php include('template/v_dashboard_template_footercontent.php'); ?>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_content', {
            height: 500,
            filebrowserUploadUrl: "<?= base_url('assets') ?>/ckeditor/ck-upload.php",
            filebrowserUploadMethod: 'form'
        });
        <?php if ($session->getFlashdata('alert')) : ?>
            <?php foreach ($session->getFlashdata('alert') as $alert) : ?>
                alert('<?= $alert ?>')
            <?php endforeach ?>
        <?php endif ?>
    </script>

    <?php
    include('template/v_dashboard_template_footer.php');
    ?>