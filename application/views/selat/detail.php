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
                    <li class="list-group-item"><b>Pulau yang dihubungkan:</b> <?= 'Pulau ' . $query['NamaPulauDari'] . ' dan Pulau ' . $query['NamaPulauKe'] ?></li>
                    <li class="list-group-item"><b>Jarak Antar Pulau:</b> <?= $query['JarakAntarPulau']; ?> km</li>
                </ul>
            </div>
        </div>
    </div>
</div>