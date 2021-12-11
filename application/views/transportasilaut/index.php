<div class="container">
    <h1><?= $title ?></h1>
    <h4>Lorem ipsum dolor sit amet</h4>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Kapal Yang Digunakan</th>
        <th scope="col">Waktu Berangkat</th>
        <th scope="col">Waktu Sampai</th>
        <th scope="col">Pelabuhan Asal</th>
        <th scope="col">Pelabuhan Tujuan</th>
        <th scope="col">Melewati</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $tl ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $tl['Kode'] ?></td>
            <td><?= $tl['NamaKapal'] ?></td>
            <td><?= $tl['JamBerangkat'] ?></td>
            <td><?= $tl['JamSampai'] ?></td>
            <td><?= $tl['NamaPelabuhanDari'] ?></td>
            <td><?= $tl['NamaPelabuhanKe'] ?></td>
            <td><?= 'Laut ' . $tl['NamaLaut'] ?></td>
            <td><a href=<?= site_url($link . '/' . $tl['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 