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
                    <h1 style="text-align: center;" class="mt-4"> Detail Pengaduan</h1>

                    <div class="card">
                        <h4 style="font-size: medium;" class="card-header">Pengaduan oleh <?= $pengaduan['nama_pengadu'] ?></h4>                      
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="nama_pengadu" class="form-label">Nama Pengadu:</label>
                                <input style="background-color: #F7F7F7;" name="nama_pengadu" type="text" class="form-control" id="nama_pengadu" value="<?= $pengaduan['nama_pengadu'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nik_pengadu" class="form-label">Nik Pengadu:</label>
                                <input style="background-color: #F7F7F7;" name="nik_pengadu" type="text" class="form-control" id="nik_pengadu" value="<?= $pengaduan['nik_pengadu'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="email_pengadu" class="form-label">Email Pengadu:</label>
                                <input style="background-color: #F7F7F7;" name="email_pengadu" type="text" class="form-control" id="email_pengadu" value="<?= $pengaduan['email_pengadu'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="no_pengadu" class="form-label">No Telp Pengadu:</label>
                                <input style="background-color: #F7F7F7;" name="no_pengadu" type="text" class="form-control" id="no_pengadu" value="<?= $pengaduan['no_pengadu'] ?>" readonly>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label for="judul_pengaduan" class="form-label">Judul Pengaduan:</label>
                                <input style="background-color: #F7F7F7;" name="judul_pengaduan" type="text" class="form-control" id="judul_pengaduan" value="<?= $pengaduan['judul_pengaduan'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="isi_pengaduan" class="form-label">isi Pengaduan:</label>
                                <textarea style="background-color: #F7F7F7;" readonly class="form-control" id="isi_pengaduan" rows="3" name="isi_pengaduan"><?= $pengaduan['isi_pengaduan'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status_pengaduan" class="form-label">Status Pengaduan:</label>
                                <input style="background-color: #F7F7F7;" name="status_pengaduan" type="text" class="form-control" id="status_pengaduan" value="<?= $pengaduan['status_pengaduan'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="file_pendukung" class="form-label">File Pendukung:</label>
                                <?php if($pengaduan['file_pendukung'] != '') : ?>
                                    <a href="<?= base_url('assets/uploads')?>/<?=$pengaduan['file_pendukung']?>">Klik Disini</a>
                                    <?php else : ?>
                                    <b>Pengadu tidak memberikan file pendukung</b>
                                <?php endif ?>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Waktu Pengaduan Dibuat: <?= change_date_to_indonesian($pengaduan['tanggal_dibuat_pengaduan']) ?></label>
                            </div>

                            <hr>

                            <form action="" method="get">
                                <input type="hidden" name="id_pengaduan" value="<?= $pengaduan['id_pengaduan'] ?>">
                                <input type="hidden" name="email_pengadu" value="<?= $pengaduan['email_pengadu'] ?>">
                                <div class="mb-3">
                                    <label for="tanggapan_pengaduan" class="form-label">Tanggapan: </label>
                                    <?php if ($pengaduan['tanggapan_pengaduan'] != null) : ?>
                                        <span style="color: #94a3b8; font-size:small; margin-bottom:10px; display:block;">Tanggapan Sebelumnya : <?= $pengaduan['tanggapan_pengaduan'] ?></span>
                                    <?php endif ?>
                                    <textarea  required class="form-control" id="tanggapan_pengaduan" rows="3" name="tanggapan_pengaduan"><?= (isset($tanggapan_pengaduan)) ? $tanggapan_pengaduan : "" ?></textarea>
                                </div>                                
                                <button onclick="return confirm(`Tanggapan akan diteruskan ke email pegirim, yakin untuk menanggapi pengaduan ini?`) " id="simpan_tanggapan" type="submit" name="submit_tanggapan" class="btn btn-success">Simpan Tanggapan</button>
                                <a target="_blank" rel="noreferrer noopener" href="https://wa.me/62<?= ltrim($pengaduan['no_pengadu'], '0') ?>" class="btn btn-info">Kirim Pesan Whatsapp Kepada Pengadu</a>

                                <a href="<?= site_url('admin/dashboard/pengaduan') ?>" class="btn btn-danger">Kembali</a>
                            </form>
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