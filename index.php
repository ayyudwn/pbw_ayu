<?php
include "koneksi.php";
// Memulai session untuk menyimpan preferensi mode

// Memulai session untuk menyimpan preferensi mode
session_start();

// Tentukan mode default jika tidak ada di session
$mode = isset($_SESSION['mode']) ? $_SESSION['mode'] : 'light';

// Tangkap permintaan perubahan mode
if (isset($_GET['toggle_mode'])) {
    $mode = ($mode === 'light') ? 'dark' : 'light';
    $_SESSION['mode'] = $mode; // Simpan mode ke session
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?')); // Hindari refresh URL dengan query string
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>daily journal</title>

    <!-- Link Botstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="icon" href="img/decul.jpeg" />
    <style>
        /* Style umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        /* Light Mode */
        body.light {
            background-color: #ffffff;
            color: #000000;
        }

        .light .btn {
            background-color: #f0f0f0;
            color: #000000;
        }

        /* Dark Mode */
        body.dark {
            background-color: #121212;
            color: #ffffff;
        }

        .dark .btn {
            background-color: #333333;
            color: #ffffff;
        }
    </style>
  </head>
  <body class="<?php echo $mode; ?>">
    <!-- Navabar - Start -->
    <nav class="navbar navbar-expand-lg bg-success-subtle sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Daily Journal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="#"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active text-dark"
                aria-current="page"
                href="#article"
                >Article</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active text-dark"
                aria-current="page"
                href="#gallery"
                >Gallery</a
              >
            </li>
            <!--tambahan untuk jadwal -->
            <li class="nav-item">
              <a
                class="nav-link active text-dark"
                aria-current="page"
                href="#Schedule"
                >Schedule</a
              >
            </li>
            <!-- tambahan untuk profile  -->
            <li class="nav-item">
              <a
                class="nav-link active text-dark"
                aria-current="page"
                href="#Profile"
                >About Me</a
              >
            </li>
            <!-- tambahan untuk login -->
            <div class="d-flex">
            <a href="?toggle_mode=1" class="btn btn-toggle">
                    <?php if ($mode === 'light'): ?>
                        <i class="bi bi-moon-fill text-dark"></i>
                    <?php else: ?>
                        <i class="bi bi-brightness-high-fill text-light"></i>
                    <?php endif; ?>
                </a>
                <a href="logout.php" class="btn btn-danger ms-2">Logout</a>
        </div>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        
    </div>
    <!-- Navbar - End -->

    <!-- Section Home - Start -->
    <section
      id="hero"
      class="text-center p-5 bg-success-subtle text-sm-start rounded-4 m-2"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-6 hero-text">
            <h1>Destinasi Wisata</h1>
            <p>
              Rekomendasi Wisata Alam Indonesia
            </p>
          </div>
          <div class="col-lg-5 col-md-6 hero-img p-5">
            <img src="img/20241231194126.png" alt="Memory Image" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!-- Section Home - End -->

    <!-- Section Article - Start -->
    <!-- <section id="article" class="text-center p-5 rounded-4 m-2">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Article</h1>
      </div>
      <div class="row row-cols-4 row-cols-md-4 g-5 justify-content-center">
        <div class="col">
          <div class="card h-100">
            <img src="img/mu-6.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Manchester United</h5>
              <p class="card-text">
                Sejarah dan Perjalanan Klub Legendaris Manchester United
                Football Club, yang akrab disebut sebagai Manchester United atau
                hanya MU, adalah salah satu klub sepak bola paling terkenal dan
                sukses di dunia. Klub yang bermarkas di Old Trafford,
                Manchester, Inggris ini memiliki sejarah panjang yang penuh
                prestasi dan tantangan.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary"
                >last update 10 years ago</small
              >
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/mu-6.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Dominasi di Era Sir Alex Ferguson</h5>
              <p class="card-text">
                Sir Alex Ferguson adalah sosok yang membawa Manchester United ke
                puncak kejayaan modern. Di bawah kepemimpinannya, klub
                memenangkan 13 gelar Liga Inggris, 2 trofi Liga Champions, dan
                berbagai penghargaan lainnya. Ferguson juga dikenal karena
                kemampuannya mengembangkan pemain muda seperti Ryan Giggs, Paul
                Scholes, hingga generasi "Class of '92."
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">last update 2 years ago</small>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/mu-7.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Visi Masa Depan Manchester United</h5>
              <p class="card-text">
                Visi Masa Depan Meski tantangan terus berdatangan, Manchester
                United tetap berusaha untuk kembali ke puncak. Dengan kombinasi
                pemain muda berbakat, bintang internasional, dan strategi yang
                tepat, klub ini memiliki potensi untuk terus bersinar di
                panggung sepak bola global.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">last update 3 years ago</small>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/mu-8.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Perjalana Pasca era Ferguson</h5>
              <p class="card-text">
                Perjalanan Pasca-Ferguson Setelah pensiunnya Ferguson pada tahun
                2013, Manchester United mengalami masa transisi yang penuh
                tantangan. Pergantian beberapa manajer, termasuk David Moyes,
                Louis van Gaal, dan Jose Mourinho, menunjukkan betapa sulitnya
                mempertahankan konsistensi. Meskipun begitu, klub tetap berhasil
                meraih sejumlah trofi, seperti Liga Europa dan Piala FA.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">last update 1 years ago</small>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
      <div class="container">
      <h1 class="fw-bold display-4 pb-3">ARTICLE</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM articles ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        while($row = $hasil->fetch_assoc()){
        ?>
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]?></h5>
                <p class="card-text">
                  <?= $row["isi"]?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"]?>
                </small>
              </div>
            </div>
          </div>
          <?php
        }
        ?> 
      </div>
    </div>
    </section>
<!-- article end -->
    <!-- Section Article - End -->

    <!-- Section Schedule - Start -->
    <section id="Schedule" class="text-center p-4 rounded-4 m-2">
      <div class="container">
        <h1 class="Schedule" class="fw-bold-4 pb-3">
          Jadwal Kuliah & Kegiatan Mahasiswa
        </h1>
        <div class="row row-cols-4 row-cols-md-4 g-5 start-end">
          <div class="col">
            <div
              class="card h-100 border-primary mb-3"
              style="max-width: 18rem"
            >
              <div class="card-header bg-primary">Senin</div>
              <div class="card-body text-dark">
                <h5 class="card-title">10.20 - 12.00</h5>
                <p class="card-text">
                  Basis Data <br />
                  ruang H.5.14
                </p>
                <h5 class="card-title">12.30 - 15.00</h5>
                <p class="card-text">
                  Sistem Informasi <br />
                  ruang H.4.5
                </p>
                <h5 class="card-title">15.30 - 18.00</h5>
                <p class="card-text">
                  Logika Informatika <br />
                  ruang H.4.7
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 mb-3" style="max-width: 18rem">
              <div class="card-header bg-secondary">Selasa</div>
              <div class="card-body text-dark">
                <h5 class="card-title">07.00 - 09.30</h5>
                <p class="card-text">
                  Probabilitas dan Statistika<br />
                  Ruang H.3.8
                </p>
                <h5 class="card-title">10.20 - 12.00 </h5>
                <p class="card-text">
                  Basis Data<br />
                  Ruang D.3.M
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div
              class="card h-100 border-success mb-3"
              style="max-width: 18rem"
            >
              <div class="card-header bg-success">Rabu</div>
              <div class="card-body text-dark">
                <h5 class="card-title">08.40 - 10.20</h5>
                <p class="card-text">
                  Pemrograman berbasis Web <br />
                  ruangan D.2.j
                </p>
                <h5 class="card-title">12.30 - 15.00</h5>
                <p class="card-text">
                    Rekayasa Perangkat Lunak <br />
                  ruangan H.4.4
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-danger mb-3" style="max-width: 18rem">
              <div class="card-header bg-danger">Kamis</div>
              <div class="card-body text-dark">
                <h5 class="card-title">15.30 - 18.00</h5>
                <p class="card-text">
                  Sistem Operaasi<br />
                  ruang H.4.10
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div
              class="card h-100 border-warning mb-3"
              style="max-width: 18rem"
            >
              <div class="card-header bg-warning">Jumat</div>
              <div class="card-body text-dark">
                <h5 class="card-title">12.30 - 15.00</h5>
                <p class="card-text">
                  Kecerdasan Buatan <br />
                  ruang H.4.5
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-info mb-3" style="max-width: 18rem">
              <div class="card-header bg-info">sabtu</div>
              <div class="card-body text-dark">
                <h5 class="card-title">08:00 - 10:00</h5>
                <p class="card-text">Bimbingan karir online</p>
                <h5 class="card-title">08:00 - 10:00</h5>
                <p class="card-text">Bimbingan karir online</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-dark mb-3" style="max-width: 18rem">
              <div class="card-header bg-dark text-light">Minggu</div>
              <div class="card-body text-kight">
                <h5 class="card-title">TIDAK ADA JADWAL</h5>
                <p class="card-text">tidak ada jadwal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Schedule - End -->

    <!-- Section About Me - Start -->
    <section id="Profile" class="p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 text-center">Profile Mahasiswa</h1>
        <div class="row justify-content-center align-items-center">
          <div class="col-md-3 text-center">
            <img
              src="img/ayu.jpg"
              alt=""
              class="rounded-circle m-3"
              width="300"
            />
          </div>
          <div class="col-md-5">
            <div class="">
              <h4 class="text-center pb-3">Suryani Ayu  Dewanti</h4>
              <h5 class="text-center text-secondary">
                Mahasiswa Teknik Informatika
              </h5>
            </div>
            <div class="mt-3 text-center">
              <tr>
                <td><b>NIM</b> :</td>
                <td>A11.2023.15018</td>
              </tr>
              <br />
              <tr>
                <td><b>Program Studi</b> : Teknik Informatika</td>
              </tr>
              <br />
              <tr>
                <td><b>Email</b> : suryaniayud@gmail.com</td>
              </tr>
              <br />
              <tr>
                <td><b>Telepon</b> : 0895806729687</td>
              </tr>
              <br />
              <tr>
                <td><b>Alamat</b> : Kecamatan Mijen</td>
              </tr>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section About Me - End -->

    <!-- Section Gallery - Start -->
     
   <?php
// Fungsi untuk menampilkan galeri dari database
function tampilkanGaleri() {
    // Konfigurasi koneksi database
    $host = 'localhost';
    $user = 'root';
    $password = ''; // Ganti dengan password database Anda
    $database = 'daily';

    // Membuat koneksi ke database
    $conn = new mysqli($host, $user, $password, $database);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data artikel
    $sql = "SELECT gambar FROM article";
    $result = $conn->query($sql);

    // Memulai HTML galeri
    echo '<section id="gallery" class="text-center p-5 bg-success-subtle rounded-4 m-4">';
    echo '  <div class="container">';
    echo '    <h1 class="fw-bold display-4 pb-3">Gallery</h1>';
    echo '  </div>';
    echo '  <div id="carouselExample" class="carousel slide">';
    echo '    <div class="carousel-inner">';

    // Menampilkan setiap gambar sebagai item carousel
    if ($result->num_rows > 0) {
        $isActive = true;
        while ($row = $result->fetch_assoc()) {
            $activeClass = $isActive ? 'active' : '';
            echo '      <div class="carousel-item ' . $activeClass . '">';
            echo '        <img src="img/' . htmlspecialchars($row['gambar']) . '" class="d-block w-100" alt="..." />';
            echo '      </div>';
            $isActive = false;
        }
    } else {
        echo '<p>Tidak ada gambar untuk ditampilkan.</p>';
    }

    // Menutup HTML galeri
    echo '    </div>';
    echo '    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">';
    echo '      <span class="carousel-control-prev-icon" aria-hidden="true"></span>';
    echo '      <span class="visually-hidden">Previous</span>';
    echo '    </button>';
    echo '    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">';
    echo '      <span class="carousel-control-next-icon" aria-hidden="true"></span>';
    echo '      <span class="visually-hidden">Next</span>';
    echo '    </button>';
    echo '  </div>';
    echo '</section>';

    // Menutup koneksi
    $conn->close();
}

// Panggil fungsi untuk menampilkan galeri
tampilkanGaleri();
?>

    <!-- Section Gallery - End -->

    <!-- Footer - Start -->
    <footer class="text-center p-5">
      <div>
        <i class="bi bi-whatsapp h2 p-2 text-dark"></i>
        <i class="bi bi-twitter h2 p-2 text-dark"></i>
        <i class="bi bi-instagram h2 p-2 text-dark"></i>
      </div>
      <div>Suryani Ayu Dewanti<i class="bi bi-c-circle"></i> 2024</div>
    </footer>
    <!-- Footer - End -->

    <!-- Link JS Bootstrap -->
    <script>
        // Fungsi untuk mengubah mode
        function changeMode(mode) {
            window.location.href = "?mode=" + mode;
        }
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const body = document.body;
    const darkModeBtn = document.getElementById('dark-mode-btn');
    const lightModeBtn = document.getElementById('light-mode-btn');
    const navbar = document.getElementById('navbar');

    // Set theme from localStorage
    document.addEventListener('DOMContentLoaded', () => {
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-mode');
            navbar.classList.add('bg-dark', 'navbar-dark');
            navbar.classList.remove('bg-light', 'navbar-light');
        }
    });

    darkModeBtn.addEventListener('click', () => {
        body.classList.add('dark-mode');
        navbar.classList.add('bg-dark', 'navbar-dark');
        navbar.classList.remove('bg-light', 'navbar-light');
        localStorage.setItem('theme', 'dark');
    });

    lightModeBtn.addEventListener('click', () => {
        body.classList.remove('dark-mode');
        navbar.classList.add('bg-light', 'navbar-light');
        navbar.classList.remove('bg-dark', 'navbar-dark');
        localStorage.setItem('theme', 'light');
    });
  </script>
  </body>
</html>
