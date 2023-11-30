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
                    <h1 style="text-align: center;" class="mt-4">Tambah Berita atau Halaman Pada Website</h1>
                    <form class="card" action="" method="post" enctype="multipart/form-data">
                        <h4 style="font-size: medium;" class="card-header">Isikan Form berikut</h4>
                        <?php if ($session->getFlashdata('warning')) : ?>
                            <div class="alert alert-warning">
                                <ul>
                                    <?php foreach ($session->getFlashdata('warning') as $warn) : ?>
                                        <li><?= $warn ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="post_title" class="form-label">Judul:</label>
                                <input name="post_title" type="text" class="form-control" id="post_title" placeholder="Masukkan Judul Berita / Halaman" value="<?= (isset($post_title)) ? $post_title : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="post_status" class="form-label">Status:</label>
                                <select required name="post_status" id="post_status" value="" class="form-select">
                                    <option disabled selected hidden>------</option>
                                    <option value="active" <?= (isset($post_status) && $post_status == 'active') ? 'selected' : '' ?>>Aktif</option>
                                    <option value="inactive" <?= (isset($post_status) && $post_status == 'inactive') ? 'selected' : '' ?>>Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-between">
                                    <label for="kategori_id" class="form-label">Kategori:</label>
                                    <a href="<?= base_url('admin') ?>/dashboard/kategori/">Edit Kategori</a>
                                </div>
                                <select required name="kategori_id" id="kategori_id" value="" class="form-select">
                                    <option disabled selected hidden>------</option>
                                    <?php foreach ($categories as $cat) : ?>
                                        <option value="<?= $cat['id_kategori'] ?>" <?= (isset($kategori_id) && $kategori_id == $cat['id_kategori']) ? 'selected' : '' ?>><?= $cat['kategori'] ?> </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="post_type" class="form-label">Tipe:</label>
                                <select required name="post_type" id="post_type" value="" class="form-select">
                                    <option disabled selected hidden >------</option>
                                    <option value="page" <?= (isset($post_type) && $post_type == 'page') ? 'selected' : '' ?> >Halaman</option>
                                    <option value="article" <?= (isset($post_type) && $post_type == 'article') ? 'selected' : '' ?> >Berita</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="post_thumb" class="form-label">Thumbnail (JPG, JPEG, PNG, Max : 3Mb):</label>
                                <?php if (isset($post_thumb) && strlen($post_thumb) > 1) : ?>
                                    <h6>Thumbnail saat ini:</h6>
                                    <img style="width: 60px; margin-bottom: 13px; " src="<?= base_url(LOKASI_UPLOAD . "/$post_thumb") ?>" alt="">
                                <?php endif ?>
                                <input name="post_thumb" accept=".jpg, .png, .jpeg" type="file" class="form-control" id="post_thumb">
                            </div>
                            <div class="mb-3">
                                <label for="post_description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="post_description" rows="3" name="post_description"><?= (isset($post_description)) ? $post_description : "" ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="post_content" class="form-label">Isi</label>
                                <textarea class="form-control" id="post_content" rows="8" name="post_content"><?= (isset($post_content)) ? $post_content : "" ?></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Simpan Data</button>
                            <a href="<?= site_url('admin/dashboard/posts') ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </main>
            <?php include('template/v_dashboard_template_footercontent.php'); ?>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_content', {
            height: 500,
            filebrowserUploadUrl: "<?= base_url('assets') ?>/ckeditor/ck-upload.php",
            filebrowserUploadMethod: 'form'
        });
        <?php if ($session->getFlashdata('alert')) : ?>
            <?php foreach ($session->getFlashdata('alert') as $alert) : ?>
                alert('<?= $alert ?>')
            <?php endforeach ?>
        <?php endif ?>
    </script>

    <?php
    include('template/v_dashboard_template_footer.php');
    ?>