<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- My own style -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" rel="stylesheet">
    
    <!-- Chartjs -->
    <link href="<?= base_url('assets/vendor/chartjs/Chart.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('assets/vendor/chartjs/Chart.bundle.min.js') ?>"></script>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/simple-sidebar.css') ?>" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/images/favicon/apple-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('assets/images/favicon/apple-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/images/favicon/apple-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/images/favicon/apple-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/images/favicon/apple-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/images/favicon/apple-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/images/favicon/apple-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/images/favicon/apple-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/favicon/apple-icon-180x180.png'); ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url('assets/images/favicon/android-icon-192x192.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/images/favicon/favicon-96x96.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?= base_url('assets/images/favicon/manifest.json'); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/images/favicon/ms-icon-144x144.png'); ?>">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

    <!-- Shows which API key is being used -->
    <input type="hidden" value="<?= $this->session->selected_apikey ?>" />
    
    <!-- Page starts here -->
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <?= $sidebar ?>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid p-4">
                <div class="col-sm-12 m-0 p-0">
                    <!-- Search City -->
                    <?= $search_form ?>
                </div>
                
                <!-- Content -->
                <?= $content ?>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

    <!-- Tooltip -->
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</body>

</html>