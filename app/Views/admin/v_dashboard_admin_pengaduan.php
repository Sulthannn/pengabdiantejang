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
                    <h1 style="text-align: center;" class="mt-4">Pengaduan</h1>
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
                                        <th>Judul Pengaduan</th>
                                        <th>Pengadu</th>
                                        <th>Status</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pengaduans as $pengaduan) : ?>
                                        <tr>
                                            <td><?= $pengaduan['judul_pengaduan'] ?></td>
                                            <td><?= $pengaduan['nama_pengadu'] ?></td>
                                            <td><?= $pengaduan['status_pengaduan'] ?></td>
                                            <td><?= change_date_to_indonesian($pengaduan['tanggal_dibuat_pengaduan']) ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/dashboard/pengaduan/detail') ?>/<?=$pengaduan['id_pengaduan']?>" class="btn btn-warning">Lihat Detail</a>
                                                <a 
                                                <?php if($pengaduan['status_pengaduan'] == 'proses') : ?>
                                                    href="<?= base_url('admin/dashboard/pengaduan?status=selesai')?>&id=<?=$pengaduan["id_pengaduan"]?>"
                                                    onclick="return confirm('Yakin untuk mengubah status pengaduan ini menjadi selesai? Pengaduan yang berstatus selesai akan ditampilkan pada halaman pengaduan!')"
                                                    <?php else : ?>
                                                        href="<?= base_url('admin/dashboard/pengaduan?status=proses')?>&id=<?=$pengaduan["id_pengaduan"]?>"
                                                    onclick="return confirm('Yakin untuk mengubah status pengaduan ini menjadi proses?')"
                                                <?php endif ?>
                                                class="btn btn-info">Ubah Status</a>
                                                <a onclick="return confirm(`apakah anda yakin menghapus pengaduan dari <?=$pengaduan['nama_pengadu']?>?`)" href="<?= base_url('admin/dashboard/pengaduan?hapus=true')?>&id=<?= $pengaduan['id_pengaduan'] ?>" class="btn btn-danger">Hapus</a>
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