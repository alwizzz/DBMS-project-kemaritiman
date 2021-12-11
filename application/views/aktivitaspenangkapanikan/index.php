<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Tanggal Mulai</th>
        <th scope="col">Tanggal Selesai</th>
        <th scope="col">Lokasi Penangkapan</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $api ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $api['Kode'] ?></td>
            <td><?= $api['TanggalBerangkat'] ?></td>
            <td><?= $api['TanggalPulang'] ?></td>
            <td>Laut <?= $api['NamaLaut'] ?></td>
            <td><a href=<?= site_url($link . '/' . $api['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 