<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?= $title ?></title>
  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href=<?= site_url(); ?>>One Stop Service Kemaritiman</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kemaritiman
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href=<?= site_url('Laut'); ?>>Laut</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('Teluk'); ?>>Teluk</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('Selat'); ?>>Selat</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('Palung'); ?>>Palung</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('Pantai'); ?>>Pantai</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('GunungLaut'); ?>>Gunung Laut</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('Pulau'); ?>>Pulau</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('Provinsi'); ?>>Provinsi</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('KotaKabupaten'); ?>>Kota / Kabupaten</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('HutanMangrove'); ?>>Hutan Mangrove</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pelayaran
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href=<?= site_url('Pelabuhan'); ?>>Pelabuhan</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('TransportasiLaut'); ?>>Transportasi Laut</a></li>
                        <li><a class="dropdown-item" href=<?= site_url('Kapal'); ?>>Kapal</a></li>
                    </ul>
                    </li>
                  </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Perikanan
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href=<?= site_url('Ekstraktif'); ?>>Ekstraktif</a></li>
                          <li><a class="dropdown-item" href=<?= site_url('AktivitasPenangkapanIkan'); ?>>Aktivitas Penangkapan Ikan</a></li>
                      </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Penambangan Laut
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href=<?= site_url('Mineral'); ?>>Mineral</a></li>
                          <li><a class="dropdown-item" href=<?= site_url('PenambanganBawahLaut'); ?>>Penambangan Bawah Laut</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Wisata Laut
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href=<?= site_url('ObjekWisata'); ?>>Objek Wisata</a></li>
                            <li><a class="dropdown-item" href=<?= site_url('TamanLaut'); ?>>Taman Laut</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
