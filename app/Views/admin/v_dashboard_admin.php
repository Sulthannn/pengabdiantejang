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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Welcome, Admin</li>
                        </ol>



                    </div>
                </main>
                <?php include('template/v_dashboard_template_footercontent.php'); ?>
            </div>
        </div>

<script>
    <?php if ($session->getFlashdata('alert')) : ?>
        <?php foreach($session->getFlashdata('alert') as $alert) : ?>
            alert('<?=$alert?>')
        <?php endforeach ?>
    <?php endif ?>
</script>

<?php
    include('template/v_dashboard_template_footer.php');
?>