<?php
$session = \Config\Services::session();
include('template/v_user_template_head.php');
helper('fungsi_helper');
?>

<body>
    <?php include('template/v_user_template_navbar.php') ?>

    <!-- Berita -->
    <div style="width: 95%;" class="container-fluid card my-4 small-card-container">
        <div class="row g-0 px-2 justify-content-start my-4">
            <div class="col-auto text-center">
                <h1 class="h1-custom">Layanan Pengaduan</h1>
            </div>
            <hr>

            <div class="col-md-12">
                <div class="card-body">
                    <div class="card-title justify-content-center text-center">
                        <div class="d-flex align-items-start">
                            <button type="button" class="btn btn-success" style="color: #fff;" data-toggle="modal" data-target="#myModal">
                                Formulir Pengaduan
                            </button>

                            <div class="modal" id="myModal">
                                <div class="modal-dialog custom-modal-dialog">
                                    <div class="modal-content custom-modal-content">
                                        <div class="modal-header">
                                            <p class="modal-title font-sticker" style="color: #3f6f83;">Pengaduan Baru</p>
                                            <button type="button" class="close custom-close-button" data-dismiss="modal">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="<?=base_url('pengaduan')?>" method="post" enctype="multipart/form-data">
                                                <div class="form-group my-3">
                                                    <input type="text" class="form-control modform" id="judul" name="judul_pengaduan" placeholder="Judul">
                                                </div>
                                                <div class="form-group my-3">
                                                    <input type="text" class="form-control modform" id="nama" name="nama_pengadu" placeholder="Nama">
                                                </div>
                                                <div class="form-group my-3">
                                                    <input type="number" class="form-control modform" id="nik" name="nik_pengadu" placeholder="NIK">
                                                </div>
                                                <div class="form-group my-3">
                                                    <input type="email" class="form-control modform" id="email" name="email_pengadu" placeholder="Email">
                                                </div>
                                                <div class="form-group my-3">
                                                    <input type="number" class="form-control modform" id="no" name="no_pengadu" placeholder="Telepon">
                                                </div>
                                                <div class="form-group my-3">
                                                    <textarea name="isi_pengaduan" class="form-control modform" placeholder="Isi Pengaduan" id="floatingTextarea2" style="height:100px;"></textarea>
                                                </div>
                                                <div class="form-group my-3">
                                                    <input name="file_pendukung" accept=".jpg, .pdf, .jpeg, .png" type="file" class="form-control" id="file" placeholder="Pendukung" >
                                                </div>
                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Yakin Mengajukan Pengaduan Ini?')">Kirim</button>
                                        </form>

                                        </div>

                              

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content:center;">
            <?php foreach ($pengaduan as $p) : ?>

                <div class="card-pengaduan">
                    <div type="button" class="card-body" data-toggle="modal" data-target="#myModal<?= $p['id_pengaduan'] ?>">
                        <div class="card-title">
                            <div class="card small-card-container">
                                <div class="card-body text-start">
                                    <p class="judul-berita" style="font-weight: 600;"><?= $p['judul_pengaduan'] ?></p>
                                    <p class="desk-berita"><?= substr($p['isi_pengaduan'], 0, 20); ?> ....</p>
                                    <small class="span-berita"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 19 19" fill="none" class="icon-authors">
                                            <path d="M13.4584 11.0833C13.8957 11.0833 14.2501 10.7289 14.2501 10.2917C14.2501 9.85443 13.8957 9.5 13.4584 9.5C13.0212 9.5 12.6667 9.85443 12.6667 10.2917C12.6667 10.7289 13.0212 11.0833 13.4584 11.0833Z" fill="#7DAABD" />
                                            <path d="M13.4584 14.25C13.8957 14.25 14.2501 13.8956 14.2501 13.4583C14.2501 13.0211 13.8957 12.6667 13.4584 12.6667C13.0212 12.6667 12.6667 13.0211 12.6667 13.4583C12.6667 13.8956 13.0212 14.25 13.4584 14.25Z" fill="#7DAABD" />
                                            <path d="M10.2916 10.2917C10.2916 10.7289 9.93716 11.0833 9.49992 11.0833C9.06268 11.0833 8.70825 10.7289 8.70825 10.2917C8.70825 9.85443 9.06268 9.5 9.49992 9.5C9.93716 9.5 10.2916 9.85443 10.2916 10.2917Z" fill="#7DAABD" />
                                            <path d="M10.2916 13.4583C10.2916 13.8956 9.93716 14.25 9.49992 14.25C9.06268 14.25 8.70825 13.8956 8.70825 13.4583C8.70825 13.0211 9.06268 12.6667 9.49992 12.6667C9.93716 12.6667 10.2916 13.0211 10.2916 13.4583Z" fill="#7DAABD" />
                                            <path d="M5.54167 11.0833C5.9789 11.0833 6.33333 10.7289 6.33333 10.2917C6.33333 9.85443 5.9789 9.5 5.54167 9.5C5.10444 9.5 4.75 9.85443 4.75 10.2917C4.75 10.7289 5.10444 11.0833 5.54167 11.0833Z" fill="#7DAABD" />
                                            <path d="M5.54167 14.25C5.9789 14.25 6.33333 13.8956 6.33333 13.4583C6.33333 13.0211 5.9789 12.6667 5.54167 12.6667C5.10444 12.6667 4.75 13.0211 4.75 13.4583C4.75 13.8956 5.10444 14.25 5.54167 14.25Z" fill="#7DAABD" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.54159 1.38541C5.8695 1.38541 6.13534 1.65124 6.13534 1.97916V2.58298C6.65942 2.5729 7.2368 2.5729 7.87182 2.57291H11.1279C11.763 2.5729 12.3404 2.5729 12.8645 2.58298V1.97916C12.8645 1.65124 13.1303 1.38541 13.4583 1.38541C13.7862 1.38541 14.052 1.65124 14.052 1.97916V2.63394C14.2578 2.64963 14.4527 2.66935 14.637 2.69413C15.5652 2.81892 16.3165 3.08185 16.909 3.6743C17.5014 4.26676 17.7643 5.01801 17.8891 5.94618C18.0103 6.84805 18.0103 8.00041 18.0103 9.45526V11.128C18.0103 12.5828 18.0103 13.7352 17.8891 14.6371C17.7643 15.5653 17.5014 16.3166 16.909 16.909C16.3165 17.5014 15.5652 17.7644 14.637 17.8892C13.7352 18.0104 12.5828 18.0104 11.128 18.0104H7.87193C6.41705 18.0104 5.26464 18.0104 4.36278 17.8892C3.43461 17.7644 2.68336 17.5014 2.0909 16.909C1.49845 16.3166 1.23552 15.5653 1.11074 14.6371C0.989479 13.7352 0.989486 12.5829 0.989502 11.128V9.45534C0.989486 8.00041 0.989479 6.84806 1.11074 5.94618C1.23552 5.01801 1.49845 4.26676 2.0909 3.6743C2.68336 3.08185 3.43461 2.81892 4.36278 2.69413C4.54717 2.66935 4.74205 2.64963 4.94784 2.63394V1.97916C4.94784 1.65124 5.21367 1.38541 5.54159 1.38541ZM4.52101 3.87105C3.72452 3.97813 3.26563 4.17895 2.93059 4.51399C2.59555 4.84904 2.39473 5.30792 2.28765 6.10441C2.26951 6.2393 2.25435 6.38131 2.24167 6.53124H16.7582C16.7455 6.38131 16.7303 6.2393 16.7122 6.10441C16.6051 5.30792 16.4043 4.84904 16.0692 4.51399C15.7342 4.17895 15.2753 3.97813 14.4789 3.87105C13.6653 3.76167 12.5928 3.76041 11.0833 3.76041H7.91658C6.40702 3.76041 5.33457 3.76167 4.52101 3.87105ZM2.177 9.49999C2.177 8.82391 2.17726 8.23546 2.18737 7.71874H16.8125C16.8226 8.23546 16.8228 8.82391 16.8228 9.49999V11.0833C16.8228 12.5929 16.8216 13.6653 16.7122 14.4789C16.6051 15.2754 16.4043 15.7343 16.0692 16.0693C15.7342 16.4044 15.2753 16.6052 14.4789 16.7122C13.6653 16.8216 12.5928 16.8229 11.0833 16.8229H7.91658C6.40702 16.8229 5.33457 16.8216 4.52101 16.7122C3.72452 16.6052 3.26563 16.4044 2.93059 16.0693C2.59555 15.7343 2.39473 15.2754 2.28765 14.4789C2.17826 13.6653 2.177 12.5929 2.177 11.0833V9.49999Z" fill="#7DAABD" />
                                        </svg> <?= change_date_to_indonesian($p['tanggal_dibuat_pengaduan']) ?></small>
                                    <small class="span-berita"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-person icon-authors" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg><?= $p['nama_pengadu'] ?></small>
                                    <div class="text-end">
                                        <span class="badge text-bg-success">Selesai</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal" id="myModal<?= $p['id_pengaduan'] ?>">
                    <div class="modal-dialog custom-modal-dialog">
                        <div class="modal-content custom-modal-content">
                            <div class="modal-header">
                                <p class="modal-title font-sticker" style="color: #3f6f83;">Tanggapan Pengaduan</p>
                                <button type="button" class="close custom-close-button" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <div class="form-group my-3">
                                    <label style="padding-left: 3px; padding-bottom: 5px;" for="judul">Judul Pengaduan:</label>
                                    <input type="text" class="form-control modform" id="judul" value="<?= $p['judul_pengaduan'] ?>" readonly>
                                </div>
                                <div class="form-group my-3">
                                    <label style="padding-left: 3px; padding-bottom: 5px;" for="nama">Nama Pengadu:</label>
                                    <input type="text" class="form-control modform" id="nama" value="<?= $p['nama_pengadu'] ?>" readonly>
                                </div>
                                <div class="form-group my-3">
                                    <label style="padding-left: 3px; padding-bottom: 5px;" for="email">Email Pengadu:</label>
                                    <input type="email" class="form-control modform" id="email" value="<?= $p['email_pengadu'] ?>" readonly>
                                </div>
                                <div class="form-group my-3">
                                    <label style="padding-left: 3px; padding-bottom: 5px;" for="email">Isi Aduan:</label>
                                    <textarea class="form-control modform" readonly id="floatingTextarea2" style="height:100px;"><?= $p['isi_pengaduan'] ?></textarea>
                                </div>
                                <div class="form-group my-3">
                                    <label style="padding-left: 3px; padding-bottom: 5px;" for="email">Tanggapan Pengaduan dari admin:</label>
                                    <textarea class="form-control modform" readonly id="floatingTextarea2" style="height:100px;"><?= $p['tanggapan_pengaduan'] ?></textarea>
                                </div>
                            </div>

                            <div class="modal-footer custom-modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>

    </div>
    <?php include('template/v_user_template_fitur.php') ?>
    <?php include('template/v_user_template_footer.php') ?>


    <script>
        <?php if ($session->getFlashdata('warning')) : ?>
            alert(`
            <?php foreach ($session->getFlashdata('warning') as $warn) : ?>
                <?= $warn ?>\n
            <?php endforeach ?>
            `)
        <?php endif ?>
        <?php if ($session->getFlashdata('success')) : ?>
            alert(`
            <?php foreach ($session->getFlashdata('success') as $scs) : ?>
                <?= $scs ?>\n
            <?php endforeach ?>
            `)
        <?php endif ?>
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>