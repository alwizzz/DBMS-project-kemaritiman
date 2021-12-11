<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Luas (hektare)</th>
        <th scope="col">Koordinat Astronomis</th>
        <th scope="col">Letak Administratif</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $htn ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $htn['Nama'] ?></td>
            <td><?= $htn['Luas'] ?></td>
            <td><?= $htn['KoordinatAstronomis'] ?></td>
            <td><?= $htn['JenisKK'] . ' ' .$htn['LokasiKotaKab'] ?></td>
            <td><a href=<?= site_url($link . '/' . $htn['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 