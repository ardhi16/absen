<h3>-->Edit</h3>
<a class="btn btn-primary" href="<?= site_url('piket') ?>">Kembali</a>
<div class="col-md-6">


<form class="mt-3" action="" method="post">
    <div class="container-fluid">
        <div class="form-group">
            <label for="">Nama Jenis Piket</label>
            <input type="text" name="piket_jenis" value="<?= $piket['piket_jenis']?>" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">KIRIM</button>
    </div>
</form>

</div>