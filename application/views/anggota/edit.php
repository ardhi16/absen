<h3>-->Edit</h3>
<a class="btn btn-primary" href="<?= site_url('anggota') ?>">Kembali</a>
<div class="col-md-6">


<form class="mt-3" action="" method="post">
    <div class="container-fluid">
        <div class="form-group">
            <label for="">Nama Anggota</label>
            <input type="text" name="anggota_nama" value="<?= $anggota['anggota_nama']?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Divisi</label>
            <input type="text" name="anggota_divisi" value="<?= $anggota['anggota_divisi']?>" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">KIRIM</button>
    </div>
</form>

</div>