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
                    <h1 style="text-align: center;" class="mt-4">Agenda</h1>
                    <a href="<?= base_url('admin/dashboard/agenda/create') ?>" class="btn btn-success mb-2">Tambah Agenda</a>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List
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
                                        <th>Judul Agenda</th>
                                        <th>Koordinator</th>
                                        <th>Lokasi Kegiatan</th>
                                        <th>Status Kegiatan</th>
                                        <th>Waktu Kegiatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($agendas as $agenda) : ?>
                                        <tr>
                                            <td><?= $agenda['judul_kegiatan'] ?></td>
                                            <td><?= $agenda['koordinator'] ?></td>
                                            <td><?= $agenda['lokasi_kegiatan'] ?></td>
                                            <td><?= $agenda['status_kegiatan'] ?></td>
                                            <td><?= change_date_to_indonesian($agenda['waktu_kegiatan']) ?></td>
                                            <td>
                                                <a 
                                                <?php if($agenda['status_kegiatan'] == 'mendatang') : ?>
                                                    href="<?= base_url('admin/dashboard/agenda?status=selesai')?>&id=<?=$agenda["id_agenda"]?>"
                                                    onclick="return confirm('Yakin untuk mengubah status agenda ini menjadi selesai?')"
                                                    <?php else : ?>
                                                        href="<?= base_url('admin/dashboard/agenda?status=mendatang')?>&id=<?=$agenda["id_agenda"]?>"
                                                    onclick="return confirm('Yakin untuk mengubah status agenda ini menjadi mendatang?')"
                                                <?php endif ?>
                                                class="btn btn-info">Ubah Status</a>
                                                <a onclick="return confirm(`apakah anda yakin menghapus agenda <?= $agenda['judul_kegiatan'] ?>?`)" href="<?= base_url('admin/dashboard/agenda?hapus=true')?>&id=<?= $agenda['id_agenda'] ?>" class="btn btn-danger">Hapus</a>
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