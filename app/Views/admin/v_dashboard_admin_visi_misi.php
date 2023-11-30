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
                    <h1 class="mt-4">Visi & Misi Desa Tejang Pulau Sabesi (<?= date("Y"); ?>)</h1>
                    <div style="background-color: #e5e7eb; min-height: 40vh; border-radius: 20px; padding: 10px; margin-bottom: 20px; box-shadow: -5px 9px 16px 1px rgba(156,156,156,0.75); -webkit-box-shadow: -5px 9px 16px 1px rgba(156,156,156,0.75); -moz-box-shadow: -5px 9px 16px 1px rgba(156,156,156,0.75);">
                        <span style="font-size: large; font-weight: 400;">Visi : <span style="font-size: small;"><?= $dataDesa['visi'] ?></span></span>
                    </div>
                    <div style="background-color: #212529; min-height: 40vh; border-radius: 20px; padding: 10px; margin-bottom: 10px; color: white; box-shadow: -5px 9px 16px 1px rgba(156,156,156,0.75); -webkit-box-shadow: -5px 9px 16px 1px rgba(156,156,156,0.75); -moz-box-shadow: -5px 9px 16px 1px rgba(156,156,156,0.75);">
                        <span style="font-size: large; font-weight: 400;">Misi : <span style="font-size: small;"><?= $dataDesa['misi'] ?></span></span>
                    </div>
                    <div style="padding:10px; margin-top:15px;">
                        <h2 style="text-align: center;">Ubah Visi & Misi</h2>
                        <h5 style="font-size:medium; font-weight: 400; padding-bottom:5px;">Masukkan Visi & Misi Terbaru</h5>
                        <?php include("tampil_flash/flash_warning.php") ?>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="visi">Visi : </label>
                                </div>
                                <div class="col-md-10">
                                    <textarea style="width: 100%;" name="visi" id="visi" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="misi">Misi : </label>
                                </div>
                                <div class="col-md-10">
                                    <textarea style="width: 100%;" name="misi" id="misi" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <button type="submit" onclick="return confirm('Anda akan mengubah visi & misi yang tersedia saat ini! Lanjutkan?')" class="btn btn-success">Ubah Visi & Misi</button>
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