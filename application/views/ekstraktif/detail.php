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
                    <li class="list-group-item"><b>Klasifikasi:</b> <?= $query['Klasifikasi']; ?></li>
                    <li class="list-group-item"><b>Ukuran rerata:</b> <?= $query['UkuranRerata'] . " cm"; ?></li>
                    <li class="list-group-item"><b>Tangkapan Tahunan:</b> <?= $query['TangkapanTahunan'] . " ton"; ?></li>
                    <li class="list-group-item"><b>Dapat ditemukan di:</b>
                        <ul>
                            <?php foreach( $mn_laut as $laut ) : ?>
                                <li>Laut <?= $laut['NamaLaut']; ?></li>
                            <?php endforeach; ?>    
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
 