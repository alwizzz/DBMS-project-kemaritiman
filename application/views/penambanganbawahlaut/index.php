<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Alat</th>
        <th scope="col">Mineral Yang Ditambang</th>
        <th scope="col">Koordinat Astronomis</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $pbl ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $pbl['Kode'] ?></td>
            <td><?= $pbl['Alat'] ?></td>
            <td><?= $pbl['Mineral'] ?></td>
            <td><?= $pbl['KoordinatAstronomis'] ?></td>
            <td><?= 'Laut ' . $pbl['LokasiLaut'] ?></td>
            <td><a href=<?= site_url($link . '/' . $pbl['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 