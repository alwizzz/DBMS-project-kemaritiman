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
                    <li class="list-group-item"><b>Tanggal Mulai:</b> <?= $query['TanggalBerangkat']; ?></li>
                    <li class="list-group-item"><b>Tanggal Selesai:</b> <?= $query['TanggalPulang']; ?></li>
                    <li class="list-group-item"><b>Lokasi Penangkapan:</b> Laut <?= $query['NamaLaut']; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>