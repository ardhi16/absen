<h3>-->Kehadiran</h3>
<form action="" method="get">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" name="ds" placeholder="Tanggal Awal" class="form-control datepicker" readonly>
            </div>
        </div>
        <div class="col-md-4">
            <input type="text" name="de" placeholder="Tanggal Akhir" class="form-control datepicker" readonly>
        </div>
        <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Filter</button>
        </div>
    </div>
</form>
<div class="table-responsive">
    <table class="table table-striped myTable">
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