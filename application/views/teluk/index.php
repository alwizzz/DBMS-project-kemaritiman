<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Koordinat Astronomis</th>
        <th scope="col">Menjorok Ke</th>
        <th scope="col">Jarak Menjorok (km)</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $tlk ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $tlk['Nama'] ?></td>
            <td><?= $tlk['KoordinatAstronomis'] ?></td>
            <td><?= 'Pulau ' . $tlk['NamaPulau'] ?></td>
            <td><?= $tlk['JarakMenjorok'] ?></td>
            <td><a href=<?= site_url($link . '/' . $tlk['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 