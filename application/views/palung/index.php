<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Kedalaman (m)</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $plg ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $plg['Nama'] ?></td>
            <td><?= $plg['Kedalaman'] ?></td>
            <td><?= 'Laut ' . $plg['LokasiLaut'] ?></td>
            <td><a href=<?= site_url($link . '/' . $plg['KodeLaut'] . '/' . $plg['Nama']);?> 
                class="btn btn-success">Detail</a></td>            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 