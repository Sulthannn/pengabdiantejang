<?php
$session = \Config\Services::session();
include('template/v_user_template_head.php');
?>

<body>
    <?php include('template/v_user_template_navbar.php') ?>
    <!-- Sejarah Desa -->
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="card sejarah mb-3 pb-3">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-auto">
                                <h1 class="card-title h1-custom">Visi & Misi Desa Tejang <?= date("Y"); ?></h1>
                            </div>
                            <hr>
                        </div>
                        <img style="width: 100%; margin-bottom: 15px;" src="<?= base_url('assets/uploads') ?>/<?= $hero_image  ?>" alt="">
                        <p class="text-profil"><span style="font-weight: bold;">Visi</span> : <?= $visi ?></p>
                        <p class="text-profil"><span style="font-weight: bold;">Misi</span> : <?= $misi ?></p>
                        <hr style="color: #D9DFEA;" class="my-3 w-100">
                        <?php include('template/v_user_template_sosmed.php') ?>
                        <hr style="color: #D9DFEA;" class="my-3 w-100">
                    </div>
                </div>
            </div>
            <!-- End -->

            <?php include('template/v_user_template_side_bar.php') ?>
            <?php include('template/v_user_template_fitur.php') ?>
            <?php include('template/v_user_template_footer.php') ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>