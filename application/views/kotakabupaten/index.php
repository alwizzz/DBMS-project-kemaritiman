<div class="container">
    <h1><?= $title ?></h1>
    <h4>Lorem ipsum dolor sit amet</h4>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis</th>
        <th scope="col">Provinsi</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $obw ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $obw['Nama'] ?></td>
            <td><?= $obw['Jenis'] ?></td>
            <td><?= $obw['NamaProvinsi'] ?></td>
            <td><a href=<?= site_url($link . '/' . $obw['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 