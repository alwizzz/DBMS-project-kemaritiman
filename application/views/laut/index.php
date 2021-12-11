<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Koordinat Astronomis</th>
        <th scope="col">Suhu Permukaan (Celcius)</th>
        <th scope="col">Luas (km persegi)</th>
        <th scope="col">Kedalaman Rerata (m)</th>
        <th scope="col">Kedalaman Maks (m)</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $laut ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $laut['Nama'] ?></td>
            <td><?= $laut['KoordinatAstronomis'] ?></td>
            <td><?= $laut['SuhuPermukaan'] ?></td>
            <td><?= $laut['Luas'] ?></td>
            <td><?= $laut['KedalamanRerata'] ?></td>
            <td><?= $laut['KedalamanMaks'] ?></td>
            <td><a href=<?= site_url($link . '/' . $laut['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>