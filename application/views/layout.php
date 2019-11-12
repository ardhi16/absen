<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= site_url('media/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= site_url('media/css/bootstrap-datepicker.min.css') ?>">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="<?= site_url('media/js/jquery.min.js') ?>"></script>
</head>

<body>
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('piket') ?>">Jenis Piket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('anggota') ?>">Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('kehadiran') ?>">Kehadiran</a>
                    </li>
                </ul>
            </div>

            <a class="btn btn-danger" href="<?= site_url('auth/logout') ?>">Logout</a>
        </nav>
    </div>

    <div class="container-fluid">
        <?php isset($main) ? $this->load->view($main) : NULL; ?>
    </div>
    <footer class="mt-3">

    </footer>



    <script src="<?= site_url('media/js/bootstrap.min.js') ?>"></script>
    <script src="<?= site_url('media/js/bootstrap-datepicker.min.js') ?>"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
        $(document).ready(function() {
            $('.myTable').DataTable();
        });
    </script>
</body>

</html>