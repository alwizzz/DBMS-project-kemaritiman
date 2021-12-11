<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Luas (hektare)</th>
        <th scope="col">Koordinat Astronomis</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Letak Administratif</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $tmn ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $tmn['Nama'] ?></td>
            <td><?= $tmn['Luas'] ?></td>
            <td><?= $tmn['KoordinatAstronomis'] ?></td>
            <td><?= 'Laut ' . $tmn['LokasiLaut'] ?></td>
            <td><?= 'Provinsi ' . $tmn['NamaProvinsi'] ?></td>
            <td><a href=<?= site_url($link . '/' . $tmn['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 