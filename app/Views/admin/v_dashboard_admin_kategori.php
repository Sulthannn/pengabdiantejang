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
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List Kategori
                        </div>
                        <?php include('tampil_flash/flash_warning.php') ?>
                        <ul class="mt-4">
                            <?php foreach ($kategori as $kat) : ?>
                                <li style="margin-bottom: 8px;"><?= $kat['kategori'] . ": " . $kat['deskripsi'] ?> 
                                    <a href="?edit_kategori=<?=$kat['id_kategori']?>"><i style="display: inline; font-size: 13px; margin-left: 5px; color:#d97706;" class="fa fa-pencil"></i></a> 
                                    <a onclick="return confirm('Apakah anda yakin untuk menghapus kategori ini? Semua halaman dengan kategori ini akan kehilangan kategori nya')" href="?action=hapus_kategori&id_kategori_to_delete=<?=$kat['id_kategori']?>"><i style="display: inline; font-size: 13px; margin-left: 5px; color:#ef4444;" class="fa fa-trash"></i></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <hr>
                        <h6 style="font-size:large; font-weight:500; text-align: center;"><?php if(!isset($_GET['edit_kategori'])) : ?>Tambah Kategori Baru<?php else : ?> Edit Kategori Lama<?php endif ?></h6>
                        <span style="display: block; width: 20%; margin: auto; background-color: #CBCBCB; height: 2px; border-radius:2px;"></span>
                        <form action="" method="post" class="p-2">
                            <?php if(isset($_GET['edit_kategori'])) : ?>
                                <input name="id_kategori" type="hidden" value="<?= $kategori_to_edit['id_kategori'] ?>">
                            <?php endif ?>
                            <label for="kategori">Kategori:</label>
                            <input type="text" name="kategori" class="form-control mb-2" value="<?= (isset($_GET['edit_kategori'])) ? $kategori_to_edit['kategori'] : "" ?>">
                            <label for="deskripsi">Deskripsi Kategori:</label>
                            <textarea class="form-control" name="deskripsi_kategori" id="kategori" cols="30" rows="10"><?= (isset($_GET['edit_kategori'])) ? $kategori_to_edit['deskripsi'] : "" ?></textarea>
                            <button name="<?= (!isset($_GET['edit_kategori'])) ? 'tambah_kategori' : 'edit_kategori' ?>" value="true" type="submit" class="btn btn-success mt-2"><?php if(!isset($_GET['edit_kategori'])) : ?>Tambah<?php else : ?> Edit <?php endif ?></button>
                            <?php if (isset($_GET['edit_kategori'])) :?>
                                <a href="<?= base_url('admin/dashboard/kategori/') ?>" class="btn btn-danger mt-2">Batal Edit</a>
                            <?php endif ?>
                        </form>
                    </div>
                    <a href="<?= base_url('admin') ?>/dashboard/posts/create" class="btn btn-danger">Kembali</a>
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