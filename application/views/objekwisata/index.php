<div class="container">
    <h1>Objek Wisata</h1>
    <h4>Lorem ipsum dolor sit amet</h4>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Kegiatan Wisata</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $obw ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $obw['Nama'] ?></td>
            <td><?= $obw['KegiatanWisata'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>