<h3>-->Anggota</h3>
<a class="btn btn-success mb-3 btn-sm" href="<?= site_url('piket/tambah') ?>">Tambah</a>
<div class="table-responsive">
    <table class="table table-striped mt-3 myTable">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA ANGGOTA</th>
                <th>DIVISI</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($anggota as $row) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['anggota_nama'] ?></td>
                    <td><?= $row['anggota_divisi'] ?></td>
                    <td>
                        <a onclick="return confirm('Apakah anda yakin akan menghapus ini?') " class="btn btn-danger btn-sm" href="<?= site_url('anggota/hapus/' . $row['anggota_id']) ?>">Hapus</a>
                        <a class="btn btn-success btn-sm" href="<?= site_url('anggota/edit/' . $row['anggota_id']) ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>