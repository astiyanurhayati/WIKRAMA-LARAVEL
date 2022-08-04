<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wikrama | {{ $title }}</title>
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  </head>
  <body>
    @include('properti.navbar')
    <main>
        <div class="container">
            @yield('container')
        </div>
    </main>

    <footer>
      <div class="flogo">
        <img src="img/logo-big.png" alt="wikrama logo" />
      </div>
      <div class="footer-container">
        <div class="footer-content">
          <span>Tentang Wikrama</span>
          <ul>
            <li>
              <a href="/sejarah"><i class="fa-solid fa-angle-right"></i> Sejarah</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Jurusan</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Matrikulasi</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Perpustakaan</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Ekstrakulikuler</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Fasilitas</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Galeri</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Kerjasama</a>
            </li>
          </ul>
        </div>
        <div class="footer-content">
          <span>Alamat</span>
          <ul>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Jl. Raya Wangun Kelurahan Sindangsari Bogor Timur 16720</a>
            </li>
          </ul>
          <span>Telephone</span>
          <ul>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> 0251-8242411 / 082221718035(Whatsapp)</a>
            </li>
          </ul>
        </div>
        <div class="footer-content">
          <span>Sosial Media</span>
          <ul>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Instagram: @smkwikrama</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Email: prohumasi@smkwikrama.sch.id</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Twitter : SMK Wikama</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Facebook : SMK Wikrama Bogor</a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i> Multimedia Wikrama</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="cw">© 2022-Siti Astiya Nurhayati</div>
    </footer>
  </body>
  <script src="js/home.js"></script>
</html>
