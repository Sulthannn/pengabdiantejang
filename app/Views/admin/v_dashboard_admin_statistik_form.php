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
                    <h1 style="text-align: center;" class="mt-4">Tambah Statistik</h1>
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
                                <label for="judul_statistik" class="form-label">Judul Statistik:</label>
                                <input name="judul_statistik" type="text" class="form-control" id="judul_statistik" placeholder="Jumlah Penduduk" value="<?= (isset($judul_statistik)) ? $judul_statistik : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah:</label>
                                <input name="jumlah" type="text" class="form-control" id="jumlah" placeholder="100" value="<?= (isset($jumlah)) ? $jumlah : "" ?>">
                            </div>

                            <button type="submit" name="submit" class="btn btn-success">Simpan Data</button>
                            <a href="<?= site_url('admin/dashboard/statistik') ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </main>
            <?php include('template/v_dashboard_template_footercontent.php'); ?>
        </div>
    </div>

    <?php
    include('template/v_dashboard_template_footer.php');
    ?>