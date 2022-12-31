<?php
include('admin/db.php');
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Kelurahan Mentawir</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
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
            <h4 class="color-hijau-2">Tingkat Pendidikan</h4>
         </div>
         <div class="row col-md-12 m-auto text-center">
            <?php
            $x = mysqli_query($conn, "SELECT * FROM tingkat_pendidikan");
            if (mysqli_num_rows($x) > 0) {
               while ($p = mysqli_fetch_array($x)) {
            ?>
                  <table class="mt-5">
                     <tbody>
                        <tr>
                           <td>
                              <div class="display-2"><?php echo $p['tamat_s1'] ?></div><br>
                              <h6>Tamat S1</h6>
                           </td>
                           <td>
                              <div class="display-2"><?php echo $p['tamat_d1d3'] ?></div><br>
                              <h6>Tamat D1-D3</h6>
                           </td>
                           <td>
                              <div class="display-2"><?php echo $p['tamat_sma'] ?></div><br>
                              <h6>Tamat SMA</h6>
                           </td>
                           <td>
                              <div class="display-2"><?php echo $p['tamat_smp'] ?></div><br>
                              <h6>Tamat SMP</h6>
                           </td>
                           <td>
                              <div class="display-2"><?php echo $p['tamat_sd'] ?></div><br>
                              <h6>Tamat SD</h6>
                           </td>
                        </tr>
                     </tbody>
                  </table>
            <?php }
            } ?>
         </div>
         <div class="text-center mt-5 pt-5">
            <h4>Fasilitas Pendidikan</h4>
         </div>
         <div class="col-md-12 row g-3 mt-2">
            <div class="col-md-6 mt-5 color-hitam text-justify">
               <div class="card card-body col-md-12 shadow-sm pe-4 ps-4">
                  <h4 class="color-hijau-2">PAUD</h4>
                  <p>Pendidikan Anak Usia Dini Pelita Hati terletak di RT 3 Kelurahan Mentawir</p>
                  <div class="card card-body bg-light">
                     <h6>Lokasi</h6>
                     <p>Jl Benongan, RT 03, Kelurahan Mentawir</p>
                  </div>
                  <div class="card card-body mt-2 bg-light">
                     <h6>Bangunan</h6>
                     <img src="image/paud.jpeg">
                  </div>
               </div>
            </div>
            <div class="col-md-6 mt-5 color-hitam text-justify">
               <div class="card card-body col-md-12 shadow-sm pe-4 ps-4">
                  <h4 class="color-hijau-2">SD</h4>
                  <p>Sekolah Dasar Negeri 007 Sepaku merupakan satu-satunya SD yang ada di Kelurahan Mentawir
                  </p>
                  <div class="card card-body bg-light">
                     <h6>Lokasi</h6>
                     <p>Jl. Mulawarman, RT 02 Kelurahan Mentawir</p>
                  </div>
                  <div class="card card-body container mt-2 bg-light">
                     <h6>Bangunan</h6>
                     <img src="image/sd.jpg">
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