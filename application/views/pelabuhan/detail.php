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
                    <li class="list-group-item"><b>Jenis:</b> Pelabuhan <?= $query['Jenis']; ?></li>
                    <li class="list-group-item"><b>Letak Administratif:</b> <?= 'Kecamatan ' . $query['Kecamatan'] . ', ' . $query['JenisKK'] . ' ' . $query['NamaKotaKab'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

