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
<style>
   .huruf-kecil {
      font-size: 13px;
   }
</style>

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
   <div class="container-fluid mb-4">
      <div class="container artikel color-hijau-2 bg-secondary bg-opacity-10 ps-4 p-2 g-3">
         <h5>Lembaga Pemerintahan</h5>
      </div>
   </div>
   <div class="container-fluid px-3 container artikel">
      <div class="col-md-12 color-hijau-2 text-center mb-2 mt-2">
         <h4>Pemerintah Kelurahan Mentawir</h4>
      </div>
      <div class="row g-3 text-center">
         <!-- sejarah kiri -->
         <div class="col-md-12 row g-3">
            <div class="border-bottom col-md-12 row g-3 pb-5">
               <div class="col-md-6 p-3 mb-3">
                  <div class="card-body text-left m-3">
                     <h5 class="color-hijau-2">Visi</h5>
                     <p>Terwujudnya masyarakat Kelurahan Mentawir yang mandiri, sejahtera, mampu memenuhi kebutuhan hidup secara layak yang bertumpu pada bidang pertanian dan perkebunan</p>
                  </div>
               </div>
               <div class="col-md-6 p-3 mb-3">
                  <div class="card-body text-left m-3">
                     <h5 class="color-hijau-2">Misi</h5>
                     <p>
                     <ul>
                        <li>
                           Meningkatkan kinerja aparatur kelurahan untuk selalu dapat memberikan pelayanan yang prima kepada masyarakat
                        </li>
                        <li>
                           membangun sistem pemerintahan yang bersih serta berorientasi pada pelayanan publik
                        </li>
                        <li>meningkatkan peran serta masyarakat dalam pembangunan</li>
                        <li>meningkatkan sumber pendapatan dengan pemanfaatan SDA secara optimal</li>
                        <li>mengembangkan solidaritas antar tokoh masyarakat dan semua komponen masyarakat untuk membangun kelurahan yang berlandaskan moral serta menjunjung tinggi nilai-nilai adat istiadat</li>
                        <li>menciptakan situasi yang aman, tertib, nyaman dan kondusif</li>
                     </ul>
                     </p>
                  </div>
               </div>

               <?php
               $x = mysqli_query($conn, "SELECT * FROM lembaga_pemerintahan WHERE jabatan = 'Lurah' OR 'lurah' OR 'Kepala Kelurahan'");
               if (mysqli_num_rows($x) > 0) {
                  while ($p = mysqli_fetch_array($x)) {
               ?>
                     <div class="col-md-2">
                        <div class="card card-body p-2 shadow-sm">
                           <h5><?php echo $p['jabatan']; ?></h5>
                           <img src="admin/foto_pegawai/<?php echo $p['foto'] ?>" style="border-radius: 3px;">
                           <p><?php echo $p['nama'] ?></p>
                        </div>
                     </div>
               <?php }
               } ?>
               <?php
               $x = mysqli_query($conn, "SELECT * FROM lembaga_pemerintahan WHERE jabatan NOT LIKE 'lurah' OR 'kepala kelurahan'");
               if (mysqli_num_rows($x) > 0) {
                  while ($p = mysqli_fetch_array($x)) {
               ?>
                     <div class="col-md-2">
                        <div class="card card-body p-2 shadow-sm">
                           <h6><?php echo $p['jabatan']; ?></h6>
                           <img src="admin/foto_pegawai/<?php echo $p['foto'] ?>" style="border-radius: 3px;">
                           <p class="huruf-kecil"><?php echo $p['nama'] ?></p>
                        </div>
                     </div>
               <?php }
               } ?>
            </div>
            <div class="col-md-12 mt-3 pt-5">
               <div class="text-center color-hijau-2">
                  <h4>Lembaga Kemasyarakatan Tingkat Kelurahan</h4>
               </div>
            </div>
            <div class="col-md-4 p-3">
               <div class="card-body text-left m-3">
                  <h5 class="color-hijau-2">PKK</h5>
                  <p>Pemberdayaan Kesejahteraan Keluarga disingkat PKK adalah organisasi kemasyarakatan yang memberdayakan wanita turut berpartisipasi dalam pembangunan Kelurahan Mentawir.</p>
               </div>
            </div>
            <div class="col-md-4 p-3">
               <div class="card-body text-left m-3">
                  <h5 class="color-hijau-2">Karang Taruna</h5>
                  <p>Tugas Pokok Karang Taruna secara bersama-sama dengan pemerintahan dan komponen masyarakat lainnya untuk menanggulangi berbagai masalah Kesejahteraan sosial terutama yang dihadapi generasi muda baik yang bersifat prefentif, rehabilitatif maupun pengembangan potensi generasi muda dilingkungannya</p>
               </div>
            </div>
            <div class="col-md-4 p-3">
               <div class="card-body text-left m-3">
                  <h5 class="color-hijau-2">LPM</h5>
                  <p>Lembaga Pemberdayaan Masyarakat atau yang disingkat LPM adalah salah satu lembaga kemasyarakatan yang berada di desa. LPM mempunyai tugas menyusun rencana pembangunan secara partisipatif, menggerakkan swadaya gotong royong masyarakat, melaksanakan dan mengendalikan pembangunan</p>
               </div>
            </div>
            <div class="col-md-4 p-3">
               <div class="card-body text-left m-3">
                  <h5 class="color-hijau-2">POKDARWIS</h5>
                  <p>Kelompok Sadar Wisata atau disingkat POKDARWIS merupakan kelompok swadaya dan swakarsa yang tumbuh dari, oleh dan untuk masyarakat serta bertujuan untuk meningkatkan pengembangan pariwisata desa dan mensukseskan pembangunan pariwisata di Kelurahan Mentawir</p>
               </div>
            </div>
            <div class="col-md-4 p-3">
               <div class="card-body text-left m-3">
                  <h5 class="color-hijau-2">POKDAKAN</h5>
                  <p>Pokdakan atau Kelompok Pembudidaya Ikan adalah kumpulan pembudidaya ikan yang terletak di RT 04 Kelurahan Mentawir yang terbentuk dan tumbuh atas dasar adanya kepentingan bersama dengan rasa saling percaya, keserasian dan keakraban untuk bekerjasama dalam rangka memanfaatkan sumberdaya, mengembangkan usaha, dana, untuk meningkatkan kesejahteraan anggotanya.</p>
               </div>
            </div>
         </div>
         <!-- end lembaga kemasyarakatan -->
      </div>
   </div>
   <!-- end artikel -->

   <div class="height-150"></div>
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
            if ($(window).scrollTop() <= 200) {
               $('.navbar .wr-putih').removeClass('scroll_wr-putih')
            } else {
               $('.navbar .wr-putih').addClass('scroll_wr-putih')
            }
         })
      });
   </script>
</body>

</html>