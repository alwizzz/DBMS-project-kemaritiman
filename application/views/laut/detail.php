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
                    <li class="list-group-item"><b>Koordinat Astronomis:</b> <?= $query['KoordinatAstronomis']; ?></li>
                    <li class="list-group-item"><b>Suhu Permukaan:</b> <?= $query['SuhuPermukaan'] . " derajat Celcius"; ?></li>
                    <li class="list-group-item"><b>Luas:</b> <?= $query['Luas'] . " km persegi"; ?></li>
                    <li class="list-group-item"><b>Kedalaman Rerata:</b> <?= $query['KedalamanRerata'] . " m"; ?></li>
                    <li class="list-group-item"><b>Kedalaman Maksimum:</b> <?= $query['KedalamanMaks'] . " m"; ?></li>
                    <li class="list-group-item"><b>Letak Geografis:</b>
                        <ul>
                            <li>Batas Utara: <?= $query['BatasUtara']; ?></li>
                            <li>Batas Selatan: <?= $query['BatasSelatan']; ?></li>
                            <li>Batas Timur: <?= $query['BatasTimur']; ?></li>
                            <li>Batas Barat: <?= $query['BatasBarat']; ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item"><b>Hewan yang dapat ditemukan:</b>
                        <ul>
                            <?php foreach( $mn_eks as $eks ) : ?>
                                <li><?= $eks['NamaEkstraktif']; ?></li>
                            <?php endforeach; ?>    
                        </ul>
                    </li>
                    <li class="list-group-item"><b>Mineral yang dapat ditemukan:</b>
                        <ul>
                            <?php foreach( $mn_mrl as $mrl ) : ?>
                                <li><?= $mrl['NamaMineral']; ?></li>
                            <?php endforeach; ?>    
                        </ul> 
                    </li>
                    <?php if( !array_key_exists("", $n1_api) ) : ?>
                        <li class="list-group-item"><b>Terdapat Aktivitas Penangkapan Ikan:</b> Ya</li>
                        <li class="list-group-item"><b>Kode Aktivitas Penangkapan Ikan:</b>
                            <ul>
                                <?php foreach( $n1_api as $api ) : ?>
                                    <li><?= $api['KodeAPI']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Aktivitas Penangkapan Ikan:</b> Tidak</li>
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
                    <?php if( !array_key_exists("", $n1_gn) ) : ?>
                        <li class="list-group-item"><b>Terdapat Gunung Laut:</b> Ya</li>
                        <li class="list-group-item"><b>Gunung Laut yang ada:</b>
                            <ul>
                                <?php foreach( $n1_gn as $gn ) : ?>
                                    <li>Gunung <?= $gn['NamaGN']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Gunung Laut:</b> Tidak</li>
                    <?php endif; ?>
                    <?php if( !array_key_exists("", $n1_plg) ) : ?>
                        <li class="list-group-item"><b>Terdapat Palung:</b> Ya</li>
                        <li class="list-group-item"><b>Palung yang ada:</b>
                            <ul>
                                <?php foreach( $n1_plg as $plg ) : ?>
                                    <li>Palung <?= $plg['NamaPalung']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Palung:</b> Tidak</li>
                    <?php endif; ?>
                    <?php if( !array_key_exists("", $n1_trans) ) : ?>
                        <li class="list-group-item"><b>Terdapat Aktivitas Transportasi Laut:</b> Ya</li>
                        <li class="list-group-item"><b>Kode Transportasi Laut:</b>
                            <ul>
                                <?php foreach( $n1_trans as $trans ) : ?>
                                    <li><?= $trans['KodeTrans']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Aktivitas Transportasi Laut:</b> Tidak</li>
                    <?php endif; ?>
                    <?php if( !array_key_exists("", $n1_pbl) ) : ?>
                        <li class="list-group-item"><b>Terdapat Penambangan Bawah Laut:</b> Ya</li>
                        <li class="list-group-item"><b>Kode Penambangan Bawah Laut:</b>
                            <ul>
                                <?php foreach( $n1_pbl as $pbl ) : ?>
                                    <li><?= $pbl['KodePBL']; ?></li>
                                <?php endforeach; ?>    
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="list-group-item"><b>Terdapat Penambangan Bawah Laut:</b> Tidak</li>
                    <?php endif; ?>                   
                </ul>
            </div>
        </div>
    </div>
</div>
