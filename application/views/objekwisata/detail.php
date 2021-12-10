<div class="container">
    <br>
    <a class="btn btn-secondary" href=<?= site_url($link); ?> role="button">Kembali ke <?= $title ?></a>
    <br></br>
    <div class="card" style="width: 72rem;">
        <div class="card-header">
            <?= $query['Nama'] ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Kode: <?= $query['Kode']; ?></li>
            <li class="list-group-item">Kegiatan Wisata: <?= $query['KegiatanWisata']; ?></li>
        </ul>
    </div>
</div>