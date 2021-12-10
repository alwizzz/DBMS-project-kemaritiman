<div class="container">
    <h1><?= $title ?></h1>
    <h4>Lorem ipsum dolor sit amet</h4>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Status</th>
        <th scope="col">Kedalaman (m)</th>
        <th scope="col">Koordinat Astronomis</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $gl ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $gl['Nama'] ?></td>
            <td><?= $gl['Status'] ?></td>
            <td><?= $gl['Kedalaman'] ?></td>
            <td><?= $gl['KoordinatAstronomis'] ?></td>
            <td><?= 'Laut ' . $gl['LokasiLaut'] ?></td>
            <td><a href=<?= site_url($link . '/' . $gl['KodeLaut'] . '/' . $gl['Nama']);?> 
                class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 