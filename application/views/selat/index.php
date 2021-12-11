<div class="container">
    <h1><?= $title ?></h1>
    <h4>Lorem ipsum dolor sit amet</h4>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Koordinat Astronomis</th>
        <th scope="col">Pulau Yang Dihubungkan</th>
        <th scope="col">Jarak Antar Pulau (km)</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $slt ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $slt['Nama'] ?></td>
            <td><?= $slt['KoordinatAstronomis'] ?></td>
            <td><?= 'Pulau ' . $slt['NamaPulauDari'] . ' dan Pulau ' . $slt['NamaPulauKe'] ?></td>
            <td><?= $slt['JarakAntarPulau'] ?></td>
            <td><a href=<?= site_url($link . '/' . $slt['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 