<div class="container">
    <h1><?= $title ?></h1>
    <h4>Lorem ipsum dolor sit amet</h4>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Klasifikasi</th>
        <th scope="col">Ukuran rerata (cm)</th>
        <th scope="col">Tangkapan tahunan (ton)</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $obw ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $obw['Nama'] ?></td>
            <td><?= $obw['Klasifikasi'] ?></td>
            <td><?= $obw['UkuranRerata'] ?></td>
            <td><?= $obw['TangkapanTahunan'] ?></td>
            <td><a href=<?= site_url($link . '/' . $obw['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 