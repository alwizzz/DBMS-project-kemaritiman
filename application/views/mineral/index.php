<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Deposit</th>
        <th scope="col">Kedalaman (m)</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $mrl ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $mrl['Nama'] ?></td>
            <td><?= $mrl['Deposit'] ?></td>
            <td><?= $mrl['Kedalaman'] ?></td>
            <td><a href=<?= site_url($link . '/' . $mrl['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 