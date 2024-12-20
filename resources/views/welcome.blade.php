<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>InfoPMB Digitech University</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <li><a class="nav-link scrollto" href="#about">PENDAFTARAN</a></li>
          <li><a class="nav-link scrollto" href="#services">PROGRAM STUDI</a></li>
          <li><a href="{{ url('/beasiswa') }}">BEASISWA</a></li>

          <li><a href="https://wa.me/62818618622">CONTACT</a></li>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">

        
        <div class="justify-content-center">
          <video playsinline autoplay muted loop poster="">
            <source src="assets/img/view drone.mp4" type="video/mp4">
          </video>
        </div>

        
        <div class="col-lg-6 d-flex flex-column justify-content-center"><br> <br> <br> <br> <br> <br>
          <h1 data-aos="fade-up">PENDAFTARAN MAHASISWA BARU DIGITECH UNIVERSITY</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Your Future Start Here!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a> 
            </div>
          </div>
        </div>
        
        
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <!-- Menampilkan Keterangan dari $gambar -->
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          @foreach($gambar as $item)
            <div class="content">
              <h3>Digitech University</h3>
              <p>
                {!! nl2br(e($item->keterangan)) !!}
              </p>
              <div class="text-center text-lg-start">
                <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>DAFTAR SEKARANG</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Menampilkan Gambar dari $gambar -->
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            @foreach($gambar as $item)
                <div class="image-container">
                    <img src="{{ url('/data_file/'.$item->file) }}" class="img-fluid" alt="">
                </div>
            @endforeach
        </div>
      </div>
    </div>

        
    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Digitech University</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <a href="https://youtube.com/shorts/rco26cNcrxA?si=PXv8pKW07zm5rofJ">
              <img src="assets/img/video-1.png" class="img-fluid" alt=""> <br><br>
              <h3>Testimoni</h3> </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <a href="https://www.youtube.com/shorts/NGHrlhShS70">
              <img src="assets/img/video-2.png" class="img-fluid" alt=""> <br><br>
              <h3>Promo Pendaftaran</h3> </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <a href="https://www.instagram.com/p/C0an1KICcNS/">
              <img src="assets/img/video-3.png" class="img-fluid" alt=""> <br><br>
              <h3>Room Tour Kampus</h3> </a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-7">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="168" data-purecounter-duration="1" class="purecounter"></span>
                <p>Dosen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-7">
            <div class="count-box">
              <i class="bi bi-people" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="3915" data-purecounter-duration="1" class="purecounter"></span>
                <p>Mahasiswa</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-7">
            <div class="count-box">
              <i class="bi bi-people" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="818" data-purecounter-duration="1" class="purecounter"></span>
                <p>Alumni</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Dokumen</h2>
          <p>Persyaratan Daftar</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="assets/img/foto1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Fotocopy Ijazah dan Transkip Nilai</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Foto 3x4 dan 4x6</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>KTP dan Kartu Keluarga</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Akte Kelahiran</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Kenapa Harus Digitech University?</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Fasilitas</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Keunggulan</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Pilihan Kelas</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>WIFI</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Ruang Full AC</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Laboratorium Komputer</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Laboratorium Eko. Syariah</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Laboratorium Teknik Industri</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Laboratorium Akuntansi</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Laboratorium Keuangan</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Laboratorium Hukum</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Laboratorium Informatika</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>E-Library</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Parkir Luas</h4>
                </div>
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Tidak ada Skripsi/Tesis, yang menyulitkan kelulusan</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Waktu kuliah lebih fleksibel (pagi-sore-shift)</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Materi belajar yang mudah di download (E-Learning)</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Pelayanan akademik dan absensi kuliah berbasis android/IT</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Setiap periode, mahasiswa diwajibkan untuk mengikuti workshop bisnis</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Kuliah praktis bersama Dosen dan para pakar/maestro di bidang masing-masing</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Lulusannya banyak dibutuhkan diberbagai organisasi, baik di dunia usaha bisnis maupun non
                    bisnis</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Mahasiswa dibuatkan jejaring dengan media sosial/komunitas</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Mahasiswa mampu merancang konsep bisnis, baik secara konvensional maupun berbasis IT</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Menguasai ilmu dan teknologi untuk diimplementasikan dalam dunia bisnis</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4> Dilatih berjiwa wirausaha, kepemimpinan kuat, kreatif dan inovatif
                  </h4>
                </div>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Kelas A</h4>
                </div>
                <p>Senin s.d. Jumat (jam 17.00 - 20.30)</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Kelas B</h4>
                </div>
                <p>Waktu kuliah disesuaikan</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Kelas C</h4>
                </div>
                <p>Senin s.d. Jumat (Pagi - Siang)</p>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class="col-lg-6">
            <img src="assets/img/foto2.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->


      </div>

    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Digitech Univeristy</h2>
          <p>Program Studi</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue" style="border-radius:20px;">
              <img src="assets/img/d3 akuntasi.png" class="img-fluid" alt="">
              <br><br>
              <h3>Akuntansi D3</h3> <br>
              <p style="font-size: 13px;">
                Lulusan dari Program Studi Akuntansi D3 ini dapat berkarir menjadi staff Keuangan, staff Akuntan Publik, staff Konsultan Pajak, karyawan Perbankan, staff Controller, dan Wirausahawan.
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box blue" style="border-radius:20px;">
              <img src="assets/img/d3 mp.png" class="img-fluid" alt="">
              <br><br>
              <h3>Manajemen Perusahaan D3</h3>
              <p style="font-size: 13px;">
                Peluang kerjanya sangat luas, meliputi berbagai perusahaan, serta bisa menjadi Tenaga pelaksana pada pembangunan ekonomi di instansi, baik pusat maupun daerah.
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box blue" style="border-radius:20px;">
              <img src="assets/img/d3 mi.png" class="img-fluid" alt="">
              <br><br>
              <h3>Manajemen Informatika D3</h3>
              <p style="font-size: 13px;">
                Prospek karirnya adalah Programmer, Designer, Animator, Web Based Business, IT Support yang dibekali kemampuan wirausaha.
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>

        </div>
        
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red" style="border-radius:20px;">
              <img src="assets/img/s1 mn.png" class="img-fluid" alt=""> <br><br>
              <h3>Manajemen S1</h3>
              <p style="font-size: 13px;">Para lulusannya memiliki dasar yang kuat untuk berkarier di 
                bidang bisnis maupun non-bisnis, menjadikan mereka tenaga profesional, dengan banyak yang 
                mencapai posisi manajer atau kepala bagian.
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple" style="border-radius:20px;">
              <img src="assets/img/s1 akuntansi.png" class="img-fluid" alt=""> <br><br>
              <h3>Akuntansi S1</h3>
              <p style="font-size: 13px;">Menyiapkan para lulusannya untuk menjadi handal di bidang Auditing, Akuntansi Perpajakan, Akuntansi Keuangan 
                dan Akuntansi Syariah, baik di BUMN maupun BUMS.
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink" style="border-radius:20px;">
              <img src="assets/img/s1 hukum.png" class="img-fluid" alt=""> <br><br>
              <h3>Hukum S1</h3>
              <p style="font-size: 13px;">
                Indonesia membutuhkan banyak lulusan hukum dapat menjadi hakim, pengacara, notaris, penasihat hukum,
                konsultan, diplomat, HRD sampai pegawai kementerian.
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>
        
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box green">
              <img src="assets/img/s1 inf.png" class="img-fluid" alt=""> <br><br>
              <h3>Informatika S1</h3>
              <p style="font-size: 13px;">
                Prospek karir lulusan S1 Informatika adalah Software Engineer, IT Consultant, Web Developer, Mobile Application
                Developer dan Game Developer.
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <img src="assets/img/s1 dkv.png" class="img-fluid" alt=""> <br><br>
              <h3>DKV S1</h3>
              <p style="font-size: 13px;">
                Memiliki peluang kerja yang luas, terutama dibidang industri kreatif seperti Periklanan, Desainer, Editor Film,
                Fotografer, Animator, Videografer, Content Creator dan banyak lagi.
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box purple">
              <img src="assets/img/s1 tekdus.png" class="img-fluid" alt=""> <br><br>
              <h3>Teknik Industri S1</h3>
              <p style="font-size: 13px;">
              Alumni Teknik Industri memiliki prospek kerja luas, termasuk di bidang produksi, penjaminan mutu, sistem informasi, logistik, dan lainnya.
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <img src="assets/img/s2 mn inov.png" class="img-fluid" alt=""> <br><br>
              <h3>Manajemen Inovasi S2</h3>
              <p style="font-size: 13px;">
                Lulusannya dipersiapkan untuk menghadapi era disruption dan era digital. Masa studinya ditempuh
                dalam <strong>3 semester.</strong>
              </p>
              <a href="https://pmb.digitechuniversity.ac.id/registrasi" class="btn btn-primary">Daftar</a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Kapan pendaftaran mahasiswa baru di Digitech University?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Penerimaan mahasiswa baru dari <strong>sekarang sampai dengan Juli 2024</strong>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Hari apa saja dan jam berapa pelayanan mahasiswa baru dibuka?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Pelayanan dibuka silahkan mengunjungi Universitas Teknologi Digital pada jam kerja berikut ini: <br>
                    Senin-Jumat: Pukul 08.00 - 19.00 <br>
                    Sabtu-Minggu: Pukul 08.00 -  14.00 <br>
                    Alamat Kampus: <br>
                    Jalan Cibogo Indah III - Bodogol Rt.08/03 Kel. Mekarjaya Kec. Rancasari Kota Bandung - Jawa Barat 40292<br><br>
                    <strong>Libur Nasional tidak ada pelayanan</strong>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Bagaimana cara mendaftar di Digitech University secara online?
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Mendaftar melalui Website Kampus<br>
                    <strong>Pendaftaran melalui link: </strong><br><br>
                    <a href="https://pmb.digitechuniversity.ac.id/">https://pmb.digitechuniversity.ac.id/</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Apakah ada beasiswa untuk mahasiswa?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Program Beasiswa Universitas Teknologi Digital: <br>
                    <ul>
                      <li>Beasiswa KIP Kuliah</li>
                      <li>Beasiswa Prestasi</li>
                      <li>Beasiswa Koperasi</li>
                      <li>Beasiswa Instansi/Perusahaan</li>
                      <li>Beasiswa Tahfidz/Asrama</li>
                      <li>Beasiswa Walikota Bandung</li>
                  </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Kapan terakhir pendaftaran ditutup?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Pendaftaran ditutup:<br>
                    <ul>
                      <li>Bulan Juli (Bagi Pendaftar KIPK)</li>
                      <li>Bulan September (Bagi Pendaftar Non KIPK)</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Bagaimana proses seleksi penerimaan mahasiswa baru?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Alur Pendaftaran PMB 2024 bisa dilihat di sini: <br>
                    <a href="https://drive.google.com/drive/folders/1OG-UGuRXU20QpgXk_VvSfwoGY-NUjjPQ?usp=sharing">https://drive.google.com/drive/folders/1OG-UGuRXU20QpgXk_VvSfwoGY-NUjjPQ?usp=sharing</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimoni</h2>
          <p>Apa kata mahasiswa Digitech University?</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Nyaman dalam lingkungan berteman terus mata kuliahnya tidak terlalu susah.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Mahasiswa</h3>
                  <h4>Digitech University</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fasilitasnya, orang-orangnya serta organisasinya yang cukup ramai meyakinkan untuk bisa betah kuliah di sini.
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Mahasiswa</h3>
                  <h4>Digitech University</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Dosen-dosen yang mengajar di manajemen konsentrasi pemasaran itu ahli dibidangnya.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Mahasiswa</h3>
                  <h4>Digitech University</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Kuliah di sini rasanya enjoy dan santai
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Mahasiswa</h3>
                  <h4>Digitech University</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Lingkungannya dan dosen-dosennya yang ramah
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>Mahasiswa</h3>
                  <h4>Digitech University</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    


    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-12 footer-info">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
            </a>
            <p>
              Jl. Cibogo indah III - Bodogol Rt.08/05 Kel. Mekarjaya Kec. Rancasari Kota Bandung - Jawa Barat 40292<br> 
              <strong>Phone:</strong> <br>081-861-8611<br>081-861-8622<br>
              <strong>Email:</strong> admin@digitechuniveristy.ac.id<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.youtube.com/@pmbdigitechuniversity" class="youtube"><i class="bi bi-youtube"></i></a>
              <a href="https://www.instagram.com/pmbdigitechuniversity/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.tiktok.com/@pmbdigitechuniversity?_t=8mJGZhMTNJp&_r=1" class="tiktok"><i class="bi bi-tiktok"></i></a>
              <a href="https://www.linkedin.com/school/digitechuniversity/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-4 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-8 footer-contact text-center text-md-start">
            
          </div>

          <div class="col-lg-3 col-md-15 footer-contact text-center text-md-start">
            <h4>Digitech University - PSDKU Tegal Jawa Tengah</h4>
            <p>
              <strong>Address:</strong> <br>
              Jl. Kates 5 No. 47 Tembok Banjaran Adiwerna, Kab. Tegal <br>
              <strong>Phone:</strong> <br>0877-8875-3586<br>0857-0008-1905<br>
              <strong>PMB:</strong> <a href="https://pmb.utdtegal.ac.id">https://pmb.utdtegal.ac.id</a> <br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2024 <strong><span>InfoPMB Digitech University</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>