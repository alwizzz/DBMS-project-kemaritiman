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
                    <li class="list-group-item"><b>Jenis:</b> <?= $query['Jenis']; ?></li>
                    <li class="list-group-item"><b>Provinsi:</b> <?= $query['NamaProvinsi']; ?></li>
                    <?php if( !array_key_exists("", $n1_pb) ) : ?>
                        <li class="list-group-item"><b>Terdapat Pelabuhan:</b> Ya</li>
                        <li class="list-group-item"><b>Pelabuhan yang ada:</b>
                            <ul>
                                <?php foreach( $n1_pb as $pb ) : ?>
                                    <li><?= $pb['NamaPB']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Pelabuhan:</b> Tidak</li>
                    <?php endif; ?>
                    <?php if( !array_key_exists("", $n1_pnt) ) : ?>
                        <li class="list-group-item"><b>Terdapat Pantai:</b> Ya</li>
                        <li class="list-group-item"><b>Pantai yang ada:</b>
                            <ul>
                                <?php foreach( $n1_pnt as $pnt ) : ?>
                                    <li>Pantai <?= $pnt['NamaPantai']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Pantai:</b> Tidak</li>
                    <?php endif; ?>
                    <?php if( !array_key_exists("", $n1_hm) ) : ?>
                        <li class="list-group-item"><b>Terdapat Hutan Mangrove:</b> Ya</li>
                        <li class="list-group-item"><b>Hutan Mangrove yang ada:</b>
                            <ul>
                                <?php foreach( $n1_hm as $hm ) : ?>
                                    <li>Hutan Mangrove <?= $hm['NamaHM']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Hutan Mangrove:</b> Tidak</li>
                    <?php endif; ?>
                    <?php if( !array_key_exists("", $n1_tpi) ) : ?>
                        <li class="list-group-item"><b>Terdapat Tempat Pelelangan Ikan:</b> Ya</li>
                        <li class="list-group-item"><b>Tempat Pelelangan Ikan yang ada:</b>
                            <ul>
                                <?php foreach( $n1_tpi as $tpi ) : ?>
                                    <li>TPI <?= $tpi['NamaTPI']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Tempat Pelelangan Ikan:</b> Tidak</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>