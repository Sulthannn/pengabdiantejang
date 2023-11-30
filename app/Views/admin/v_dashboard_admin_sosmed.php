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
                            <?php foreach ($sosmed as $kat) : ?>
                                <li style="margin-bottom: 8px;"><?= $kat['nama_sosmed'] ?>. Link Sekarang : <a href=""><?= $kat['link'] ?></a>
                                    <a href="?edit_sosmed=<?=$kat['nama_sosmed']?>"><i style="display: inline; font-size: 13px; margin-left: 5px; color:#d97706;" class="fa fa-pencil"></i></a> 
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <hr>
                        <?php if(isset($_GET['edit_sosmed'])) : ?>
                            <form style="margin-bottom: 15px; padding:5px;" action="" method="post">
                                <input type="hidden" name="nama_sosmed"  value="<?= $sosmed_to_edit['nama_sosmed'] ?>">
                                <label for="link">
                                <?php if($_GET['edit_sosmed'] == 'Facebook') : ?>
                                Masukkan Link Facebook :
                                <?php elseif ($_GET['edit_sosmed'] == 'Instagram') : ?>
                                Masukkan Link Instagram :
                                <?php elseif ($_GET['edit_sosmed'] == 'Whatsapp') : ?>
                                Masukkan Nomor Telepon :                    
                                <?php endif ?>
                                </label>
                                <input required id="link" type="text" name="link" class="form-control" 
                                <?php if($_GET['edit_sosmed'] == 'Facebook') : ?>
                                placeholder="https://www.facebook.com/user"
                                <?php elseif ($_GET['edit_sosmed'] == 'Instagram') : ?>
                                placeholder="https://www.instagram.com/user"
                                <?php elseif ($_GET['edit_sosmed'] == 'Whatsapp') : ?>
                                placeholder="https://wa.me/6289603414242"                            
                                <?php endif ?>>

                                <button type="submit" class="btn btn-success mt-2">Selesai</button>
                                <a href="<?= base_url('admin/dashboard/sosmed') ?>" class="btn btn-danger mt-2" href="">Batal edit</a>
                            </form>
                        <?php endif ?>

                        <span style="display: block; width: 20%; margin: auto; background-color: #CBCBCB; height: 2px; border-radius:2px;"></span>
                        
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