<?php
$session = \Config\Services::session();
include('template/v_user_template_head.php');
helper('fungsi_helper');
?>

<body>
    <?php include('template/v_user_template_navbar.php') ?>

    <div class="md:flex justify-between w-full mt-4 mb-4 p-4 mb-4" style="width:90%; margin:auto; border-radius: 20px; background-color: white; box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.25)">
        <div class="md:w-left-flex-item w-full">
            <p style="text-align: center;">List Berita</p>
            <!-- Portal Berita -->
            <?php foreach ($record as $value) : ?>
                <a href="<?= base_url('berita') ?>/<?=$value['slug']?>">
                <div class="card mb-3 container-card-berita shadow-tw" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/uploads')?>/<?=$value['post_thumb']?>" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $value['post_title'] ?></h5>
                                <p class="card-text"><?= $value['kategori'] ?></p>
                                <p class="card-text" style="font-size: 13px;"><?= $value['post_description'] ?></p>
                                <p class="card-text"><small class="text-body-secondary"><?= change_date_to_indonesian($value['post_time']) ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            <?php endforeach ?>

            <?= $pager->links('dt', 'default_full') ?>
        </div>
        <div class="md:w-right-flex-item w-full">
            <p style="text-align: center;">Kategori Berita</p>
            <div>
                <ul>
                    <?php foreach ($kategori as $k) : ?>
                    <li><?= $k['kategori'] ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <?php include('template/v_user_template_fitur.php') ?>
    <?php include('template/v_user_template_footer.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>