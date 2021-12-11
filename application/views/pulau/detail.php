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
                    <li class="list-group-item"><b>Luas:</b> <?= $query['Luas']; ?> km persegi</li>
                    <li class="list-group-item"><b>Koordinat Astronomis:</b> <?= $query['KoordinatAstronomis']; ?></li>
                    <li class="list-group-item"><b>Panjang Garis Pantai:</b> <?= $query['PanjangGarisPantai']; ?> km</li>
                    <li class="list-group-item"><b>Letak Geografis:</b>
                        <ul>
                            <li>Batas Utara: <?= $query['BatasUtara']; ?></li>
                            <li>Batas Selatan: <?= $query['BatasSelatan']; ?></li>
                            <li>Batas Timur: <?= $query['BatasTimur']; ?></li>
                            <li>Batas Barat: <?= $query['BatasBarat']; ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item"><b>Cakupan:</b>
                        <ul>
                            <?php foreach( $mn_prov as $prov ) : ?>
                                <li>Provinsi <?= $prov['NamaProvinsi']; ?></li>
                            <?php endforeach; ?>    
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>