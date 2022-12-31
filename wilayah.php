<?php
include('admin/db.php');
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Kelurahan Mentawir</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
   <!-- Navbar -->
   <div class="container-fluid">
      <nav class="navbar navbar-expand-lg fixed-top px-2 py-0">
         <div class="container">
            <a class="navbar-brand" href="index.html"><img class="logo" src="image/logomentawir2.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-beranda" aria-controls="nav-beranda" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav-beranda">
               <ul class="navbar-nav me-auto mx-5">
                  <li class="nav-item dropdown mx-2">
                     <a class="nav-link wr-putih" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                        <li><a class="dropdown-item" href="wilayah.php">Wilayah</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown mx-2">
                     <a class="nav-link wr-putih" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="pendidikan.php">Pendidikan</a></li>
                        <li><a class="dropdown-item" href="kesehatan.php">Kesehatan</a></li>
                        <li><a class="dropdown-item" href="transparansi.php">Transparansi</a></li>
                        <li><a class="dropdown-item" href="demografi.php">Demografi</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown mx-2">
                     <a class="nav-link wr-putih" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Promosi
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="potensi.php">Potensi</a></li>
                        <li><a class="dropdown-item" href="wisata.php">Wisata</a></li>
                        <li><a class="dropdown-item" href="produk-desa.php">Produk Desa</a></li>
                     </ul>
                  </li>
                  <li class="nav-item mx-2">
                     <a class="nav-link wr-putih" href="lembaga.php">Lembaga</a>
                  </li>
                  <li class="nav-item mx-2">
                     <a class="nav-link wr-putih" href="galeri.php">Galeri</a>
                  </li>
                  <li class="nav-item mx-2">
                     <a class="nav-link wr-putih" href="kontak.php">Kontak</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </div>
   <!-- end navbar -->
   <!-- artikel -->
   <div class="container-fluid container">
      <div class="artikel card border-white color-hijau">
         <div class="card-body text-center">
            <h4 class="color-hijau">Wilayah</h4>
         </div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127652.98192520226!2d116.7094698864192!3d-1.0442496199309563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df6ca63e47ba1b9%3A0xeda1efa370cd2c52!2sMentawir%2C%20Kec.%20Sepaku%2C%20Kabupaten%20Penajam%20Paser%20Utara%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1656834916236!5m2!1sid!2sid" width="100%" height="500" style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
         </iframe>
         <div class="row col-md-12 m-auto text-center">
            <?php
            $x = mysqli_query($conn, "SELECT * FROM demografi");
            if (mysqli_num_rows($x) > 0) {
               while ($p = mysqli_fetch_array($x)) {
            ?>
                  <div class="col-md-3">
                     <div class="card border-0">
                        <div class="mt-5">
                           <div class="display-2"><strong><?php echo $p['luas_wilayah']; ?><span>ha</span></strong></div>
                        </div>
                        <h6>Luas Wilayah</h6>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card border-0">
                        <div class="mt-5">
                           <div class="display-2"><strong><?php echo $p['jumlah_penduduk']; ?></strong></div>
                        </div>
                        <h6>Jumlah Penduduk</h6>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card border-0">
                        <div class="mt-5">
                           <div class="display-2"><strong><?php echo $p['jumlah_rt']; ?></strong></div>
                        </div>
                        <h6>Jumlah RT</h6>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card border-0">
                        <div class="mt-5">
                           <div class="display-2"><strong><?php echo $p['jumlah_keluarga']; ?></strong></div>
                        </div>
                        <h6>Jumlah Keluarga</h6>
                     </div>
                  </div>
            <?php }
            } ?>
         </div>
         <div class="col-md-12 row g-3 mt-4">
            <div class="col-md-6 mt-5 color-hitam text-justify">
               <div class="col-md-12 pe-4 ps-4">
                  <p>Mentawir adalah salah satu kelurahan di Kecamatan Sepaku, Kabupaten Penajam Paser Utara, Provinsi Kalimantan Timur, Indonesia. Dengan menempuh waktu 2 jam melalui jalur darat dan 1 jam melalui jalur air dari kota Balikpapan. Daya tarik wisata alam menjadi yang utama di kelurahan ini seperti Kawasan teluk Balikpapan, hutan mangrove, arung jeram jeram, hutan bambu, dan pemandangan alam hutan tropisnya. Budaya suku paser dengan tarian ronggengnya dan keberadaan demang serta cerita asal-usul kata Mentawir juga menjadi daya tarik budaya disana. Selain itu juga hidangan hasil laut, sirup mangrove dan hasil kerajinan dari bambu bisa menjadi daya tarik yang bisa dinikmati dan dibawa pulang sebagai oleh-oleh atau souvenir.</p>
               </div>
            </div>
            <div class="col-md-6 mt-5 color-hitam text-justify">
               <div class="card card-body col-md-12 bg-light shadow-sm">
                  <h6>Topografi</h6>
                  <p>Kelurahan Mentawir memiliki topografi berbukit-bukit yang memisahkan RT 1 dan RT 2 dengan RT 3 dan RT 4</p>
               </div>
               <div class="col-md-12">
                  <div class="accordion" id="">
                     <div class="accordion-item mt-3 shadow-sm">
                        <h2 class="accordion-header" id="format-gambar">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kontak" aria-expanded="false" aria-controls="collapseOne">
                              <h6>Iklim</h6>
                           </button>
                        </h2>
                        <div id="kontak" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Merupakan daerah pesisir dengan iklim yang sejuk dengan suhu rata-rata antara 23 sampai 30 derajat celcius dan kelembaban rata-rata 50%-70% serta curah hujan mencapai 3000-3500 mm/tahun.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item mt-3 shadow-sm">
                        <h2 class="accordion-header" id="format-gambar">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              <h6>Wilayah Penduduk</h6>
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Luas Wilayah Kelurahan Mentawir adalah 20.222 hektar</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end artikel -->
   <div style="height: 200px;"></div>
   <footer>
      <div class="container-fluid">
         <div class="text-center p-4">
            &copy;<b>2022 - Kelurahan Mentawir | Website By </b> Penajam 25 KKN48 Universitas Mulawarman
         </div>
   </footer>
   </div>


   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script>
      $(function() {
         $(window).scroll(function() {
            if ($(window).scrollTop() <= 100) {
               $('.logo').removeClass('scroll_logo')
            } else {
               $('.logo').addClass('scroll_logo')
            }
         })
      });
      $(function() {
         $(window).scroll(function() {
            if ($(window).scrollTop() <= 100) {
               $('.navbar').removeClass('scroll_navbar')
            } else {
               $('.navbar').addClass('scroll_navbar')
            }
         })
      });
      $(function() {
         $(window).scroll(function() {
            if ($(window).scrollTop() <= 100) {
               $('.navbar .wr-putih').removeClass('scroll_wr-putih')
            } else {
               $('.navbar .wr-putih').addClass('scroll_wr-putih')
            }
         })
      });
   </script>
</body>

</html>