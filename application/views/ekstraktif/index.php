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
        <?php $counter=1; foreach( $query as $eks ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $eks['Nama'] ?></td>
            <td><?= $eks['Klasifikasi'] ?></td>
            <td><?= $eks['UkuranRerata'] ?></td>
            <td><?= $eks['TangkapanTahunan'] ?></td>
            <td><a href=<?= site_url($link . '/' . $eks['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 