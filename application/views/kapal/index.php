<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $kpl ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $kpl['Nama'] ?></td>
            <td><?= $kpl['Jenis'] ?></td>
            <td><a href=<?= site_url($link . '/' . $kpl['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 