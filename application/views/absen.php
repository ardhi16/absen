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

<body onload="startTime()">
    <!-- As a link -->
    <nav class="navbar navbar-dark bg-dark mb-3">
        <a class="navbar-brand" href="#">Absen Piket MMC</a>
        <a class="btn btn-success" href="<?= site_url('auth/login') ?>">LOGIN</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h3><?= tgl_indo(date('Y-m-d'), 'l, d F Y') ?></h3>
                <h5 id="jam">19:00</h5>
                <?php if ($this->session->flashdata('berhasil')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?= $this->session->flashdata('berhasil'); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('gagal')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong> <?= $this->session->flashdata('gagal'); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <select name="anggota_id" class="form-control" id="" required>
                            <option value="">--- PILIH ANGGOTA ---</option>
                            <?php foreach ($anggota as $row) : ?>
                                <option value="<?= $row['anggota_id'] ?>"><?= $row['anggota_nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="piket_id" class="form-control" id="" required>
                            <option value="">--- PILIH PIKET ---</option>
                            <?php foreach ($piket as $row) : ?>
                                <option value="<?= $row['piket_id'] ?>"><?= $row['piket_jenis'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">KIRIM</button>
                </form>
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>DIVISI</th>
                                <th>JENIS PIKET</th>
                                <th>TANGGAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($kehadiran as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['anggota_nama'] ?></td>
                                    <td><?= $row['anggota_divisi'] ?></td>
                                    <td><?= $row['piket_jenis'] ?></td>
                                    <td><?= tgl_indo($row['kehadiran_tanggal'], 'l, d F Y H:i') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= site_url('media/js/bootstrap.min.js') ?>"></script>
    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('jam').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>
</body>

</html>