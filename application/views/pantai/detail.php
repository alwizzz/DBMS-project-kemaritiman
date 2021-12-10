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
                    <li class="list-group-item"><b>Garis Pantai:</b> <?= $query['GarisPantai']; ?> m</li>
                    <li class="list-group-item"><b>Koordinat Astronomis:</b> <?= $query['KoordinatAstronomis']; ?></li>
                    <li class="list-group-item"><b>Letak Administratif:</b> <?= 'Kecamatan ' . $query['Kecamatan'] . ', ' . $query['JenisKK'] . ' ' . $query['NamaKotaKab'] ?></li>
                    <li class="list-group-item"><b>Batas Perairan:</b> <?= $query['BatasPerairan']; ?></li>
                    <?php if(isset($query['KodeObjekWisata'])) : ?>
                        <li class="list-group-item"><b>Merupakan Objek Wisata:</b> Ya</li>
                        <li class="list-group-item"><b>Kode Objek Wisata:</b> <?= $query['KodeObjekWisata']; ?></li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Merupakan Objek Wisata:</b> Tidak</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>