<div class="container">
    <h1><?= $title ?></h1>
    <h4>Lorem ipsum dolor sit amet</h4>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Luas (km persegi)</th>
        <th scope="col">Koordinat Astronomis</th>
        <th scope="col">Panjang Garis Pantai (km)</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $pl ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $pl['Nama'] ?></td>
            <td><?= $pl['Luas'] ?></td>
            <td><?= $pl['KoordinatAstronomis'] ?></td>
            <td><?= $pl['PanjangGarisPantai'] ?></td>
            <td><a href=<?= site_url($link . '/' . $pl['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 