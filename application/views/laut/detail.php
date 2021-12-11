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
                    <li class="list-group-item"><b>Koordinat Astronomis:</b> <?= $query['KoordinatAstronomis']; ?></li>
                    <li class="list-group-item"><b>Suhu Permukaan:</b> <?= $query['SuhuPermukaan'] . " derajat Celcius"; ?></li>
                    <li class="list-group-item"><b>Luas:</b> <?= $query['Luas'] . " km persegi"; ?></li>
                    <li class="list-group-item"><b>Kedalaman Rerata:</b> <?= $query['KedalamanRerata'] . " m"; ?></li>
                    <li class="list-group-item"><b>Kedalaman Maksimum:</b> <?= $query['KedalamanMaks'] . " m"; ?></li>
                    <li class="list-group-item"><b>Letak Geografis:</b>
                        <ul>
                            <li>Batas Utara: <?= $query['BatasUtara']; ?></li>
                            <li>Batas Selatan: <?= $query['BatasSelatan']; ?></li>
                            <li>Batas Timur: <?= $query['BatasTimur']; ?></li>
                            <li>Batas Barat: <?= $query['BatasBarat']; ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item"><b>Hewan yang dapat ditemukan:</b>
                        <ul>
                            <?php foreach( $mn_eks as $eks ) : ?>
                                <li><?= $eks['NamaEkstraktif']; ?></li>
                            <?php endforeach; ?>    
                        </ul>
                    </li>
                    <li class="list-group-item"><b>Mineral yang dapat ditemukan:</b>
                        <ul>
                            <?php foreach( $mn_mrl as $mrl ) : ?>
                                <li><?= $mrl['NamaMineral']; ?></li>
                            <?php endforeach; ?>    
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
