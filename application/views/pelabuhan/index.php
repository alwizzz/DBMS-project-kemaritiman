<div class="container">
    <h1><?= $title ?></h1>

    <table class="table table-stripped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis</th>
        <th scope="col">Letak Administratif</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; foreach( $query as $plb ) :?>
            <tr>
            <th scope="row"><?= $counter++ ?></th>
            <td><?= $plb['Nama'] ?></td>
            <td><?= 'Pelabuhan ' . $plb['Jenis'] ?></td>
            <td><?= 'Kecamatan ' . $plb['Kecamatan'] . ', ' . $plb['JenisKK'] . ' ' . $plb['NamaKotaKab'] ?></td>
            <td><a href=<?= site_url($link . '/' . $plb['Kode']);?> class="btn btn-success">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div> 