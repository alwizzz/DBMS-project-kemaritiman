<div class="container">
    <br>
    <a class="btn btn-secondary" href=<?= site_url($link); ?> role="button">Kembali ke <?= $title ?></a>
    <br></br>
    <div class="col">
        <div class="row">
            <div class="col-md-10 col-12">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h3>Detail <?= $title; ?></h3></li>
                    <li class="list-group-item"><b>Kode:</b> <?= $query['Kode']; ?></li>
                    <li class="list-group-item"><b>Kapal yang digunakan:</b> <?= $query['NamaKapal']; ?></li>
                    <li class="list-group-item"><b>Waktu Berangkat:</b> Pukul <?= $query['JamBerangkat']; ?></li>
                    <li class="list-group-item"><b>Waktu Sampai:</b> Pukul <?= $query['JamSampai']; ?></li>
                    <li class="list-group-item"><b>Pelabuhan Asal:</b> <?= $query['NamaPelabuhanDari']; ?></li>
                    <li class="list-group-item"><b>Pelabuhan Tujuan:</b> <?= $query['NamaPelabuhanKe']; ?></li>
                    <li class="list-group-item"><b>Melewati:</b> Laut <?= $query['NamaLaut']; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>