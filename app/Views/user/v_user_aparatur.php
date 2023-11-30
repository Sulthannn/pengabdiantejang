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
                                <h1 class="card-title h1-custom">Aparatur Desa Tejang (<?= date("Y"); ?>)</h1>
                            </div>
                            <hr>
                        </div>
                        <div style="display: flex; flex-wrap: wrap; padding: 5px 10px 5px 10px; justify-content: center; gap: 40px;">
                            <?php foreach($aparatur as $a) : ?>
                            <!-- Card-->
                            <div style="width: 250px;" class="card shadow-2xl border-1 rounded">
                                <div class="card-body p-0"><img src="<?= base_url('assets/uploads') ?>/<?= $a['gambar_aparatur'] ?>" alt="" class="w-100 card-img-top">
                                    <div class="p-4">
                                        <h5 class="mb-0"><?= $a['nama_aparatur'] ?></h5>
                                        <p class="small text-muted"><?= $a['posisi_aparatur'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?> 
                        </div>
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

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>