<?php
$session = \Config\Services::session();
include('template/v_user_template_head.php'); ?>

<body class="bodyLanding" style="">
    <div class="overlay"></div>
    <div class="content">

  <!-- Navbar -->
  <nav id="navbarLanding" class="navbar navbar-expand-lg navbar-light fixed-top nav-hp" style="border-bottom: 1px solid #919CB0;">
    <div class="container">
        <img src="<?= base_url('assets/img') ?>/logo.png" class="img-fluid size"> 
      <button id="hamButton" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="navbar-nav ms-auto p-4 p-lg-0 text-center">
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: white;">Profil Desa</a>
                <div class="dropdown-menu border-light m-0">
                  <a href="<?= base_url('tentang') ?>" class="dropdown-item">Tentang Desa</a>
                  <a href="<?= base_url('sejarah') ?>" class="dropdown-item">Sejarah Desa</a>
                  <a href="<?= base_url('visi-misi') ?>" class="dropdown-item">Visi Misi</a>
                </div>
              </div>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: white;">Pemerintah Desa</a>
                <div class="dropdown-menu border-light m-0">
                  <a href="<?= base_url('aparatur') ?>" class="dropdown-item">Aparatur Desa</a>
                </div>
              </div>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  style="color: white;">Informasi</a>
                <div class="dropdown-menu border-light m-0">
                  <a href="<?= base_url('berita') ?>" class="dropdown-item">Berita</a>
                  <a href="<?= base_url('pengaduan') ?>" class="dropdown-item">Pengaduan</a>
                </div>
              </div>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  style="color: white;">Media</a>
                <div class="dropdown-menu border-light m-0">
                  <a href="<?= base_url('galeri') ?>" class="dropdown-item">Galeri</a>
                </div>
              </div>
            </div>
      </div>
    </div>
  </nav>
<!-- End -->

<!-- Welcome -->
  <div class="container jarak-land">
    <div class="row justify-content-center">
      <div class="col-md-6">
            <p class="judul-land">WEBSITE DESA TEJANG
                PULAU SEBESI</p>
      </div>
    </div>
  </div>
  <!-- End -->

  

  <!-- Carousel Card -->
  <div class="container jarak-carousel">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
             <center>
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <div class="card card-carousel my-2">
                    <a href="<?= base_url('tentang') ?>">
                    <div class="card-body text-center mt-2">
                        <svg width="70px"  viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M1023.92022 512c5.012 282.77-220.118 512-502.842 512S5.09622 794.77 0.08422 512 220.20222 0 502.92622 0s515.982 229.23 520.994 512z" fill="#FFF9BB" />
        <path d="M956.09822 496h-37.91v-55.5H625.73422l-44.934-44.25L512.00222 464H236.81222v-48H124.34822v27.578H91.50222l-29.234-28.79-55.348 54.504 195.366 52.04 412.786 52.422 407.596-17.362c0.998-14.644 1.518-29.424 1.252-44.394-0.242-13.674-1.178-27.18-2.468-40.584h-65.354V496z" fill="#FFEB97" />
        <path d="M40.84222 704h178.708v-176H0.77222c3.012 62.09 16.986 121.378 40.07 176z" fill="#FAD2A3" />
        <path d="M2.17022 547.742h184.884v-19.5H0.79022c0.32 6.536 0.82 13.026 1.38 19.5z" fill="#FF8562" />
        <path d="M219.54822 368h297.84v336h-297.84z" fill="#FFF4DB" />
        <path d="M219.54822 368h297.84v64h-297.84z" fill="#F26E64" />
        <path d="M1020.79422 577.254h-159.136V704h128.31c15.484-39.99 25.976-82.478 30.826-126.746z" fill="#FFF4DB" />
        <path d="M603.73222 448h257.928v256H603.73222z" fill="#FAD2A3" />
        <path d="M603.73222 448h257.928v19.5H603.73222z" fill="#FF8562" />
        <path d="M398.27022 528h227.464v176H398.27022z" fill="#FFFCEC" />
        <path d="M105.51022 816c95.476 126.156 246.672 208 415.566 208 168.896 0 317.19-81.844 408.192-208H105.51022z" fill="#E8A271" />
        <path d="M968.46222 752H64.05022a524.796 524.796 0 0 0 41.46 64h823.76a500.206 500.206 0 0 0 39.192-64z" fill="#D8C34A" />
        <path d="M42.85822 708.898A520.58 520.58 0 0 0 64.05022 752H968.46222a499.804 499.804 0 0 0 21.508-48H42.85822v4.898z" fill="#E5AF7C" />
        <path d="M42.85822 708.898c2.508 5.772 5.21 11.442 7.924 17.102h930.016c3.204-7.254 6.296-14.572 9.17-22H42.85822v4.898z" fill="#D0D75B" />
        <path d="M447.01222 139.592c0-22.948 18.89-41.552 42.194-41.552 3.518 0 6.88 0.548 10.146 1.346 11.01-11.708 26.62-19.154 44.104-19.154 33.29 0 60.276 26.576 60.276 59.358h-156.72z" fill="#FFF1A9" />
        <path d="M518.94022 158c0-18.59 15.304-33.662 34.182-33.662 2.85 0 5.574 0.444 8.22 1.09 8.92-9.486 21.566-15.516 35.728-15.516 26.968 0 48.832 21.53 48.832 48.088h-126.962zM830.94022 355.674c0-14.052 11.568-25.442 25.836-25.442 2.154 0 4.212 0.336 6.212 0.824 6.742-7.17 16.3-11.728 27.006-11.728 20.384 0 36.908 16.274 36.908 36.346h-95.962zM327.34222 318c0-13.734 11.306-24.866 25.252-24.866 2.104 0 4.118 0.328 6.072 0.806 6.588-7.008 15.932-11.462 26.394-11.462 19.922 0 36.072 15.904 36.072 35.524H327.34222z" fill="#FFF1A9" />
        <path d="M246.02222 244.154c0-33.306 27.418-60.308 61.24-60.308 5.104 0 9.986 0.796 14.726 1.954 15.98-16.994 38.638-27.8 64.012-27.8 48.316 0 87.486 38.572 87.486 86.154H246.02222zM744.88222 242.034c-5.114 0-9.948 0.992-14.58 2.43-14.674-20.772-39.016-34.43-66.658-34.43s-51.984 13.658-66.658 34.43c-4.632-1.438-9.466-2.43-14.58-2.43-26.92 0-48.742 21.49-48.742 48H793.62222c0.002-26.51-21.82-48-48.74-48z" fill="#FFEB97" />
        <path d="M807.24822 230.852c-3.33 0-6.476 0.646-9.492 1.582a53.008 53.008 0 0 0-43.396-22.416 53.006 53.006 0 0 0-43.396 22.416c-3.016-0.936-6.162-1.582-9.492-1.582-17.526 0-31.734 13.992-31.734 31.25h169.244c-0.002-17.258-14.208-31.25-31.734-31.25zM281.64822 232.972c-3.33 0-6.476 0.646-9.492 1.582-9.554-13.524-25.4-22.416-43.396-22.416s-33.844 8.892-43.396 22.416c-3.016-0.936-6.162-1.582-9.492-1.582-17.526 0-31.734 13.992-31.734 31.25h169.244c-0.002-17.258-14.21-31.25-31.734-31.25z" fill="#FFEB97" />
        <path d="M807.91622 384h-150.44l-60.176 64h270.79z" fill="#F26E64" />
        <path d="M124.84022 840h785.95a501.618 501.618 0 0 0 18.48-24H105.51022a528.47 528.47 0 0 0 19.33 24z" fill="#D29672" />
        <path d="M447.01222 577.254h48.742v64h-48.742z" fill="#63A0B5" />
        <path d="M499.81622 645.258h-56.866v-72h56.866v72z m-48.742-8h40.618v-56h-40.618v56z" fill="#4185A6" />
        <path d="M447.01222 589.258h48.742v8h-48.742z" fill="#4185A6" />
        <path d="M528.25022 577.254h48.742v64h-48.742z" fill="#63A0B5" />
        <path d="M581.05422 645.258h-56.866v-72h56.866v72z m-48.742-8h40.618v-56h-40.618v56z" fill="#4185A6" />
        <path d="M528.25022 589.258h48.742v8h-48.742z" fill="#4185A6" />
        <path d="M560.74422 440.5h-97.484l-81.238 96h259.96z" fill="#F26E64" />
        <path d="M398.27022 684h227.464v20H398.27022z" fill="#EBD7BD" />
        <path d="M219.54822 660.754h178.722V704h-178.722z" fill="#E8A271" />
        <path d="M398.27022 536.5h227.464V556H398.27022zM219.54822 430.75h297.84v19.5h-297.84z" fill="#FF8562" />
        <path d="M658.90622 577.254h36.556v64h-36.556z" fill="#63A0B5" />
        <path d="M699.53022 645.258h-44.68v-72h44.68v72z m-36.558-8h28.432v-56h-28.432v56z" fill="#4185A6" />
        <path d="M658.91022 589.258h36.556v8h-36.556z" fill="#4185A6" />
        <path d="M714.41822 577.254h36.556v64h-36.556z" fill="#63A0B5" />
        <path d="M755.03022 645.258h-44.68v-72h44.68v72z m-36.556-8h28.432v-56h-28.432v56z" fill="#4185A6" />
        <path d="M714.41222 589.258h36.556v8h-36.556z" fill="#4185A6" />
        <path d="M769.93022 577.254h36.556v64h-36.556z" fill="#63A0B5" />
        <path d="M810.54822 645.258h-44.68v-72h44.68v72z m-36.556-8h28.432v-56h-28.432v56z" fill="#4185A6" />
        <path d="M769.93022 589.258h36.556v8h-36.556z" fill="#4185A6" />
        <path d="M35.99022 577.254h36.556v64H35.99022z" fill="#63A0B5" />
        <path d="M76.60622 645.258h-44.68v-72h44.68v72z m-36.556-8H68.48222v-56H40.05022v56z" fill="#4185A6" />
        <path d="M35.98822 589.258h36.556v8H35.98822z" fill="#4185A6" />
        <path d="M91.50222 577.254h36.556v64H91.50222z" fill="#63A0B5" />
        <path d="M132.12422 645.258h-44.68v-72h44.68v72z m-36.556-8h28.432v-56H95.56822v56z" fill="#4185A6" />
        <path d="M91.50622 589.258H128.06222v8H91.50622z" fill="#4185A6" />
        <path d="M147.01422 577.254h36.556v64H147.01422z" fill="#63A0B5" />
        <path d="M187.62622 645.258h-44.68v-72h44.68v72z m-36.558-8H179.50222v-56H151.06822v56z" fill="#4185A6" />
        <path d="M147.00622 589.258H183.56222v8H147.00622z" fill="#4185A6" />
        <path d="M658.90622 488h36.556v48h-36.556z" fill="#63A0B5" />
        <path d="M699.53022 540h-44.68v-56h44.68v56z m-36.558-8h28.432v-40h-28.432v40z" fill="#4185A6" />
        <path d="M658.91022 500h36.556v8h-36.556z" fill="#4185A6" />
        <path d="M714.41822 488h36.556v48h-36.556z" fill="#63A0B5" />
        <path d="M755.03022 540h-44.68v-56h44.68v56z m-36.556-8h28.432v-40h-28.432v40z" fill="#4185A6" />
        <path d="M714.41222 500h36.556v8h-36.556z" fill="#4185A6" />
        <path d="M769.93022 488h36.556v48h-36.556z" fill="#63A0B5" />
        <path d="M810.54822 540h-44.68v-56h44.68v56z m-36.556-8h28.432v-40h-28.432v40z" fill="#4185A6" />
        <path d="M769.93022 500h36.556v8h-36.556z" fill="#4185A6" />
        <path d="M625.73422 673.334h235.926V704H625.73422z" fill="#B66E64" />
        <path d="M745.50622 694.406c-2.686 0-5.226 0.52-7.66 1.276a42.778 42.778 0 0 0-35.022-18.09 42.778 42.778 0 0 0-35.022 18.09c-2.434-0.756-4.974-1.276-7.66-1.276-14.144 0-25.608 11.29-25.608 25.218h136.58c0-13.926-11.466-25.218-25.608-25.218z" fill="#69BE5D" />
        <path d="M762.99422 694.406c-2.686 0-5.226 0.52-7.66 1.276a42.778 42.778 0 0 0-35.022-18.09c-3.02 0-5.906 0.484-8.744 1.074 10.818 2.246 20.172 8.37 26.278 17.016 2.434-0.756 4.974-1.276 7.66-1.276 14.144 0 25.608 11.292 25.608 25.218h17.488c0-13.926-11.464-25.218-25.608-25.218z" fill="#9DC85C" />
        <path d="M1023.73422 536.5h-162.076v40.754h159.136c1.474-13.44 2.536-27.006 2.94-40.754z" fill="#F26E64" />
        <path d="M883.15422 612.5h96.976v46.056h-96.976z" fill="#63A0B5" />
        <path d="M984.19222 662.554h-105.1V608.5h105.1v54.054z m-96.976-8h88.852V616.5h-88.852v38.054z" fill="#4185A6" />
        <path d="M927.58022 612.5h8.124v46.054h-8.124z" fill="#4185A6" />
        <path d="M861.66022 512h17.264v65.254h-17.264z" fill="#F26E64" />
        <path d="M219.54822 349.578h17.264v55.676h-17.264z" fill="#F26E64" />
        <path d="M202.28622 443.578h17.264v55.676h-17.264z" fill="#F26E64" />
        <path d="M285.96222 337.5h22.848v54.614H285.96222z" fill="#B66E64" />
        <path d="M428.12822 337.5h22.848v54.614h-22.848z" fill="#B66E64" />
        <path d="M500.12622 349.578h17.264v55.676h-17.264z" fill="#F26E64" />
        <path d="M1020.79422 577.254h-159.136v19.5h156.354c0.968-6.486 2.062-12.93 2.782-19.5z" fill="#FF8562" />
        <path d="M273.70622 573.754h36.556v64h-36.556z" fill="#63A0B5" />
        <path d="M314.32022 641.758h-44.68v-72h44.68v72z m-36.556-8h28.432v-56h-28.432v56z" fill="#4185A6" />
        <path d="M273.70222 585.758h36.556v8H273.70222z" fill="#4185A6" />
        <path d="M339.37422 573.754h36.556v64h-36.556z" fill="#63A0B5" />
        <path d="M379.99222 641.758h-44.68v-72h44.68v72z m-36.556-8h28.432v-56h-28.432v56z" fill="#4185A6" />
        <path d="M339.37422 585.758h36.556v8h-36.556z" fill="#4185A6" />
        <path d="M273.70622 484.5h36.556v48h-36.556z" fill="#63A0B5" />
        <path d="M314.32022 536.5h-44.68v-56h44.68v56z m-36.556-8h28.432v-40h-28.432v40z" fill="#4185A6" />
        <path d="M273.70222 496.5h36.556v8H273.70222z" fill="#4185A6" />
        <path d="M339.37422 484.5h36.556v48h-36.556z" fill="#63A0B5" />
        <path d="M379.99222 536.5h-44.68v-56h44.68v56z m-36.556-8h28.432v-40h-28.432v40z" fill="#4185A6" />
        <path d="M339.37422 496.5h36.556v8h-36.556z" fill="#4185A6" />
        <path d="M219.54822 464H1.54622c-1.19 15.81-1.748 31.804-1.462 48 0.096 5.366 0.43 10.674 0.688 16h218.776v-64z" fill="#F26E64" />
        <path d="M40.84222 704h178.708v-30.666H29.14622c3.62 10.354 7.448 20.614 11.696 30.666z" fill="#B66E64" />
        <path d="M213.56022 715.512V633.56c0-4.206-3.462-7.616-7.738-7.616s-7.738 3.41-7.738 7.616v81.95h15.476z" fill="#996459" />
        <path d="M260.69022 608.444c0 41.47-24.566 62.284-54.872 62.284s-54.872-20.816-54.872-62.284 33.612-203.188 54.872-203.188 54.872 161.718 54.872 203.188z" fill="#69BE5D" />
        <path d="M205.81822 405.254c-4.21 0-8.908 6.412-13.73 16.908 17.342 25.866 39.78 153.66 39.78 189.156 0 34.68-15.66 54.204-36.452 58.492 3.374 0.576 6.838 0.918 10.402 0.918 30.304 0 54.872-20.816 54.872-62.284 0-41.47-33.612-203.19-54.872-203.19z" fill="#9DC85C" />
        <path d="M280.37222 715.512v-63c0-3.232-2.662-5.854-5.95-5.854-3.288 0-5.95 2.622-5.95 5.854v63h11.9z" fill="#996459" />
        <path d="M316.60222 633.202c0 31.88-18.886 47.882-42.182 47.882s-42.182-16.002-42.182-47.882 25.84-156.204 42.182-156.204 42.182 124.324 42.182 156.204z" fill="#69BE5D" />
        <path d="M274.42022 476.998c-3.236 0-6.848 4.93-10.556 12.998 13.332 19.884 30.58 118.126 30.58 145.416 0 26.66-12.038 41.67-28.022 44.966a47.5 47.5 0 0 0 7.996 0.706c23.296 0 42.182-16.002 42.182-47.882s-25.838-156.204-42.18-156.204z" fill="#9DC85C" />
        <path d="M719.74822 688.876c-3.276 0-6.372 0.634-9.34 1.556a52.156 52.156 0 0 0-42.702-22.056 52.16 52.16 0 0 0-42.702 22.056c-2.968-0.922-6.064-1.556-9.34-1.556-17.246 0-31.226 13.768-31.226 30.75h166.536c0-16.984-13.98-30.75-31.226-30.75z" fill="#69BE5D" />
        <path d="M667.11422 688.876c-3.276 0-6.372 0.634-9.34 1.556a52.156 52.156 0 0 0-42.702-22.056 52.16 52.16 0 0 0-42.702 22.056c-2.968-0.922-6.064-1.556-9.34-1.556-17.246 0-31.226 13.768-31.226 30.75h166.536c0-16.984-13.98-30.75-31.226-30.75z" fill="#69BE5D" />
        <path d="M688.43822 688.874c-3.276 0-6.372 0.634-9.34 1.556a52.158 52.158 0 0 0-42.704-22.056c-3.682 0-7.2 0.59-10.662 1.31 13.192 2.738 24.596 10.206 32.04 20.748 2.968-0.922 6.064-1.556 9.34-1.556 17.246 0 31.226 13.768 31.226 30.75h21.324c0.002-16.984-13.978-30.752-31.224-30.752z" fill="#9DC85C" />
      </svg>
                          <p class="text-center detail-isi" style="color: #475569; font-weight: 800;">Tentang Desa</p>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-carousel my-2">
                      <a href="<?= base_url('pengaduan') ?>">
                    <div class="card-body text-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63" fill="none" class="icon-land">
                            <path d="M48.2055 14.2726L57.4465 5.11973C57.8389 4.73115 58.4879 4.79501 58.797 5.25262L60.9288 8.40865C61.2223 8.84338 61.0736 9.43671 60.6096 9.68145L49.2367 15.6783C49.0446 15.7795 48.8219 15.8063 48.6113 15.7535C48.4007 15.7007 48.217 15.572 48.0955 15.3921C47.9804 15.2219 47.9285 15.0169 47.9485 14.8125C47.9686 14.6081 48.0595 14.4171 48.2055 14.2726ZM49.7337 22.1327C49.7683 22.302 49.8642 22.4525 50.0031 22.5554C50.1419 22.6583 50.3138 22.7063 50.4859 22.6902L60.672 21.7393C60.77 21.7302 60.8651 21.7004 60.9509 21.6521C61.0368 21.6038 61.1115 21.5379 61.1701 21.4587C61.2288 21.3796 61.2701 21.289 61.2914 21.1928C61.3127 21.0966 61.3135 20.997 61.2937 20.9005L60.686 17.9315C60.5979 17.5011 60.1402 17.2567 59.7335 17.4232L50.1551 21.343C50.0039 21.4049 49.879 21.5177 49.8021 21.6619C49.7251 21.806 49.7009 21.9726 49.7337 22.1327ZM42.1283 11.3238C42.2725 11.419 42.4467 11.4576 42.6177 11.4322C42.7886 11.4068 42.9441 11.3192 43.0544 11.1862L49.5846 3.31119C49.6474 3.23535 49.6936 3.14711 49.7201 3.05224C49.7466 2.95736 49.7528 2.85796 49.7384 2.76052C49.7239 2.66308 49.689 2.56978 49.6361 2.4867C49.5832 2.40362 49.5133 2.33262 49.4311 2.27833L46.9022 0.608711C46.5355 0.366678 46.039 0.517533 45.8692 0.92285L41.8679 10.4675C41.8047 10.6182 41.7962 10.7862 41.8437 10.9426C41.8913 11.0989 41.9919 11.2337 42.1283 11.3238Z" fill="#FFD469"/>
                            <path d="M26.8734 59.0423L24.9062 60.1928C23.307 61.128 21.2527 60.5898 20.3175 58.9906L15.1015 50.0713C14.1664 48.4722 14.7046 46.4178 16.3037 45.4827L18.271 44.3322C19.8701 43.397 21.9245 43.9352 22.8596 45.5344L28.0756 54.4537C29.0109 56.0528 28.4726 58.1072 26.8734 59.0423Z" fill="#00B1FF"/>
                            <path d="M14.8151 50.2894L33.8764 39.9116L20.846 19.5095L3.61561 32.3104C3.5045 32.3814 -1.15258 36.6425 3.96186 44.6505C9.07631 52.6585 14.8151 50.2894 14.8151 50.2894Z" fill="#0096D1"/>
                            <path d="M44.6084 18.7314C50.3098 27.6582 53.764 37.329 51.3787 38.8523C48.9935 40.3756 41.6722 33.1749 35.9708 24.248C30.2694 15.3211 26.8154 5.65056 29.2005 4.12712C31.5856 2.60367 38.9071 9.8045 44.6084 18.7314Z" fill="#727272"/>
                            <path d="M41.9239 31.1184C43.8999 29.8563 43.3338 25.4389 40.6595 21.2518C37.9851 17.0647 34.2153 14.6936 32.2393 15.9557C30.2633 17.2178 30.8294 21.6352 33.5038 25.8222C36.1781 30.0093 39.948 32.3805 41.9239 31.1184Z" fill="#B2B2B2"/>
                            <path d="M51.2746 38.9189C49.1912 40.2495 42.1145 32.8925 36.4131 23.9656C30.7118 15.0387 27.013 5.52431 29.0964 4.19368C29.2164 4.11703 29.351 4.06645 29.498 4.03852C28.5151 4.016 27.5522 4.52862 26.9823 5.61832C24.4712 10.4206 18.0625 21.0752 18.0625 21.0752C18.0625 21.0752 14.8824 25.3573 20.4728 34.1102C26.0632 42.8631 31.4604 41.7678 31.4604 41.7678C31.4604 41.7678 43.7211 40.5153 49.1083 40.258C50.3836 40.1971 51.2719 39.4889 51.6409 38.5336C51.543 38.6948 51.4218 38.8249 51.2746 38.9189Z" fill="#D1D1D1"/>
                            <path d="M6.50819 37.9199C6.21682 37.9202 5.93006 37.8471 5.67447 37.7071C5.41888 37.5672 5.20273 37.3651 5.04603 37.1194C4.53083 36.3127 4.76708 35.2412 5.57378 34.726L12.6995 30.175C13.5061 29.66 14.5777 29.8961 15.0929 30.7028C15.6081 31.5095 15.3719 32.581 14.5652 33.0962L7.43941 37.6472C7.16149 37.8253 6.8383 37.9199 6.50819 37.9199Z" fill="#00B1FF"/>
                          </svg>
                      <p class="card-text detail-isi" style="color: #475569; font-weight: 800;">Pengaduan</p>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-carousel mb-3 mt-2">
                     <a href="<?= base_url('aparatur') ?>">
                    <div class="card-body text-center mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="69" viewBox="0 0 128 128" fill="none" class="icon-fitur">
        <path d="M128 0H0V128H128V0Z" fill="url(#pattern0)" />
        <defs>
          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_330_11" transform="scale(0.0078125)" />
          </pattern>
          <image id="image0_330_11" width="128" height="128" xlink:href="data:image/png;base64,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" />
        </defs>
      </svg>
                      <p class="card-text detail-isi" style="color: #475569; font-weight: 800;">Aparatur Desa</p>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </center>
          <center>
            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <div class="card card-carousel my-2">
                      <a href="<?= base_url('sejarah') ?>">
                    <div class="card-body text-center my-1">
                        <svg width="75" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 460 460" xml:space="preserve">
<g id="XMLID_1016_">
	<path id="XMLID_1017_" style="fill:#FE843F;" d="M451.868,170.271c0.016,0.057,0.138,0.12,0.333,0.186
		C425.963,72.298,336.432,0,230,0C102.974,0,0,102.974,0,230c0,105.83,71.482,194.951,168.794,221.751L451.868,170.271z"/>
	<path id="XMLID_1018_" style="fill:#FC5A37;" d="M460,230c0-19.519-2.441-38.467-7.017-56.563
		c-0.463-1.107-0.841-2.166-1.114-3.166L371.82,90.223L100,382.957l68.794,68.794C188.284,457.118,208.804,460,230,460
		C357.026,460,460,357.025,460,230z"/>
	<polygon id="XMLID_1019_" style="fill:#FFF2D4;" points="340,227.632 340,347.957 230,357.957 230,227.632 285,217.632 	"/>
	<rect id="XMLID_1020_" x="230" y="192.632" style="fill:#FFC85F;" width="110" height="35"/>
	<polygon id="XMLID_1021_" style="fill:#FFE278;" points="340,122.043 340,192.632 230,192.632 230,122.043 285,112.043 	"/>
	<rect id="XMLID_1022_" x="230" y="77.043" style="fill:#FFC85F;" width="110" height="45"/>
	<polygon id="XMLID_1023_" style="fill:#FFFFFF;" points="230,227.632 230,357.957 120,347.957 120,227.632 175,217.632 	"/>
	<rect id="XMLID_1024_" x="120" y="192.632" style="fill:#FFE278;" width="110" height="35"/>
	<polygon id="XMLID_1025_" style="fill:#FFF2D4;" points="230,122.043 230,192.632 120,192.632 120,122.043 175,112.043 	"/>
	<rect id="XMLID_1026_" x="120" y="77.043" style="fill:#FFE278;" width="110" height="45"/>
	<path id="XMLID_1027_" style="fill:#FFE278;" d="M183.75,279.793v78.164h-35v-78.164c0-9.66,7.84-17.5,17.5-17.5
		C175.919,262.293,183.75,270.133,183.75,279.793z"/>
	<path id="XMLID_1028_" style="fill:#FFC85F;" d="M247.5,279.793v78.164h-35v-78.164c0-9.66,7.84-17.5,17.5-17.5
		C239.669,262.293,247.5,270.133,247.5,279.793z"/>
	<path id="XMLID_1029_" style="fill:#FFC85F;" d="M311.25,279.793v78.164h-35v-78.164c0-9.66,7.84-17.5,17.5-17.5
		C303.419,262.293,311.25,270.133,311.25,279.793z"/>
	<path id="XMLID_1030_" style="fill:#FFF2D4;" d="M75,122.043c0,24.853,20.147,45,45,45l10-45l-10-45
		C95.147,77.043,75,97.19,75,122.043z"/>
	<path id="XMLID_1031_" style="fill:#FFE278;" d="M120,77.043v90c24.853,0,45-20.147,45-45S144.853,77.043,120,77.043z"/>
	<circle id="XMLID_1032_" style="fill:#FFFFFF;" cx="120" cy="122.043" r="22.5"/>
	<path id="XMLID_1033_" style="fill:#FFE278;" d="M295,122.043c0,24.853,20.147,45,45,45l10-45l-10-45
		C315.147,77.043,295,97.19,295,122.043z"/>
	<path id="XMLID_1034_" style="fill:#FFC85F;" d="M340,77.043v90c24.853,0,45-20.147,45-45S364.853,77.043,340,77.043z"/>
	<circle id="XMLID_1035_" style="fill:#FFF2D4;" cx="340" cy="122.043" r="22.5"/>
	<path id="XMLID_1036_" style="fill:#FFE278;" d="M340,347.957H230v35h130c0,0,0-7.875,0-17.5S351,347.957,340,347.957z"/>
	<path id="XMLID_1037_" style="fill:#FFF2D4;" d="M120,347.957c-11,0-20,7.875-20,17.5s0,17.5,0,17.5h130v-35H120z"/>
</g>
</svg>
                      <p class="card-text detail-isi" style="color: #475569; font-weight: 800;">Sejarah Desa</p>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-carousel my-2">
                      <a href="<?= base_url('berita') ?>">
                    <div class="card-body text-center my-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 91 91" fill="none" class="icon-land">
                            <g clip-path="url(#clip0_34_107)" filter="url(#filter0_d_34_107)">
                              <path d="M64.1035 15.7413C64.1035 11.7902 67.3076 8.58612 71.2587 8.58612H6.86204C5.28083 8.58629 4 9.86695 4 11.4483V80.138C4 81.7192 5.28083 83 6.86204 83H61.2413C62.8225 83 64.1034 81.7192 64.1034 80.138V15.7413H64.1035Z" fill="#9ADCFA"/>
                              <path d="M82.7069 70.1207C85.0781 70.1207 87.0001 68.1989 87.0001 65.8276V14.3104V2.86204C87.0001 1.28083 85.7192 0 84.138 0H21.1725C19.5913 0 18.3104 1.28083 18.3104 2.86204V8.58612H71.2588C75.2098 8.58612 78.4139 11.7888 78.4139 15.7413V65.8276C78.4138 68.1988 80.3357 70.1207 82.7069 70.1207Z" fill="#3F6F83"/>
                              <path d="M71.2587 80.138C70.4673 80.138 69.8276 79.4968 69.8276 78.7069V15.7413C69.8276 14.9513 70.4673 14.3102 71.2587 14.3102C72.0502 14.3102 72.6898 14.9513 72.6898 15.7413V78.7069C72.6897 79.4968 72.05 80.138 71.2587 80.138Z" fill="#3F6F83"/>
                              <path d="M49.7932 31.4828C49.7932 40.1764 42.7453 47.2241 34.0519 47.2241C25.3584 47.2241 18.3105 40.1762 18.3105 31.4828C18.3105 22.7893 25.3584 15.7415 34.0519 15.7415C42.7453 15.7415 49.7932 22.7892 49.7932 31.4828Z" fill="#8697CB"/>
                              <path d="M34.0517 17.1724C26.161 17.1724 19.7413 23.5921 19.7413 31.4828C19.7413 39.3735 26.161 45.7931 34.0517 45.7931C41.9424 45.7931 48.3621 39.3735 48.3621 31.4828C48.3621 23.5921 41.9425 17.1724 34.0517 17.1724ZM34.0517 48.6552C24.5825 48.6552 16.8793 40.9519 16.8793 31.4828C16.8793 22.0136 24.5825 14.3104 34.0517 14.3104C43.5208 14.3104 51.2241 22.0136 51.2241 31.4828C51.2241 40.9519 43.5208 48.6552 34.0517 48.6552Z" fill="#556080"/>
                              <path d="M34.0516 17.1724C31.2368 17.1724 26.8965 23.3173 26.8965 31.4828C26.8965 39.6482 31.2368 45.7931 34.0516 45.7931C36.8665 45.7931 41.2068 39.6482 41.2068 31.4828C41.2068 23.3173 36.8665 17.1724 34.0516 17.1724ZM34.0516 48.6552C28.8098 48.6552 24.0344 40.4696 24.0344 31.4828C24.0344 22.4959 28.8098 14.3104 34.0516 14.3104C39.2935 14.3104 44.0689 22.4959 44.0689 31.4828C44.0689 40.4696 39.2936 48.6552 34.0516 48.6552Z" fill="#556080"/>
                              <path d="M49.7932 32.9137H18.3104C17.519 32.9137 16.8793 32.2726 16.8793 31.4826C16.8793 30.6927 17.519 30.0515 18.3104 30.0515H49.7932C50.5846 30.0515 51.2243 30.6927 51.2243 31.4826C51.2243 32.2726 50.5844 32.9137 49.7932 32.9137Z" fill="#556080"/>
                              <path d="M36.9138 55.8104H11.1552C10.3638 55.8104 9.72412 55.1692 9.72412 54.3793C9.72412 53.5893 10.3638 52.9482 11.1552 52.9482H36.9139C37.7053 52.9482 38.345 53.5893 38.345 54.3793C38.345 55.1692 37.7052 55.8104 36.9138 55.8104Z" fill="#3F6F83"/>
                              <path d="M31.1897 77.2759H11.1552C10.3638 77.2759 9.72412 76.6348 9.72412 75.8448C9.72412 75.0549 10.3638 74.4137 11.1552 74.4137H31.1897C31.9811 74.4137 32.6208 75.0549 32.6208 75.8448C32.6208 76.6348 31.9811 77.2759 31.1897 77.2759Z" fill="#3F6F83"/>
                              <path d="M56.9484 77.2759H39.776C38.9845 77.2759 38.3448 76.6348 38.3448 75.8448C38.3448 75.0549 38.9845 74.4137 39.776 74.4137H56.9484C57.7398 74.4137 58.3795 75.0549 58.3795 75.8448C58.3795 76.6348 57.7396 77.2759 56.9484 77.2759Z" fill="#3F6F83"/>
                              <path d="M28.3276 62.9656H11.1552C10.3638 62.9656 9.72412 62.3244 9.72412 61.5344C9.72412 60.7445 10.3638 60.1033 11.1552 60.1033H28.3276C29.119 60.1033 29.7587 60.7445 29.7587 61.5344C29.7587 62.3244 29.119 62.9656 28.3276 62.9656Z" fill="#3F6F83"/>
                              <path d="M56.9484 55.8104H45.5001C44.7087 55.8104 44.069 55.1692 44.069 54.3793C44.069 53.5893 44.7087 52.9482 45.5001 52.9482H56.9484C57.7398 52.9482 58.3795 53.5893 58.3795 54.3793C58.3795 55.1692 57.7397 55.8104 56.9484 55.8104Z" fill="#3F6F83"/>
                              <path d="M56.9484 62.9656H36.9138C36.1224 62.9656 35.4827 62.3244 35.4827 61.5344C35.4827 60.7445 36.1224 60.1033 36.9138 60.1033H56.9482C57.7396 60.1033 58.3793 60.7445 58.3793 61.5344C58.3793 62.3244 57.7396 62.9656 56.9484 62.9656Z" fill="#3F6F83"/>
                              <path d="M19.7413 70.1207H11.1552C10.3638 70.1207 9.72412 69.4796 9.72412 68.6896C9.72412 67.8997 10.3638 67.2585 11.1552 67.2585H19.7415C20.5329 67.2585 21.1726 67.8997 21.1726 68.6896C21.1724 69.4796 20.5328 70.1207 19.7413 70.1207Z" fill="#3F6F83"/>
                              <path d="M39.7759 70.1207H28.3276C27.5362 70.1207 26.8965 69.4796 26.8965 68.6896C26.8965 67.8997 27.5362 67.2585 28.3276 67.2585H39.7759C40.5673 67.2585 41.207 67.8997 41.207 68.6896C41.2069 69.4796 40.5672 70.1207 39.7759 70.1207Z" fill="#3F6F83"/>
                              <path d="M56.9484 70.1207H48.3621C47.5707 70.1207 46.931 69.4796 46.931 68.6896C46.931 67.8997 47.5707 67.2585 48.3621 67.2585H56.9484C57.7398 67.2585 58.3795 67.8997 58.3795 68.6896C58.3794 69.4796 57.7397 70.1207 56.9484 70.1207Z" fill="#3F6F83"/>
                              <path d="M34.0517 48.6552C33.2603 48.6552 32.6206 48.014 32.6206 47.2241V15.7413C32.6206 14.9513 33.2603 14.3102 34.0517 14.3102C34.8431 14.3102 35.4828 14.9513 35.4828 15.7413V47.2241C35.4828 48.014 34.8431 48.6552 34.0517 48.6552Z" fill="#556080"/>
                            </g>
                            <defs>
                              <filter id="filter0_d_34_107" x="0" y="0" width="91" height="91" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_34_107"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_34_107" result="shape"/>
                              </filter>
                              <clipPath id="clip0_34_107">
                                <rect width="83" height="83" fill="white" transform="translate(4)"/>
                              </clipPath>
                            </defs>
                          </svg>
                      <p class="card-text detail-isi" style="color: #475569; font-weight: 800;">Berita</p>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-carousel mb-3 mt-2">
                      <a href="<?= base_url('galeri') ?>">
                    <div class="card-body text-center my-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="78" viewBox="0 0 91 91" fill="none" class="icon-land">
                            <g clip-path="url(#clip0_34_129)" filter="url(#filter0_d_34_129)">
                              <path d="M45.5 0C68.4196 0 87 18.5804 87 41.5C87 64.4196 68.4196 83 45.5 83C22.5804 83 4 64.4196 4 41.5C4 18.5804 22.5804 0 45.5 0Z" fill="#2394BC"/>
                              <path d="M16.9413 25.847L59.3784 14.4769C60.7172 14.1175 62.0925 14.9035 62.4478 16.2315L70.8249 47.4951C71.1819 48.8239 70.3842 50.1909 69.0446 50.5503L26.6075 61.9213C25.2687 62.2799 23.8934 61.4939 23.5382 60.1659L15.161 28.9014C14.8049 27.5734 15.6026 26.2056 16.9413 25.847Z" fill="#EDEDED"/>
                              <path d="M20.4174 28.3337L57.5848 18.3745C58.6115 18.0998 59.6664 18.7065 59.9403 19.7308L66.8974 45.6932C67.1721 46.7165 66.5629 47.7707 65.5353 48.0454L28.3679 58.0046C27.3421 58.2801 26.2863 57.6725 26.0124 56.6475L19.0562 30.6859C18.7823 29.6609 19.3915 28.6084 20.4174 28.3337Z" fill="#4681A0"/>
                              <path d="M24.7815 25.7416H68.7159C70.102 25.7416 71.2258 26.8563 71.2258 28.2316V60.5983C71.2258 61.9728 70.102 63.0875 68.7159 63.0875H24.7815C23.3946 63.0875 22.2716 61.9728 22.2716 60.5983V28.2316C22.2716 26.8555 23.3946 25.7416 24.7815 25.7416Z" fill="#F6F6F6"/>
                              <path d="M27.4965 29.0425H65.9752C67.0376 29.0425 67.8984 29.9024 67.8984 30.9623V57.8402C67.8984 58.9001 67.0376 59.7592 65.9752 59.7592H27.4965C26.4341 59.7592 25.5725 58.9001 25.5725 57.8402V30.9631C25.5717 29.9024 26.4332 29.0425 27.4965 29.0425Z" fill="#A3E0F5"/>
                              <path d="M28.9033 50.6217C27.7504 50.6217 26.6382 50.718 25.5717 50.8815V57.8402C25.5717 58.9001 26.4332 59.7592 27.4956 59.7592H42.0057C42.1144 59.3525 42.1874 58.9383 42.1874 58.5125C42.1883 54.155 36.2405 50.6217 28.9033 50.6217Z" fill="#3DB39E"/>
                              <path d="M67.8984 57.841V47.5059C65.3287 46.8452 62.5059 46.48 59.5453 46.48C47.5916 46.48 37.9014 52.4261 37.9014 59.76H65.9753C67.0377 59.76 67.8984 58.901 67.8984 57.841Z" fill="#4BC2AD"/>
                              <path d="M25.5717 30.9631V40.577C25.98 40.626 26.3934 40.6584 26.815 40.6584C32.5437 40.6584 37.1883 36.0162 37.1883 30.2892C37.1883 29.8667 37.1551 29.4517 37.1062 29.0425H27.4964C26.4332 29.0425 25.5717 29.9024 25.5717 30.9631Z" fill="#EFC75E"/>
                              <path d="M68.7159 63.0875H24.7815C23.3946 63.0875 22.2716 61.9728 22.2716 60.5983V28.2316C22.2716 27.9835 22.3197 27.7486 22.3878 27.5228C21.3619 27.8357 20.6116 28.772 20.6116 29.8916V62.2583C20.6116 63.6328 21.7354 64.7475 23.1215 64.7475H67.0559C68.1922 64.7475 69.1417 63.9938 69.4504 62.9663C69.2164 63.0377 68.9732 63.0875 68.7159 63.0875Z" fill="#1F85A9"/>
                              <path d="M22.2716 55.4374V28.2316C22.2716 27.9835 22.3197 27.7486 22.3878 27.5228C21.3619 27.8357 20.6116 28.772 20.6116 29.8916V49.2422L22.2716 55.4374Z" fill="#D5D5D5"/>
                              <path d="M21.4416 28.059C20.9344 28.5113 20.6116 29.1604 20.6116 29.8916V36.4885L22.2716 42.6836V28.2316C22.2716 28.0922 22.289 27.9577 22.3147 27.8258L21.4416 28.059Z" fill="#3F7490"/>
                            </g>
                            <defs>
                              <filter id="filter0_d_34_129" x="0" y="0" width="91" height="91" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_34_129"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_34_129" result="shape"/>
                              </filter>
                              <clipPath id="clip0_34_129">
                                <rect width="83" height="83" fill="white" transform="translate(4)"/>
                              </clipPath>
                            </defs>
                          </svg>
                      <p class="card-text detail-isi" style="color: #475569; font-weight: 800;">Album Galeri</p>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </center>
          </div>
          <button class="carousel-control-prev jarak-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 63 63" fill="none" class="icon-land">
                  <path d="M35.925 22.65L27.075 31.5L35.925 40.35" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M61 31.5C61 45.4063 61 52.3597 56.6797 56.6797C52.3597 61 45.4063 61 31.5 61C17.5936 61 10.6403 61 6.32019 56.6797C2 52.3597 2 45.4063 2 31.5C2 17.5936 2 10.6403 6.32019 6.32019C10.6403 2 17.5936 2 31.5 2C45.4063 2 52.3597 2 56.6797 6.32019C59.5524 9.19272 60.515 13.2293 60.8375 19.7" stroke="white" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </button>
            <button class="carousel-control-next jarak-prev-2" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 63 63" fill="none" class="icon-land">
                    <path d="M27.075 40.35L35.925 31.5L27.075 22.65" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 31.5C2 17.5937 2 10.6403 6.32028 6.32028C10.6403 2 17.5937 2 31.5 2C45.4064 2 52.3597 2 56.6798 6.32028C61 10.6403 61 17.5937 61 31.5C61 45.4064 61 52.3597 56.6798 56.6798C52.3597 61 45.4064 61 31.5 61C17.5937 61 10.6403 61 6.32028 56.6798C3.44757 53.8073 2.48498 49.7707 2.16254 43.3" stroke="white" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
  </div>
  <!-- End -->

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
