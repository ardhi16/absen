<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= site_url('media/css/bootstrap.min.css') ?>">
    <script src="<?= site_url('media/js/jquery.min.js') ?>"></script>
</head>

<body>
    <form action="" method="post">
        <div class="col-md-3 mx-auto mt-5">

            <div class="form-group">
                <label for="">USERNAME</label>
                <input class="form-control" type="text" name="username">
            </div>
            <div class="form-group">
                <label for="">PASSWORD</label>
                <input class="form-control" type="password" name="password">
            </div>
            <button class="btn btn-success" type="submit">LOGIN</button>
            <a class="btn btn-info" href="<?= site_url('absen') ?>">ABSEN</a>
        </div>
    </form>



    <script src="<?= site_url('media/js/bootstrap.min.js') ?>"></script>
</body>

</html>