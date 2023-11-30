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
                    <h1 style="text-align: center;" class="mt-4">Tambah Agenda</h1>
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
                                <label for="judul_kegiatan" class="form-label">Judul Kegiatan:</label>
                                <input name="judul_kegiatan" type="text" class="form-control" id="judul_kegiatan" placeholder="Masukkan Judul Kegiatan" value="<?= (isset($judul_kegiatan)) ? $judul_kegiatan : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="lokasi_kegiatan" class="form-label">Lokasi Kegiatan:</label>
                                <input name="lokasi_kegiatan" type="text" class="form-control" id="lokasi_kegiatan" placeholder="Masukkan Lokasi Kegiatan" value="<?= (isset($lokasi_kegiatan)) ? $lokasi_kegiatan : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="koordinator" class="form-label">Koordinator Kegiatan:</label>
                                <input name="koordinator" type="text" class="form-control" id="koordinator" placeholder="Masukkan Nama Koordinator Kegiatan" value="<?= (isset($koordinator)) ? $koordinator : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="waktu_kegiatan" class="form-label">Waktu Kegiatan:</label>
                                <input name="waktu_kegiatan" type="datetime-local" class="form-control" id="waktu_kegiatan" value="<?= (isset($waktu_kegiatan)) ? $waktu_kegiatan : "" ?>">
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Simpan Data</button>
                            <a href="<?= site_url('admin/dashboard/agenda') ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
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