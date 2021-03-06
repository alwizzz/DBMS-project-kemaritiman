<div class="container">
    <br>
    <a class="btn btn-secondary" href=<?= site_url($link); ?> role="button">Kembali ke <?= $title ?></a>
    <br></br>
    <div class="col">
        <div class="row">
            <div class="col-md-10 col-12">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h3>Detail <?= $title; ?></h3></li>
                    <li class="list-group-item"><b>Nama:</b> <?= $query['Nama']; ?></li>
                    <li class="list-group-item"><b>Kode:</b> <?= $query['Kode']; ?></li>
                    <li class="list-group-item"><b>Jenis:</b> <?= $query['Jenis']; ?></li>
                    <?php if( !is_null($oo_trans['KodeTrans']) ) : ?>
                        <li class="list-group-item"><b>Digunakan oleh Transportasi Laut:</b> Ya</li>
                        <li class="list-group-item"><b>Kode Transportasi Laut:</b> <?= $oo_trans['KodeTrans'] ?></li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Digunakan oleh Transportasi Laut:</b> Tidak</li>
                    <?php endif; ?>  
                </ul>
            </div>
        </div>
    </div>
</div>