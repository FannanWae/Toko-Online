<?= $this->extend('templates') ?>
<?= $this->section('content') ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <?php if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            } ?>
        </div>
        <?php foreach ($model as $m) : ?>
            <div class="col-4 mt-3 mb-5">
                <?php
                echo form_open('Toko/add');
                echo form_hidden('id', $m->id);
                echo form_hidden('harga', $m->harga);
                echo form_hidden('nama', $m->nama);
                echo form_hidden('gambar', $m->gambar);
                ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('img/' . $m->gambar) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $m->nama; ?></h5>
                        <p class="card-text">Memiliki Stok <?= $m->stok; ?></p>
                        <button class="btn btn-success"><?= "Rp " . number_format($m->harga, 2) ?></button>
                        <button type="submit" class="btn btn-outline-success">+</button>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?= $this->endSection() ?>