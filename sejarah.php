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
   <div class="container-fluid px-3 container artikel">
      <div class="row m-auto">
         <!-- sejarah kiri -->
         <div class="col-md-6 row">
            <div class="col-md-12 color-hijau-2 py-3">
               <div class="card bg-light">
                  <div class="card-body">
                     <h4>Sejarah</h4>
                  </div>
               </div>
            </div>
            <div class="col-md-12 py-3">
               <div class="card shadow-sm">
                  <div class="card-body">
                     Mentawir berasal dari kata Mentawar/Menawar yang berarti penawar untuk suatu penyakit yang pada waktu penjajahan Belanda mewabah sejenis penyakit cacar, dan air untuk mengobati penyakit tersebut berasal dari Mentawir I. (Tempadung Hambar) yang penduduknya adalah suku pasir balik.
                  </div>
               </div>
            </div>
            <div class="col-md-12 py-3">
               <div class="card shadow-sm">
                  <div class="card-body">Awal dari keberadaan Kelurahan Mentawir berasal dari terbentuknya pemerintahan kepala kampung yang bernama Demang Petinggi Daeng Pattara Marga Setya pada tahun 1910 dan pada pemerintahan Sultan Parikesit berubah nama menjadi Mentawir, yang wilayah kekuasaannya terbagi menjadi 2 bagian.</div>
               </div>
            </div>
         </div>
         <!-- end sejarah kiri -->
         <!-- sejarah kanan -->
         <div class="col-md-6 row">
            <div class="col-md-12 py-3">
               <div class="card shadow-sm">
                  <div class="card-body">Mentawir I terletak di Tempadung Hambar dan Mentawir II yang merupakan wilayah Kelurahan Mentawir yang sekarang
                  </div>
               </div>
            </div>
            <div class="col-md-12 py-3">
               <div class="card shadow-sm">
                  <div class="card-body">Pada masa Demang Pattara mayoritas penduduk suku Pasir Balik adalah penganut animisme yang menyembah patung dan salah satu bukti sejarahnya adanya patung berbentuk manusia yang ada di Payo Rai.
                  </div>
               </div>
            </div>
            <div class="col-md-12 py-3">
               <div class="card shadow-sm">
                  <div class="card-body">
                     Dan pada tahun 1920 seluruh masyarakat Pasir Balik yang berada di Kelurahan Mentawir berjumlah 83 orang berpindah ke agama islam. Yang menyebarkan agama islam di Mentawir adalah Suku Bugin Bone yang datang dari Kota Baru dan imamnya pada waktu itu adalah H. Abdul Gani
                  </div>
               </div>
            </div>
         </div>
         <!-- end sejarah kanan -->
         <!-- silsilah kepala desa -->
         <div class="mt-5 text-center color-hijau mb-5">
            <h4>Silsilah Kepala Kelurahan</h4>
         </div>
         <?php
         $x = mysqli_query($conn, "SELECT * FROM silsilah_kepala_kelurahan");
         if (mysqli_num_rows($x) > 0) {
            while ($p = mysqli_fetch_array($x)) {
         ?>
               <div class="col-md-2 m-auto">
                  <div class="card card-body p-4 shadow-sm text-center">
                     <img src="admin/foto_lurah/<?php echo $p['foto'] ?>" style="border-radius: 3px;" class="gambar-lurah">
                  </div>
                  <div class="card-body text-center mt-2">
                     <h6><?php echo $p['nama']; ?></h6>
                     <p>Kepala Kelurahan Periode<br><?php echo $p['periode']; ?></p>
                  </div>
               </div>

         <?php }
         } ?>
      </div>
   </div>
   <!-- end artikel -->
   <div style="height: 300px;"></div>
   <footer class="container-fluid">
      <div class="container">
         <div class="text-center p-4">
            &copy;<b>2022 - kelurahan Mentawir | Website By </b> Penajam 25 KKN48 Universitas Mulawarman
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