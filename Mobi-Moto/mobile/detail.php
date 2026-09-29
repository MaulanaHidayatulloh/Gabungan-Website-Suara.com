<?php
/* [BARU: load data Artikel Tematik HUT ke-499 Jakarta - dipakai untuk render konten sesuai ?artikel=slug] */
require_once __DIR__ . '/tematik-data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
  <link rel="stylesheet" href="assets/css/style-1.0.1.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <?php include 'banner/banner-320x480.php'; ?>
  <header class="header">
    <div class="container">

      <div class="logo">
        <a href="index.php">
          <?php if ($tematik_active): ?>
          <img src="assets/images/icon/logo_mobimoto_2026.svg" alt="Logo Suara.com HUT Jakarta 499" width="140" height="23">
          <?php else: ?>
          <img src="assets/images/icon/logo_mobimoto_2026.svg" alt="Logo Website" width="180px" height="21px">
          <?php endif; ?>
        </a>

      </div>

      <div class="search">
        <button class="search-btn" id="search-btn">
          <img src="assets/images/icon/search_white.svg" width="20" alt="Search">
        </button>
      </div>

      <div class="search-overlay" id="search-overlay">
        <div class="search-header">
          <button class="back-btn" id="close-search">←</button>
          <input type="text" placeholder="Cari berita...">
        </div>
        <div class="search-content">
          <div class="trending">
            <i><img src="assets/images/icon/trending.svg" alt="Trending"></i>
            <span>Trending</span>
          </div>
          <ul>
            <li>
              <a href="">Indonesia</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt="Trending Search"></span>
            </li>
            <li>
              <a href="">Kamerun</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt="Trending Search"></span>
            </li>
            <li>
              <a href="">WFH</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt="Trending Search"></span>
            </li>
            <li>
              <a href="">Honda</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt="Trending Search"></span>
            </li>
            <li>
              <a href="">Malaysia</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt="Trending Search"></span>
            </li>
          </ul>
        </div>
      </div>

      <!-- HAMBURGER -->
      <button class="hamburger" id="hamburger" aria-label="Buka menu navigasi">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- OVERLAY -->
      <div class="overlay" id="overlay"></div>

      <!-- MENU -->
       <div class="slide-menu" id="menu">

        <div class="menu-header">
          
          <button class="close-btn" id="closeBtn">✕</button>
        </div>
        <div class="menu-loginuser"><a href="" class="user"><img src="assets/images/icon/menu-user.svg" alt="Menu User"></a></div>
        <ul class="menu-list">
          <li class="has-submenu">
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-news.svg" alt=""></i>
               <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                News
               </a>
               <span class="arrow"></span>
            </div>

            <div class="submenu">
              <a href="kanal.php">Nasional</a>
              <a href="kanal.php">Metropolitan</a>
              <a href="kanal.php">Internasional</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-bisnis.svg" alt="Menu Bisnis"></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Bisnis
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Makro</a>
              <a href="kanal.php">Asuransi</a>
              <a href="kanal.php">Keuangan</a>
              <a href="kanal.php">Properti</a>
              <a href="kanal.php">Inspiratif</a>
              <a href="kanal.php">Ekopol</a>
              <a href="kanal.php">Energi</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-bola.svg" alt="Menu Bola"></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Bola
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Bola Indonesia</a>
              <a href="kanal.php">Liga Inggris</a>
              <a href="kanal.php">Liga Italia</a>
              <a href="kanal.php">Bola Dunia</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-sport.svg" alt="Menu Sport"></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Sport
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Raket</a>
              <a href="kanal.php">Balap</a>
              <a href="kanal.php">Arena</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-lifestyle.svg" alt="Menu Lifestyle"></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Lifestyle
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Female</a>
              <a href="kanal.php">Male</a>
              <a href="kanal.php">Relationship</a>
              <a href="kanal.php">Food & Travel</a>
              <a href="kanal.php">Komunitas</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-entertainment.svg" alt="Menu Entertainment"></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Entertainment
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Gosip</a>
              <a href="kanal.php">Music</a>
              <a href="kanal.php">Fllm</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-otomotif.svg" alt="Menu Otomotif"></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Otomotif
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Mobil</a>
              <a href="kanal.php">Motor</a>
              <a href="kanal.php">Autoseleb</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-tekno.svg" alt="Menu Tekno"></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Tekno
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Internet</a>
              <a href="kanal.php">Gadget</a>
              <a href="kanal.php">Tekno</a>
              <a href="kanal.php">Saint</a>
              <a href="kanal.php">Game</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-healt.svg" alt="Menu Healt"></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Healt
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Women</a>
              <a href="kanal.php">Men</a>
              <a href="kanal.php">Parenting</a>
              <a href="kanal.php">Konsultasi</a>
            </div>
          </li>
          
          <li>
            <div class="menu-link"><i><img src="assets/images/icon/menu-foto.svg" alt="Menu Foto"></i><a href="kanal.php">Foto</a></div>
          </li>
          <li>
            <div class="menu-link"><i><img src="assets/images/icon/menu-video.svg" alt="Menu Video"></i><a href="kanal.php">Video</a></div>
          </li>
          <li>
            <div class="menu-link"><i><img src="assets/images/icon/menu-opini.svg" alt="Menu Opini"></i><a href="kanal.php">Opini</a></div>
          </li>
        </ul>
        <ul class="regional mt-20">
          <li class="title">
            <a href="kanal.php">Regional</a>
          </li>

          <li><a href="kanal.php">Jakarta</a></li>
          <li><a href="kanal.php">Jabar</a></li>
          <li><a href="kanal.php">Jatim</a></li>
          <li><a href="kanal.php">Jateng</a></li>
          <li><a href="kanal.php">Sumut</a></li>
          <li><a href="kanal.php">Banten</a></li>
          <li><a href="kanal.php">Sulsel</a></li>
          <li><a href="kanal.php">Bali</a></li>
          <li><a href="kanal.php">Sumsel</a></li>
          <li><a href="kanal.php">Jogja</a></li>
          <li><a href="kanal.php">Riau</a></li>
          <li><a href="kanal.php">Lampung</a></li>
          <li><a href="kanal.php">Kaltim</a></li>
          <li><a href="kanal.php">Kalbar</a></li>
          <li><a href="kanal.php">Sumbar</a></li>
          <li><a href="kanal.php">Bogor</a></li>
          <li><a href="kanal.php">Bekasi</a></li>
          <li><a href="kanal.php">Malang</a></li>
          <li><a href="kanal.php">Surakarta</a></li>
        </ul>
       
        <div class="menu-bottom">
          <p>Available On</p>
          <div class="menu-store">
            <div>
              <img src="assets/images/icon/playstore.svg" alt="Playstore">
            </div>
            <div>
              <img src="assets/images/icon/iosstore.svg" alt="Ios Store">
            </div>
          </div>
         
        </div>
        
      </div>
      
  </header>   

  <div class="menu-scroll">
    <div class="menu-wrapper">
      <a href="kanal.php">Nasional</a>
      <a href="kanal.php">Ekonomi</a>
      <a href="kanal.php">Bola</a>
      <a href="kanal.php">Otomotif</a>
      <a href="kanal.php">Entertainment</a>
      <a href="kanal.php">Tekno</a>
      <a href="kanal.php">Gaya Hidup</a>
      <a href="kanal.php" id="regional-btn">Regional</a>
    </div>
  </div>

  <section class="trending-menu mt-10">
  <div class="container">
    <div class="trending-wrapper">

      <!-- Icon + Judul -->
      <div class="trending-header">
        <img src="assets/images/icon/trending.svg" alt="Trending" class="trending-icon">
        <span class="trending-title">Trending</span>
      </div>

      <!-- Menu wrapper -->
      <div class="trending-slider-container">
        <div class="trending-slider">
          <div class="trending-item active">Bola</div>
          <div class="trending-item">Tennis</div>
          <div class="trending-item">Sepatu</div>
          <div class="trending-item">Indonesia</div>
          <div class="trending-item">Malaysia</div>
          <div class="trending-item">Piala Dunia</div>
          <div class="trending-item">Ekonomi</div>
          <div class="trending-item">Tekno</div>
          <div class="trending-item">Islam</div>
          <div class="trending-item">Kristen</div>
          <div class="trending-item">Budha</div>
        </div>
      </div>

    </div>
  </div>
  </section>

  <?php if ($tematik_active): ?>
  <div class="tematik-ornamen">
  <?php endif; ?>

  <section class="detail<?php echo $tematik_active ? ' tematik-bg' : ''; ?>">
    <?php if ($tematik_active): ?>
    <img class="tematik-watermark tematik-watermark-1" src="assets/images/hut-jakarta/bg-hut-2.png" alt="">
    <img class="tematik-watermark tematik-watermark-2" src="assets/images/hut-jakarta/bg-hut-4.png" alt="">
    <?php endif; ?>
    <div class="container">

      <?php if ($tematik_active): ?>
      <div class="tematik-header-banner">
        <img class="tematik-banner-img" src="assets/images/hut-jakarta/bg-header-mobile.png" alt="HUT Jakarta ke-499">
        <span class="hut-badge">HUT Jakarta ke-499</span>
      </div>
      <?php endif; ?>

      <!-- Breadcrumb -->
      <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#"><?php echo $tematik_active ? 'Jakarta 499' : 'Sepak Bola'; ?></a></li>
      </ul>

      <div class="detail-news">

        <!-- Title -->
        <?php if ($tematik_active): ?>
        <h1><?php echo htmlspecialchars($tematik_active['title']); ?></h1>
        <?php else: ?>
        <h1>Negara Eropa Banyak yang Pakai Sistem Contractual Savings</h1>
        <?php endif; ?>

        <!-- Writer -->
        <div class="writer-news mb-20">
          <div class="writer-info">
            <img src="assets/images/icon/user.svg" alt="User">
            <img src="assets/images/news/news-1.jpg" alt="User">
            <h2 class="author-trigger">
              <a href="profile">Rohman Manawi</a>,
              <a href="profile">Rully</a>
            </h2>
            <!-- dropdown -->
            <div class="author-popup">
              <p><a href="profile.php">Rohman Manawi</a></p>
              <p><a href="profile.php">RUlly</a></p>
            </div>

          </div>
          <?php if ($tematik_active): ?>
          <small>Senin, 22 Juni 2026 | <?php echo $tematik_active['time']; ?></small>
          <?php else: ?>
          <small>30 Agustus 2025</small>
          <?php endif; ?>
        </div>

  

        <!-- Share -->
        <div class="share-article mt-20 mb-20">
          <ul>
            <li><a href="#"><img src="assets/images/icon/share-fb.svg" alt="Facebook"></a></li>
            <li><a href="#"><img src="assets/images/icon/share-wa.svg" alt="Whatapps"></a></li>
            <li><a href="#"><img src="assets/images/icon/share-x.svg" alt="X"></a></li>
            <li><a href="#"><img src="assets/images/icon/share-tele.svg" alt="Telegram"></a></li>
            <li><a href="#"><img src="assets/images/icon/share-link.svg" alt="Link"></a></li>
          </ul>
        </div>

        <div>
            <a class="google-follow-btn" rel="noopener" href="https://www.google.com/preferences/source?q=suara.com" target="_blank" aria-label="follow google">
              <img src="https://assets.suara.com/suara/desktop/images/icon-sosmed/icon-google-color.svg" alt="google">
              <span>Atur, Baru Temukan</span>
            </a>
        </div>

        <!-- Main Image -->
        <?php if ($tematik_active): ?>
        <figure class="article-image">
          <img src="<?php echo $tematik_active['image']; ?>" alt="<?php echo htmlspecialchars($tematik_active['title']); ?>" fetchpriority="high">
          <figcaption><?php echo htmlspecialchars($tematik_active['title']); ?></figcaption>
        </figure>
        <?php else: ?>
        <figure class="article-image">
          <img src="assets/images/news/news-1.jpg" alt="Timnas Indonesia vs Bulgaria" fetchpriority="high">
          <figcaption>
            Pemain Timnas Indonesia saat menghadapi Bulgaria di GBK.
          </figcaption>
        </figure>
        <?php endif; ?>

        <!-- Content -->
        <div class="article-content">

          <?php if ($tematik_active): ?>
            <?php foreach ($tematik_active['content'] as $paragraf): ?>
            <p><?php echo $paragraf; ?></p>
            <?php endforeach; ?>
          <?php else: ?>
          <p>
            Badan Pengelola Tabungan Perumahan Rakyat (BP Tapera) sedang menggodok
            skema contractual savings untuk menggantikan tabungan wajib bagi peserta
            Tapera. Ini dilakukan setelah putusan Mahkamah Konstitusi mengabulkan
            sebagian gugatan sehingga Tapera tak bersifat wajib bagi pekerja
            melainkan sukarela.
          </p>

          <div class="ten-second mb-10">
              <div class="heading mt-20">
                  
                  <img src="assets/images/icon/ten-second.png" alt="10 Detik">
              </div>

              <ul>
                  <li>
                      <a href="#">
                          Kasus Koperasi Swadharma Pematangsiantar melibatkan oknum pribadi dan bukan merupakan representasi kebijakan strategis korporasi PT BNI.
                      </a>
                  </li>

                  <li>
                      <a href="#">
                          Putusan Mahkamah Agung mewajibkan sembilan tergugat membayar ganti rugi Rp4,25 miliar secara proporsional.
                      </a>
                  </li>
              </ul>
          </div>

          <p>
            Komisioner BP Tapera Heru Pudyo Nugroho mengatakan, skema ini sudah
            diterapkan di beberapa negara termasuk negara-negara di Eropa Barat.
          </p>

          <p>
            "Nanti ke depan kalau berjalan, contractual saving ini kan sudah mature
            di beberapa negara, di banyak negara di Eropa Barat terutama," katanya
            saat ditemui di Kabupaten Tangerang, Senin (30/3/2026).
          </p>

          <!-- Zigzag Image -->
          <figure class="article-image zigzag">
            <img src="assets/images/news/news-1.jpg" alt="Pemain Timnas Indonesia saat menghadapi Bulgaria di GBK.">
            <figcaption>
              Pemain Timnas Indonesia saat menghadapi Bulgaria di GBK.
            </figcaption>
          </figure>

          <p>
            "(Contractual savings) sukarela. Ya misalkan kita ingin punya rumah Rp
            600 juta, kita pastikan dari peserta Tapera nabung dulu Rp 300 juta,
            dapat housing queue (antrean rumah). Nah nanti Rp 300 juta sisanya,
            setelah dia nabung Rp 300 juta terpenuhi, kita pinjami Rp 300 jutanya
            dengan suku bunga yang rendah, di bawah komersial," jelasnya.
          </p>

          <!-- Zigzag Box 2 -->
          <div class="article-read mb-10">
            <div class="thumb">
              <img src="assets/images/icon/read.png" width="50" height="36" alt="Baca Juga">
            </div>
            <div class="read-content">
              <p>Baca Juga</p>
              <ul>
                <li>
                  <a href="#">LPDP Targetkan Afirmasi Lebih dari 25% Tahun 2026</a>
                </li>
                <li>
                  <a href="#">LPDP Targetkan Afirmasi Lebih dari 25% Tahun 2027</a>
                </li>
              </ul>
            </div>
          </div>

          <p>
            Komisioner BP Tapera Heru Pudyo Nugroho mengatakan, skema ini sudah
            diterapkan di beberapa negara termasuk negara-negara di Eropa Barat.
          </p>
          <?php endif; ?>

          <!-- Tags -->
          <div class="article-tags">
            <div class="title mt-10">
              <h3>TAG</h3>
              <div class="title-line"></div>
            </div>

            <div class="tags-list">
              <a href="#">Industri</a>
              <a href="#">Pangan</a>
              <a href="#">Nasional</a>
              <a href="#">MBG</a>
              <a href="#">Prabowo</a>
            </div>
          </div>

          <!-- Comment -->
          <div class="comment mt-20 mb-30">
            <img src="assets/images/icon/comment.png" alt="Komentar" width="100%">
          </div>

        </div>
      </div>

    </div>
  </section>

  <?php /* WIDGET TEMATIK MOBILE DINONAKTIFKAN
  <!-- [BARU: Widget Artikel Tematik HUT  Jakarta ] -->
  <section class="artikel-tematik-mobile">
    <div class="artikel-tematik-grid">
      <div class="artikel-tematik-banner">
        <img src="assets/images/widget/head-jakarta.png" alt="HUT ke-499 Jakarta 22 Juni 2026">
      </div>
      <div class="title">
        <h4>JAKARTA 499 TAHUN</h4>
        <div class="title-line"></div>
      </div>
      <div class="tematik-items">
        <?php foreach ($tematik_articles as $slug => $artikel): ?>
        <a href="detail.php?artikel=<?php echo $slug; ?>" class="tematik-item">
          <img src="<?php echo $artikel['image']; ?>" alt="<?php echo htmlspecialchars($artikel['title']); ?>">
          <p><?php echo htmlspecialchars(tematik_truncate_words($artikel['title'])); ?></p>
          <span class="tematik-arrow">&#8250;</span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /END: Widget Artikel Tematik HUT ke-499 Jakarta -->
  */ ?>

  <section class="yoursay">
    <div class="yoursay-grid">
      <div class="title">
        <h4>Yoursay</h4>
        <div class="title-line"></div>
      </div>

      <div class="yoursay-item py-10">
        <img src="assets/images/news/news-5.png" alt="Opini 1">
        <div class="yoursay-text">
          <a href="">
            <h2>Opini: Kenaikan Harga Bahan Pokok Jadi Sorotan</h2>
          </a>
          <span>30 Menit</span>
        </div>
      </div>

      <div class="yoursay-item py-10">
        <img src="assets/images/news/news-4.jpg" alt="Opini 2">
        <div class="yoursay-text">
          <a href="">
            <h2>Analisis: Tren Startup Teknologi di Indonesia 2026</h2>
          </a>
          <span>30 Menit</span>
        </div>
      </div>

      <div class="yoursay-item py-10">
        <img src="assets/images/news/news-1.jpg" alt="Opini 3">
        <div class="yoursay-text">
          <a href="">
            <h2>Analisis: Tren Startup Teknologi di Indonesia 2026</h2>
          <a>  

          <span>30 Menit</span>
        </div>
      </div>

      <div class="yoursay-item py-10">
        <img src="assets/images/news/news-1.jpg" alt="Opini 4">
        <div class="yoursay-text">
          <a href="">
            <h2>Analisis: Tren Startup Teknologi di Indonesia 2026</h2>
          </a>
          <span>30 Menit</span>
        </div>
      </div>
    </div>
  </section>
  <!-- /END: Section Yoursay -->

  <section class="category mt-30">
    <div class="container">

      <!-- Judul -->
      <div class="title">
        <h3>Terkini</h3>
        <div class="title-line"></div>
      </div>

      <!-- Grid Utama -->
      <div class="category-grid mt-30">

        <div class="category-secondary">

          <div class="category-item">
            <img src="assets/images/news/news-2.jpg" alt="Berita 1">
            
            <div class="content">
              <h4>Kasih paham: Industri Pangan dan Chef wrong man lost the times?</h4>
              <span><i>Tekno</i>| 25 Menit Lalu</span>
            </div>
          </div>

          <div class="category-item">
            <img src="assets/images/news/news-3.jpg" alt="Berita 2">
            
            <div class="content">
              <h4>Menkop Tak Mau Ambil Pusing Soal Impor Pikap untuk Koperasi Desa Merah Putih</h4>
              <span><i>Otomotif</i>| 25 Menit Lalu</span>
            </div>
          </div>

          <div class="category-item">
            <img src="assets/images/news/news-4.jpg" alt="Berita 3">
            
            <div class="content">
              <h4>Kurniawan Dwi Yulianto Pimpin Seleksi Perdana 42 Pemain Timnas Indonesia U-17</h4>
              <span><i>Bola</i>| 25 Menit Lalu</span>
            </div>
          </div>

          <div class="category-item">
            <img src="assets/images/news/news-4.jpg" alt="Berita 3">
            
            <div class="content">
              <h4>Kurniawan Dwi Yulianto Pimpin Seleksi Perdana 42 Pemain Timnas Indonesia U-17</h4>
              <span><i>Bola</i>| 25 Menit Lalu</span>
            </div>
          </div>
          <div class="category-item">
            <img src="assets/images/news/news-4.jpg" alt="Berita 3">
            
            <div class="content">
              <h4>Kurniawan Dwi Yulianto Pimpin Seleksi Perdana 42 Pemain Timnas Indonesia U-17</h4>
              <span><i>Bola</i>| 25 Menit Lalu</span>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section>

  <?php if ($tematik_active): ?>
  </div><!-- /.tematik-ornamen -->
  <?php endif; ?>

  <section class="foot">
  <div class="container">

    <div class="foot-top">
      <img src="assets/images/icon/logo_mobimoto_2026.svg" alt="Logo Bottom">
    </div>

    <div class="line"></div>

    <div class="foot-menu">
      <ul>
        <li><a href="">Redaksi</a></li>
        <li><a href="">Kontak</a></li>
        <li><a href="">Tentang Kami</a></li>
        <li><a href="">Karir</a></li>
      </ul>

      <ul>
        <li><a href="">Pedoman Media Siber</a></li>
        <li><a href="">Kebijakan Privasi</a></li>
        <li><a href="">Saran dan Kritik</a></li>
        <li><a href="">Site Map</a></li>
      </ul>
    </div>

    <div class="line"></div>

    <div class="foot-bottom">
      <div class="app-text">
        <p>Dapatkan Aplikasi <br>Suara.com</p>
      </div>

      <div class="app-badge">
        <img src="assets/images/icon/playstore.svg" alt="Playstore">
        <img src="assets/images/icon/iosstore.svg" alt="Ios store">
      </div>
    </div>

  </div>
  </section>

  <section class="foot-partner">
  <div class="container">

    <!-- PARTNER LOGO -->
    <div class="partner-list">
      <ul>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/arkadia.svg" alt="Arkadia"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/suara.svg" alt="Suara"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/mata-mata.svg" alt="Mata Mata"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/bolatimes.svg" alt="Bolatimes"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/hitekno.svg" alt="Hitekno"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/dewiku.svg" alt="Dewiku"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/guideku.svg" alt="Guideku"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/mobimoto.svg" alt="Mobimoto"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/himedik.svg" alt="Himedik"></a></li>
      </ul>
    </div>

    <div class="line-bottom"></div>

    <!-- SOCIAL -->
    <div class="social-list">
      <ul>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-google.svg" alt="Google"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-fb.svg" alt="Facebook"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-thread.svg" alt="Thread"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-x.svg" alt="X"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-youtube.svg" alt="Youtube"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-instagram.svg" alt="Instagram"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-tiktok.svg" alt="Tiktok"></a></li>
      </ul>
    </div>

  </div>
  </section>

  <section class="footer">
    <p>© 2026 MobiMoto.com - All Rights Reserved.</p>
  </section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
const hamburger = document.getElementById("hamburger");
const menu = document.getElementById("menu");
const overlay = document.getElementById("overlay");
const closeBtn = document.getElementById("closeBtn");

// OPEN
hamburger.onclick = () => {
  menu.classList.add("active");
  overlay.classList.add("active");
  hamburger.classList.add("active");
};

// CLOSE
function closeMenu() {
  menu.classList.remove("active");
  overlay.classList.remove("active");
  hamburger.classList.remove("active");
}

overlay.onclick = closeMenu;
closeBtn.onclick = closeMenu;

// SUBMENU
document.querySelectorAll(".menu-link").forEach(item => {
  item.onclick = function() {
    const parent = this.parentElement;

    document.querySelectorAll(".menu-list li").forEach(li => {
      if (li !== parent) li.classList.remove("open");
    });

    parent.classList.toggle("open");
  };
});
</script>

<script>
document.querySelectorAll('.has-submenu .menu-link').forEach(function(menu) {
  menu.addEventListener('click', function(e) {

    const rect = this.getBoundingClientRect();
    const clickX = e.clientX;

    if (clickX > rect.right - 60) {
      e.preventDefault(); 
      e.stopPropagation();

      const parent = this.closest('.has-submenu');

      document.querySelectorAll('.has-submenu').forEach(function(item) {
        if (item !== parent) item.classList.remove('active');
      });

      parent.classList.toggle('active');
    }
  });
});
</script>

</script>

<script>
  (() => {
  const openBtn = document.getElementById('search-btn');
  const closeBtn = document.getElementById('close-search');
  const overlay = document.getElementById('search-overlay');

  if (!openBtn || !closeBtn || !overlay) return;

  openBtn.onclick = () => {
    overlay.classList.add('active');
    setTimeout(() => {
      overlay.querySelector('input')?.focus();
    }, 200);
  };

  closeBtn.onclick = () => {
    overlay.classList.remove('active');
  };
})();
</script>

<script>
var swiper = new Swiper(".movieSwiper", {
  slidesPerView: "auto",
  spaceBetween: 15,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

  const trigger = document.querySelector(".author-trigger");
  const popup = document.querySelector(".author-popup");

  // klik nama
  trigger.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();

    popup.style.display =
      popup.style.display === "block"
        ? "none"
        : "block";
  });

  // klik luar = tutup
  document.addEventListener("click", function (e) {

    if (!e.target.closest(".writer-info")) {
      popup.style.display = "none";
    }

  });

});
</script>
</body>
</html>
