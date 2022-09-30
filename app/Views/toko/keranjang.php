<?= $this->extend('templates') ?>
<?= $this->section('content') ?>
<div class="container mt-3">
    <div class="row">
        <div class="col mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">gambar</th>
                        <th scope="col">nama</th>
                        <th scope="col">harga</th>
                        <th scope="col">qty</th>
                        <th scope="col">total</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($cart->contents() as $key => $value) {
                    ?>
                        <tr>
                            <th><?= $no++ ?></th>
                            <th><img style="width: 50px; heigth:50px;" src="<?= base_url('img/' . $value['options']['gambar']) ?>" alt="barang"></th>
                            <th><?= $value['name'] ?></th>
                            <th><?= "Rp " . number_format($value['price']) ?></th>
                            <th><?= $value['qty'] ?></th>
                            <th><?= "Rp " . number_format($value['subtotal']) ?></th>
                            <th><a href="<?= site_url('toko/del/' . $value['rowid']) ?>">
                                    <ion-icon name="trash" style="font-size: 30px; color:darkred; margin-right:2px;"></ion-icon>
                                </a></th>
                        </tr>
                    <?php } ?>
                    <tr>
                        <th scope="row"></th>
                        <td colspan="3"></td>
                        <td>Sub Total : </td>
                        <td><?= "Rp " . number_format($cart->total()) ?></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-success btn-rounded float-right">Payment</button>
            <a href="<?= site_url('toko/index') ?>"><button type="button" class="btn btn-primary btn-rounded float-right mr-2">Back</button></a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>