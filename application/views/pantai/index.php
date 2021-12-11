<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Garis Pantai (m)</th>
        <th scope="col">Koordinat Astronomis</th>
        <th scope="col">Letak Administratif</th>
        <th scope="col">Batas Perairan</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $pnt ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $pnt['Nama'] ?></td>
            <td><?= $pnt['GarisPantai'] ?></td>
            <td><?= $pnt['KoordinatAstronomis'] ?></td>
            <td><?= 'Kecamatan ' . $pnt['Kecamatan'] . ', ' . $pnt['JenisKK'] . ' ' . $pnt['NamaKotaKab'] ?></td>
            <td><?= $pnt['BatasPerairan'] ?></td>
            <td><a href=<?= site_url($link . '/' . $pnt['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 