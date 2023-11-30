<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="<?=base_url('admin/dashboard')?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Halaman</div>
                <a class="nav-link" href="<?=base_url('admin/dashboard/statistik')?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-line-chart"></i></div>
                    Statistik
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Profile Desa
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Pemerintahan Desa
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?=base_url('admin/dashboard/aparatur')?>">Aparatur Desa</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Profile
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('admin/dashboard/gambar-utama')?>">Gambar Utama</a>
                                <a class="nav-link" href="<?= site_url('admin/dashboard/profile-desa') ?>">Profile Desa</a>
                                <a class="nav-link" href="<?= site_url('admin/dashboard/visi-misi') ?>">Visi & Misi</a>
                                <a class="nav-link" href="<?= site_url('admin/dashboard/sejarah-desa') ?>">Sejarah Desa</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Media
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('admin/dashboard/galeri') ?>">Gallery</a>
                        <a class="nav-link" href="<?= site_url('admin/dashboard/posts') ?>">Posts</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Lainnya</div>
                <a class="nav-link" href="<?=base_url('admin/dashboard/agenda')?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-map"></i></div>
                    Agenda Desa
                </a>
                <a class="nav-link" href="<?= base_url('admin/dashboard/pengaduan') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Pengaduan Masyarakat
                </a>
                <a class="nav-link" href="<?= base_url('admin/dashboard/sosmed') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-message"></i></div>
                    Social Media
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= session()->get('admin_full_name') ?>
        </div>
    </nav>
</div>