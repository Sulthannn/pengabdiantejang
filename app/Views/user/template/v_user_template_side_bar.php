<!-- Agenda -->
<div class="col-lg-3 col-md-12">
  <div class="card card-isi-2 mb-3">
    <div class="card-body">
      <div class="bg-card">
        <div class="d-flex align-items-center justify-content-start">
          <i class="bi bi-calendar-event" style="color: white;"></i>
          <div class="d-flex flex-column ms-2">
            <p class="mb-0 judul-foot">Agenda</p>
          </div>
        </div>
      </div>
      <div class="align-items-center justify-content-start my-3 px-4">
        <ul class="nav nav-tabs card-header-tabs mt-2 justify-content-center" id="myTabs">
          <li class="nav-item">
            <a class="nav-link active" style="font-size: 15px;" id="mendatang-tab" data-bs-toggle="tab" href="#mendatang">Mendatang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 15px;" id="selesai-tab" data-bs-toggle="tab" href="#selesai">Selesai</a>
          </li>
        </ul>
        <div class="tab-content detail-isi" style="max-height: 250px; overflow-y: auto;">
          <div id="mendatang" class="tab-pane fade show active">
            <?php foreach ($agenda_desa_mendatang as $agenda_mendatang) : ?>
            <table style="border-collapse: collapse;" class="table mt-3">
              <tr>
                <td style="padding: 1px 1px; border:none;" colspan="3"><i class="bi bi-clipboard2-data"></i> Judul</td>
              </tr>
              <tr>
                <td style="padding: 1px 1px; border:none;"><b>Waktu</b></td>
                <td style="padding: 1px 1px; border:none;">:</td>
                <td style="padding: 1px 1px; border:none;"><?= $agenda_mendatang['waktu_kegiatan'] ?></td>
              </tr>
              <tr>
                <td style="padding: 1px 1px; border:none;"><b>Lokasi</b></td>
                <td style="padding: 1px 1px; border:none;">:</td>
                <td style="padding: 1px 1px; border:none;"><?= $agenda_mendatang['lokasi_kegiatan'] ?></td>
              </tr>
              <tr>
                <td style="padding: 1px 1px; border:none;"><b>Koordinator</b></td>
                <td style="padding: 1px 1px; border:none;">:</td>
                <td style="padding: 1px 1px; border:none;"><?= $agenda_mendatang['koordinator'] ?></td>
              </tr>
            </table>
              <span style="display: block; width:100%; height:2px; background-color:black; border-radius:10px;"></span>
            <?php endforeach ?>
          </div>
          <div id="selesai" class="tab-pane fade">
          <?php foreach ($agenda_desa_selesai as $agenda_selesai) : ?>
            <table class="table mt-3">
              <tr>
                <td style="padding: 1px 1px; border:none;" colspan="3"><i class="bi bi-clipboard2-check"></i> Judul</td>
              </tr>
              <tr>
                <td style="padding: 1px 1px; border:none;"><b>Waktu</b></td>
                <td style="padding: 1px 1px; border:none;">:</td>
                <td style="padding: 1px 1px; border:none;"><?= $agenda_selesai['waktu_kegiatan'] ?></td>
              </tr>
              <tr>
                <td style="padding: 1px 1px; border:none;"><b>Lokasi</b></td>
                <td style="padding: 1px 1px; border:none;">:</td>
                <td style="padding: 1px 1px; border:none;"><?= $agenda_selesai['lokasi_kegiatan'] ?></td>
              </tr>
              <tr>
                <td style="padding: 1px 1px; border:none;"><b>Koordinator</b></td>
                <td style="padding: 1px 1px; border:none;">:</td>
                <td style="padding: 1px 1px; border:none;"><?= $agenda_selesai['koordinator'] ?></td>
              </tr>
            </table>
            <span style="display: block; width:100%; height:2px; background-color:black; border-radius:10px;"></span>
          <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End -->

  <!-- Aparatur -->
  <div class="card card-isi-2 mb-3">
    <div class="card-body">
      <div class="bg-card">
        <div class="d-flex align-items-center justify-content-start">
          <i class="bi bi-person-square" style="color: white;"></i></i>
          <div class="d-flex flex-column ms-2">
            <p class="mb-0 judul-foot">Aparatur</p>
          </div>
        </div>
      </div>
      <div class="align-items-center justify-content-center my-3 px-4">
        <div id="carouselExample" class="carousel slide text-center" data-interval="100" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php
            $firstIteration = true;
            foreach($aparatur_desa as $aparatur) : 
            $classActive = $firstIteration ? 'active' : '';?>
            <div class="carousel-item <?= $classActive ?>">
              <img style="margin-bottom: 20px; border-radius:20px;" src="<?= base_url('assets/uploads') ?>/<?= $aparatur['gambar_aparatur'] ?>" class="w-100">
              <h5 class="judul-berita"><?= $aparatur['nama_aparatur'] ?></h5>
              <h2 style="color: #394352; font-size: 16px;"><?= $aparatur['posisi_aparatur'] ?></h2>
            </div>
            <?php
            $firstIteration = false; 
            endforeach ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>

      </div>

    </div>
  </div>
  <!-- End -->

  <!-- Rangkuman Infografis -->
  <div class="card card-isi-2 mb-3">
    <div class="card-body">
      <div class="bg-card">
        <div class="d-flex align-items-center justify-content-start">
          <i class="bi bi-bar-chart-fill" style="color: white;"></i>
          <div class="d-flex flex-column ms-2">
            <p class="mb-0 judul-foot">Rangkuman Infografis</p>
          </div>
        </div>
      </div>
      <div class="align-items-center justify-content-center my-3 px-4">
        <table class="table mt-3">
          <?php foreach ($statistik as $s) : ?>
          <tr>
            <td style="padding: 1px 1px; border:none;"><b><?= $s['judul_statistik'] ?></b></td>
            <td style="padding: 1px 1px; border:none;">:</td>
            <td style="padding: 1px 1px; border:none;"><?= $s['jumlah'] ?></td>
          </tr>
          <?php endforeach ?>
        </table>
      </div>

    </div>
  </div>
  <!-- End -->

</div>
<!-- End -->

</div>
</div>
</div>