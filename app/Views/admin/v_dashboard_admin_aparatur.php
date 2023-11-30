<?php
$session = \Config\Services::session();
include('template/v_dashboard_template_header.php');
helper('fungsi_helper');
?>

<body class="sb-nav-fixed">
    <?php include('template/v_dashboard_template_top_nav.php'); ?>
    <div id="layoutSidenav">
        <?php include('template/v_dashboard_template_side_nav.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 style="text-align: center;" class="mt-4">Aparatur Desa</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List
                            <a href="<?= site_url('admin/dashboard/aparatur/create') ?>" style="margin: 10px;" class="btn btn-success">Tambah Baru</a>
                        </div>
                        <?php if ($session->getFlashdata('success')) : ?>
                            <div class="alert alert-success">
                                <ul>
                                    <?php foreach ($session->getFlashdata('success') as $scs) : ?>
                                        <li><?= $scs ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>
                        <div class="card-body">
                            <table id="dataPosts" class="table">
                                <thead>
                                    <tr>
                                        <th>Thumbnail</th>
                                        <th>Nama Aparatur</th>
                                        <th>Posisi Aparatur</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($aparatur as $a) : ?>
                                        <tr>
                                            <?php $id_aparatur = $a['id_aparatur'];
                                            $thumb = $a['gambar_aparatur'] ?>
                                            <td><img style="border-radius: 15px; width:100px; margin:auto; display:block; box-shadow: -5px 7px 25px -7px rgba(48,48,48,0.75); -webkit-box-shadow: -5px 7px 25px -7px rgba(48,48,48,0.75); -moz-box-shadow: -5px 7px 25px -7px rgba(48,48,48,0.75);" src="<?= base_url(LOKASI_UPLOAD . "/$thumb") ?>" alt=""></td>
                                            <td><?= $a['nama_aparatur'] ?></td>
                                            <td><?= $a['posisi_aparatur'] ?></td>
                                            <td>
                                                <a href='<?= site_url("admin/dashboard/aparatur/edit/$id_aparatur") ?>' style="text-align: center; margin-top: 5px;" class="btn btn-info">Edit</a>
                                                <a onclick="return confirm('Yakin untuk menghapus aparatur ini?')" href="?action=delete&id_delete=<?= $id_aparatur ?>" style="text-align: center; margin-top: 5px;" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
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