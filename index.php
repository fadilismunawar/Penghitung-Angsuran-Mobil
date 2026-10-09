<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sahabat Mobil Kita</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --main-color: #f8f9fa;
      --secondary-color: #faf6f0;
      --white-color: #ffffff;
      --primary-pastel: #0d6efd;
      --wood-accent: #ff6b00;
      --text-main: #283243;
    }

    html {
      scroll-behavior: smooth;
    }

    section {
      scroll-margin-top: 160px;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--main-color);
    }

    .navigasi {
      background-color: var(--main-color);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
    }
    
    .logoku {
      height: 100px;
      width: auto;
    }
    
    .tombol{
      background-color: var(--wood-accent);
      color: #ffffff;
      border: none;
      cursor: pointer;
    }
    
    .tombol:hover{
      background-color: #e05e00;
      color: #ffffff;
      transition: 0.5s;
    }
    
    .nav-link {
      font-weight: 500;
      color: #3E2723;
    }
    
    .nav-item{
      padding-bottom: 3px;
      border-bottom: 2px solid transparent;
      color: var(--text-main);
      cursor: pointer;
      font-size: 20px;
      transition: all 0.5s ease;
    }
    
    .nav-item:hover{
      color: #000000;
      border-bottom: 2px solid #000000;
      font-size: 23px;
    }

    #heroCarousel {
      margin-top: 110px;
    }

    #beranda {
      scroll-margin-top: 180px;
    }

    .hero-slide {
      height: 75vh;
      min-height: 840px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .tentang_perusahaan {
      background-color: var(--secondary-color);
    }

    h2{
      color: var(--text-main);
    }

    .text-justify{
      text-align: justify;
    }

    .bagian-teks {
      background-color: var(--white-color);
      padding: 25px;
      border-radius: 7px;
      box-shadow: 0 2px 16px rgba(0, 0, 0, 0.17);
    }

    .judul-about{
      border-bottom: 2px solid var(--text-main);
      padding-bottom: 10px;
    }

    .mobilkeluarga{
      width: 500px;
      height: auto;
      box-shadow: 0 8px 23px rgba(0, 0, 0, 0.25);
      border-radius: 7px;
      transition: all 0.5s ease;
    }

    .mobilkeluarga:hover{
      transform: translateY(-9px);
    }

    .bagian-isi{
      background-color: var(--white-color);
      padding: 25px;
      border-radius: 7px;
      box-shadow: 0 2px 16px rgba(0, 0, 0, 0.17);
    }

    .bagian-ulasan{
      background-color: var(--secondary-color);
    }

    .kontak {
      background-color: var(--wood-accent);
      color: var(--white-color);
    }

    .ikon{
      width: 20px;
      height: auto;
    }

    .input-harga{
      border-radius: 5px;
      border: 2px solid #c1bfbfff;
      padding: 9px;
      width: 334px;
    }

    .label-judul{
      font-size: 17px;
    }

    .input-select{
      width: 386px;
      border-radius: 5px;
      border: 2px solid #c1bfbfff;
      padding: 5px;
    }

    .label-input{
      border: 2px solid #c1bfbfff;
    }

    .kartu-input{
      padding: 30px;
      padding-left: 185px;
    }

    .halamanhitung{
      padding-right: 200px;
      padding-left: 200px;
    }

    .judul_hasil{
      border-bottom: 2px solid var(--text-main);
      padding-bottom: 10px;
    }

    @media (max-width: 767.98px) {
      .logoku{
        width: 70px;
        height: auto;
      }
      #heroCarousel {
        margin-top: 130px;
      }

      .hero-slide {
        height: 60vh;
        min-height: 400px;
      }
    
      .hero-content h1 {
        font-size: 1.8rem !important;
      }
    
      .hero-content p {
        font-size: 0.9rem !important;
        margin-bottom: 1.5rem !important;
      }
    
      #ttg_perusahaan{
        padding-left: 12px;
        padding-right: 12px;
      }
    
      .penjelasan{
        font-size: 15px;
      }
    
      .mobilkeluarga{
        width: 250px;
        height: auto;
      }
    
      .input-harga, .input-select{
        width: 300px;
      }

      .kartu-input{
        padding: 20px;
      }

      .halamanhitung{
        padding-left: 20px;
        padding-right: 20px;
      }
    }
  </style>
  <link rel="icon" type="image/png" href="logo.png">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navigasi fixed-top ps-4 pe-4">
      <div class="container-fluid px-lg-5">
        <img src="logo.png" alt="Logo Perusahaan" class="logoku pt-3 me-0">
        <a class="navbar-brand fw-bold fs-3 ms-0 mb-0" href="#">Sahabat Mobil Kita</a>
        <button class="navbar-toggler mx-auto mt-0" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto align-items-center">
            <li class="nav-item"><a class="nav-link px-3" href="#beranda">Beranda</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#ttg_perusahaan">Tentang Perusahaan</a>
          </li>
            <li class="nav-item"><a class="nav-link px-3" href="#ulasan">Ulasan</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#kontak">Kontak</a></li>
          </ul>
    
          <div class="d-flex">
            <a href="#halaman_hitung" class="btn btn-lg tombol fs-5 mx-auto">
              <i class="bi bi-calculator"></i><b class="ms-2">Hitung</b></a>
          </div>
        </div>
      </div>
    </nav>
</header>
  
  <section id="beranda">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active">
            </button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('slider1.jpg');">
                    <div class="container text-center text-white hero-content">
                        <h6 class="text-uppercase mb-3 fw-bold">Simulasi Kredit Cepat</h6>
                        <h1 class="display-2 fw-bold mb-4">Hitung Angsuran<br>Mobil Impian</h1>
                        <p class="lead mb-5">Tidak perlu bingung lagi menghitung angsuran mobil secara <br> manual, kami punya solusinya.</p>
                        <a href="#halaman_hitung" class="btn tombol fs-5 mx-auto btn-lg"><i class="bi bi-calculator"></i><b class="ms-2">Coba Kalkulator</b></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <div class="hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('slider2.jpg');">
                    <div class="container text-center text-white hero-content">
                        <h6 class="text-uppercase mb-3 fw-bold">Simulasi Kredit Cepat</h6>
                        <h1 class="display-2 fw-bold mb-4">Kalkulator Cepat<br>dan Terpercaya</h1>
                        <p class="lead mb-5">Tidak perlu bingung hitung manual. Estimasikan DP dan cicilan <br> bulanan yang pas dengan kantongmu dalam hitungan detik.</p>
                        <a href="#halaman_hitung" class="btn tombol fs-5 mx-auto btn-lg"><i class="bi bi-calculator"></i><b class="ms-2">Coba Kalkulator</b></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <div class="hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('slider3.jpg');">
                    <div class="container text-center text-white hero-content">
                        <h6 class="text-uppercase mb-3 fw-bold">Perencanaan Finansial</h6>
                        <h1 class="display-2 fw-bold mb-4">Rencanakan Mobil<br>Sesuai Budget</h1>
                        <p class="lead mb-5">Atur besar uang muka dan jangka waktu kredit agar anggaran<br> bulanan keluarga tetap terencana dengan aman.</p>
                        <a href="#halaman_hitung" class="btn tombol fs-5 mx-auto btn-lg"><i class="bi bi-calculator"></i><b class="ms-2">Coba Kalkulator</b></a>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
  </section>
  
  <section id="ttg_perusahaan" class="py-5 tentang_perusahaan">
    <div class="container py-4">
      <div class="row align-items-center bagian-teks">
        <div class="col-md-6">
          <h2 class="fw-bold mb-3 judul-about">Tentang Perusahaan</h2>
          <p class="lead text-muted text-justify mb-3 penjelasan">
          Sahabat Mobil Kita adalah platform penyedia layanan kalkulator
          dan simulasi pembiayaan otomotif yang hadir untuk membantu Anda merencanakan
          pembelian mobil impian secara transparan dan terencana.
          Melalui kalkulator simulasi interaktif kami, Anda dapat
          secara mandiri menguji berbagai skema kredit yang paling sesuai dengan kondisi finansial Anda
          sebelum mengambil keputusan pembelian.
        </p><br>
          <h2 class="judul-about mb-3">
            <b>Kenapa Memilih Kami?</b>  
          </h2>
          <div class="text-muted text-justify penjelasan">
            <ul class="lead list-unstyled">
              <li class="mb-3 d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 fs-5"></i>
                <span><b>100% Transparan:</b> Rincian bunga dan DP jelas tanpa biaya tersembunyi.</span>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 fs-5"></i>
                <span><b>Simulasi Cepat & Akurat:</b> Perhitungan instan dan real-time dalam hitungan detik.</span>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 fs-5"></i>
                <span><b>Skema Fleksibel:</b> Bebas pilih DP 10%-60% dan tenor hingga 5 tahun.</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <img src="mobil-keluarga.jpg" alt="gambar mobil" class="mobilkeluarga mx-auto d-block">
        </div>
      </div>
    </div>
  </section>
  
  <section id="halaman_hitung" class="py-5 bg-light">
    <div class="container py-4 bagian-isi halamanhitung">
        <div class="text-center mb-4">
          <h2 class="fw-bold">Kalkulator Simulasi Kredit</h2>
          <p class="text-muted">Hitung estimasi angsuran bulanan mobil impian Anda</p>
        </div>
        
        <form action="" method="POST">
          <div class="card shadow-sm mb-4 border-0 bg-light rounded-3 kartu-input">     
              
              <!-- 1. Input Text (Nama) dengan Repopulate -->
              <label for="nama" class="label-judul me-3">Nama Anda:</label>
              <input type="text" id="nama" name="nama" class="input-harga mt-2" placeholder="Masukkan nama anda..." required value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>"> <br> <br>
              
              <!-- 2. Input Number (Harga Mobil) dengan Repopulate -->
              <label for="harga_mobil" class="label-judul me-3">Harga Mobil (Rp.):</label>
              <input type="number" id="harga_mobil" name="harga_mobil" class="input-harga mt-2" placeholder="Masukkan harga mobil..." required value="<?= isset($_POST['harga_mobil']) ? htmlspecialchars($_POST['harga_mobil']) : '' ?>"> <br> <br>
              
              <!-- 3. Dropdown Select (DP Persen) dengan Repopulate -->
              <div class="d-flex">
                <label for="dp" class="label-judul mt-3 me-3">DP (persen):</label>
                <select name="dp_persen" id="dp" class="form-select input-select" required>
                  <option value="" disabled <?= !isset($_POST['dp_persen']) ? 'selected' : '' ?>>Pilih DP</option>
                  <option value="10" <?= (isset($_POST['dp_persen']) && $_POST['dp_persen'] == '10') ? 'selected' : '' ?>>10%</option>
                  <option value="20" <?= (isset($_POST['dp_persen']) && $_POST['dp_persen'] == '20') ? 'selected' : '' ?>>20%</option>
                  <option value="30" <?= (isset($_POST['dp_persen']) && $_POST['dp_persen'] == '30') ? 'selected' : '' ?>>30%</option>
                  <option value="40" <?= (isset($_POST['dp_persen']) && $_POST['dp_persen'] == '40') ? 'selected' : '' ?>>40%</option>
                  <option value="50" <?= (isset($_POST['dp_persen']) && $_POST['dp_persen'] == '50') ? 'selected' : '' ?>>50%</option>
                  <option value="60" <?= (isset($_POST['dp_persen']) && $_POST['dp_persen'] == '60') ? 'selected' : '' ?>>60%</option>
                </select>
              </div> <br> <br>
              
              <!-- 4. Radio Button (Tenor) dengan Repopulate -->
              <div class="d-flex align-items-center gap-3 flex-wrap">
                <label class="mb-0">Tenor:</label>
                
                <div class="form-check">
                  <input class="form-check-input label-input" type="radio" name="tenor_tahun" id="tenor1" value="1" required <?= (isset($_POST['tenor_tahun']) && $_POST['tenor_tahun'] == '1') ? 'checked' : '' ?>>
                  <label class="form-check-label" for="tenor1">1 Tahun</label>
                </div>
              
                <div class="form-check">
                  <input class="form-check-input label-input" type="radio" name="tenor_tahun" id="tenor2" value="2" required <?= (isset($_POST['tenor_tahun']) && $_POST['tenor_tahun'] == '2') ? 'checked' : '' ?>>
                  <label class="form-check-label" for="tenor2">2 Tahun</label>
                </div>
              
                <div class="form-check">
                  <input class="form-check-input label-input" type="radio" name="tenor_tahun" id="tenor3" value="3" required <?= (isset($_POST['tenor_tahun']) && $_POST['tenor_tahun'] == '3') ? 'checked' : '' ?>>
                  <label class="form-check-label" for="tenor3">3 Tahun</label>
                </div>
              
                <div class="form-check">
                  <input class="form-check-input label-input" type="radio" name="tenor_tahun" id="tenor4" value="4" required <?= (isset($_POST['tenor_tahun']) && $_POST['tenor_tahun'] == '4') ? 'checked' : '' ?>>
                  <label class="form-check-label" for="tenor4">4 Tahun</label>
                </div>
              
                <div class="form-check">
                  <input class="form-check-input label-input" type="radio" name="tenor_tahun" id="tenor5" value="5" required <?= (isset($_POST['tenor_tahun']) && $_POST['tenor_tahun'] == '5') ? 'checked' : '' ?>>
                  <label class="form-check-label" for="tenor5">5 Tahun</label>
                </div>
              </div>
              
              <button type="submit" class="btn tombol fs-5 btn-lg mt-4">
                <i class="bi bi-calculator"></i>
                <b class="ms-2">Hitung</b>
              </button>
          </div>
        </form>
      
        <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validasi menggunakan empty() untuk semua input termasuk nama
            if (!empty($_POST['nama']) && !empty($_POST['harga_mobil']) && !empty($_POST['dp_persen']) && !empty($_POST['tenor_tahun'])) {
                
                $nama = htmlspecialchars($_POST['nama']);
                $harga_mobil = (float) $_POST['harga_mobil'];
                $dp_persen = (float) $_POST['dp_persen'];
                $tenor_tahun = (int) $_POST['tenor_tahun'];
                
                $bunga_persen = 20;
                $nominal_bunga = ($bunga_persen / 100) * $harga_mobil;
                $nominal_dp = ($dp_persen / 100) * $harga_mobil;
                $tenor_bulan = $tenor_tahun * 12;
                $jumlah_angsuran = (($harga_mobil + $nominal_bunga) - $nominal_dp) / $tenor_bulan;
        ?>

        <div class="card shadow-sm p-4 mb-4 border-0 bg-light rounded-3">
          <h4 class="fw-bold mb-3 text-dark text-center judul-hasil">Hasil Simulasi Kredit</h4>
          
          <div class="row g-2 fs-6">
            <div class="col-6 text-muted">Nama Pemohon</div>
            <div class="col-6 text-end fw-bold text-dark">
              <?= $nama; ?>
            </div>

            <div class="col-6 text-muted">Harga Mobil</div>
            <div class="col-6 text-end fw-bold text-dark">
              Rp.<?= number_format($harga_mobil, 0, ',', '.'); ?>
            </div>

            <div class="col-6 text-muted">DP</div>
            <div class="col-6 text-end fw-bold text-dark">
              <?= $dp_persen; ?>% (Rp.<?= number_format($nominal_dp, 0, ',', '.'); ?>)
            </div>

            <div class="col-6 text-muted">Tenor</div>
            <div class="col-6 text-end fw-bold text-dark">
              <?= $tenor_tahun; ?> Tahun (<?= $tenor_bulan; ?> Bulan)
            </div>

            <div class="col-6 text-muted">Bunga</div>
            <div class="col-6 text-end fw-bold text-dark">
              20%
            </div>
          </div>
          
          <div class="d-flex justify-content-between align-items-center mt-3">
            <span class="fw-bold text-dark fs-6">Jumlah Angsuran</span>
            <span class="fw-bold text-dark fs-5">
              Rp.<?= number_format($jumlah_angsuran, 0, ',', '.'); ?> / Bulan
            </span>
          </div>
        </div>
        
        <?php 
            } else {
                echo '<div class="alert alert-danger text-center">Form wajib diisi</div>';
            }
        } 
        ?>
    </div>
</section>
  
  <section id="ulasan" class="bagian-ulasan py-5 px-4">
  <div class="container">
    
    <div class="text-center mb-5">
      <h2 class="fw-bold mb-2">Apa Kata Mereka?</h2>
      <p class="lead text-muted">
        Ulasan yang berdasarkan pengalaman nyata para pelanggan kami,<br>
        yang telah menggunakan kalkulator simulasi kredit Sahabat Mobil Kita
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <div class="col-md-4">
        <div class="card shadow border-0 p-4 bg-white rounded-3">
          
          <div class="text-warning mb-3">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>

          <p class="text-muted fs-6 mb-4">
            "Sangat membantu saat mau beli mobil keluarga pertama. Perhitungan angsurannya jelas, tidak ada biaya
            siluman yang tiba-tiba muncul. Pilihan tenornya juga fleksibel banget!"
          </p>

          <hr class="text-muted my-3">

          <div class="d-flex align-items-center">
            <img src="ulasan1.jpg" alt="Ulasan 1" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h6 class="fw-bold mb-0 text-dark">James Sugiyarto</h6>
              <small class="text-muted">Karyawan Swasta</small>
            </div>
          </div>

        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow border-0 p-4 bg-white rounded-3">
          
          <div class="text-warning mb-3">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>

          <p class="text-muted fs-6 mb-4">
            "Sangat membantu saat mau beli mobil keluarga pertama. Selain itu
            Kalkulatornya juga cepat sekali, cuma butuh beberapa detik langsung keluar estimasi cicilan bulanan."
          </p>

          <hr class="text-muted my-3">

          <div class="d-flex align-items-center">
            <img src="ulasan2.jpg" alt="Ulasan 2" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h6 class="fw-bold mb-0 text-dark">Vivi Fibrina</h6>
              <small class="text-muted">Traveller</small>
            </div>
          </div>

        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow border-0 p-4 bg-white rounded-3">
          
          <div class="text-warning mb-3">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>

          <p class="text-muted fs-6 mb-4">
            "Awalnya bingung mau ambil tenor berapa tahun, tapi setelah coba kalkulator di sini jadi punya gambaran jelas.
            Sangat direkomendasikan buat yang baru pertama kali mau kredit mobil."
          </p>

          <hr class="text-muted my-3">

          <div class="d-flex align-items-center">
            <img src="ulasan3.jpg" alt="Ulasan 3" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h6 class="fw-bold mb-0 text-dark">Henry Sudaryono</h6>
              <small class="text-muted">Pustakawan</small>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
  
  <section id="kontak" class="kontak px-4 py-5 bg-dark text-white">
  <div class="container">
    <div class="row g-4 align-items-start">
      
      <div class="col-md-4">
        <div class="d-flex align-items-center mb-3">
          <img src="logo.png" alt="Logo Perusahaan" class="me-3" style="height: 50px; width: auto;">
          <h5 class="fw-bold mb-0 text-white">Sahabat Mobil Kita</h5>
        </div>
        <p class="text-secondary small mb-3">
          Platform simulasi pembiayaan otomotif <br> terpercaya untuk membantu Anda <br> merencanakan mobil impian secara transparan.
        </p>
        <div class="d-flex gap-3 fs-3">
          <a href="javascript:void(0)" class="text-white"><i class="bi bi-instagram"></i></a>
          <a href="javascript:void(0)" class="text-white"><i class="bi bi-whatsapp"></i></a>
          <a href="javascript:void(0)" class="text-white"><i class="bi bi-tiktok"></i></a>
        </div>
      </div>

      <div class="col-md-4">
        <h5 class="fw-bold mb-3 text-white">Navigasi</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#beranda" class="text-secondary text-decoration-none">Beranda</a></li>
          <li class="mb-2"><a href="#ttg_perusahaan" class="text-secondary text-decoration-none">Tentang Perusahaan</a></li>
          <li class="mb-2"><a href="#halaman_hitung" class="text-secondary text-decoration-none">Kalkulator Simulasi</a></li>
          <li class="mb-2"><a href="#ulasan" class="text-secondary text-decoration-none">Ulasan</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h5 class="fw-bold mb-3 text-white">Hubungi Kami</h5>
        <p class="text-secondary small mb-2">
          <i class="bi bi-geo-alt-fill me-2 text-warning"></i>Jl. Darun Na'im, Karangduren, Tengaran
        </p>
        <p class="text-secondary small mb-2">
          <i class="bi bi-whatsapp me-2 text-success"></i>+62 857-1234-4321
        </p>
        <p class="text-secondary small mb-2">
          <i class="bi bi-envelope-fill me-2 text-primary"></i>info@sahabatmobilkita.com
        </p>
        <p class="text-secondary small mb-0">
          <i class="bi bi-clock-fill me-2 text-info"></i>Senin – Jumat: 08.00 – 17.00 WIB
        </p>
      </div>
    </div>
    <hr class="border-secondary my-5">
      <div class="text-center text-secondary small">
        &copy; 2026 Sahabat Mobil Kita. All rights reserved.
      </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>