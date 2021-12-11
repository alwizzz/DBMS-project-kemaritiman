<div class="container">
    <br>
    <a class="btn btn-secondary" href=<?= site_url($link); ?> role="button">Kembali ke <?= $title ?></a>
    <br></br>
    <div class="col">
        <div class="row">
            <div class="col-md-10 col-12">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h3>Detail <?= $title; ?></h3></li>
                    <li class="list-group-item"><b>Nama:</b> <?= $query['Nama']; ?></li>
                    <li class="list-group-item"><b>Kode:</b> <?= $query['Kode']; ?></li>
                    <li class="list-group-item"><b>Cakupan:</b>
                        <ul>
                            <?php foreach( $mn_pulau as $pulau ) : ?>
                                <li>Pulau <?= $pulau['NamaPulau']; ?></li>
                            <?php endforeach; ?>    
                        </ul>
                    </li>
                    <?php if( !array_key_exists("", $n1_kk) ) : ?>
                        <li class="list-group-item"><b>Daftar Kota / Kabupaten:</b>
                            <ul>
                                <?php foreach( $n1_kk as $kk ) : ?>
                                    <li><?= $kk['JenisKK'] . ' ' . $kk['NamaKK']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if( !array_key_exists("", $n1_tl) ) : ?>
                        <li class="list-group-item"><b>Terdapat Taman Laut:</b> Ya</li>
                        <li class="list-group-item"><b>Taman Laut yang ada:</b>
                            <ul>
                                <?php foreach( $n1_tl as $tl ) : ?>
                                    <li><?= $tl['NamaTL']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Taman Laut:</b> Tidak</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>  