<h3>-->Piket</h3>
<a class="btn btn-success" href="<?= site_url('piket/tambah') ?>">Tambah</a>
<table class="table table-striped mt-3">
<thead class="table-dark">
    <tr>
        <th>NO</th>
        <th>JENIS PIKET</th>
        <th>AKSI</th>
    </tr>
</thead>
<tbody>
    <?php $i=1; foreach($piket as $row) : ?>
    <tr>
        <td><?= $i++?></td>
        <td><?= $row['piket_jenis'] ?></td>
        <td>
            <a onclick="return confirm('Apakah anda yakin akan menghapus ini?') " class="btn btn-danger" href="<?= site_url('piket/hapus/'. $row['piket_id'] ) ?>">Hapus</a>
            <a class="btn btn-success" href="<?= site_url('piket/edit/'. $row['piket_id'] ) ?>">Edit</a>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>