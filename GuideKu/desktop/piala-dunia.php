<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="assets/css/style-1.0.1.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.3.2/css/flag-icons.min.css"/>
</head>

<body>

  <header class="header">
    <div class="container">

        <div class="logo">
          <a href="index.php">
            <img src="assets/images/icon/logo_guideku_2026.svg" alt="Logo Website" width="237" height="25">
          </a>
          
        </div>

        <div class="search">
          <input type="text" placeholder="Cari...">
        </div>

        <div class="account">
          <button href="#" id="account-btn"><img src="assets/images/icon/user-white.svg" alt=""></button>

          <div class="account-popup">
            <div class="info-account"><img src="assets/images/icon/user-white.svg" alt="">
            </div>
            <ul>
              <li class="send-writers"><a href="#">Kirim Tulisan</a></li>
              <li><a href="#">Notifikasi</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
  
        
        <!-- HAMBURGER -->
        <button class="hamburger" id="hamburger">
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
          <ul class="menu-list">
          
            <a href="" class="user"><img src="assets/images/icon/menu-user.svg" alt=""></a>
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
                <i><img src="assets/images/icon/menu-bisnis.svg" alt=""></i>
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
                <i><img src="assets/images/icon/menu-bola.svg" alt=""></i>
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
                <i><img src="assets/images/icon/menu-sport.svg" alt=""></i>
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
                <i><img src="assets/images/icon/menu-lifestyle.svg" alt=""></i>
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
                <i><img src="assets/images/icon/menu-entertainment.svg" alt=""></i>
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
                <i><img src="assets/images/icon/menu-otomotif.svg" alt=""></i>
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
                <i><img src="assets/images/icon/menu-tekno.svg" alt=""></i>
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
                <i><img src="assets/images/icon/menu-healt.svg" alt=""></i>
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
              <div class="menu-link"><i><img src="assets/images/icon/menu-foto.svg" alt=""></i><a href="kanal.php">Foto</a></div>
            </li>
            <li>
              <div class="menu-link"><i><img src="assets/images/icon/menu-video.svg" alt=""></i><a href="kanal.php">Video</a></div>
            </li>
            <li>
              <div class="menu-link"><i><img src="assets/images/icon/menu-opini.svg" alt=""></i><a href="kanal.php">Opini</a></div>
            </li>
          </ul>
          <ul class="regional mt-20">
            <li class="title">
              <a href="regional.php">Regional</a>
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
                <img src="assets/images/icon/playstore.svg" alt="">
              </div>
              <div>
                <img src="assets/images/icon/iosstore.svg" alt="">
              </div>
            </div>
          
          </div>
          
        </div>

  </header>

  <div class="menu-scroll">
      <div class="container">
        

        <div class="menu-wrapper">
          <a href="index.php">Home</a>
          <a href="kanal.php">Nasional</a>
          <a href="kanal.php">Ekonomi</a>
          <a href="kanal.php">Bola</a>
          <a href="kanal.php">Otomotif</a>
          <a href="kanal.php">Entertainment</a>
          <a href="#">Tekno</a>
          <a href="#">Gaya Hidup</a>
          <a href="#">Sport</a>
          <a href="#">Indeks</a>
        </div>
      </div>
  </div>

  <!-- menu piala dunia -->
  <div class="worldcup-menu">
    <div class="container">

        <div class="menu-box">

        <ul>
            <li>
                <a href="#">
                 Piala Dunia
                </a>
            </li>
            <li>
                <a href="#">
                 Profile Tim
                </a>
            </li>    
            <li>
                <a href="#">
                    Tuan Rumah
                </a>
            </li>

            <li>
                <a href="#">
                    Luar Stadion
                </a>
            </li>

            <li>
                <a href="#">
                    Legenda
                </a>
            </li>

            <li>
                <a href="#">
                    Jadwal Pertandingan
                </a>
            </li>

            <li>
                <a href="#">
                    Klasmen
                </a>
            </li>

            <li>
                <a href="#">
                    Life Report
                </a>
            </li>

        </ul>

        </div>

    </div>
  </div> 

  <div class="page-worldcup">
     <img src="assets/images/widget/piala-dunia.png" alt="Page">
  </div>  

  <section class="detail mb-30">
    <div class="container">
      <div class="read">
        <div class="detail-wrapper">

            <!-- KIRI -->
            <div class="detail-content">

              <div class="main-wordlcup mb-30">

                <!-- TAB -->
                <div class="worldcup-tabs">
                    <button class="tab-btn active" data-tab="hasil">
                    Hasil Pertandingan
                    </button>

                    <button class="tab-btn" data-tab="jadwal">
                    Jadwal Pertandingan
                    </button>

                    <button class="tab-btn" data-tab="klasmen">
                    Klasmen
                    </button>

                    <button class="tab-btn" data-tab="topscore">
                    Top Score
                    </button>
                </div>

                <!-- HASIL -->
                <div class="tab-content active" id="hasil">

                    <button class="slider-btn prev">&#10094;</button>

                    <div class="worldcup-slider">

                    <!-- CARD -->
                    <div class="match-card">
                        <h3>Piala Dunia</h3>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-br"></span>
                            <span>Brazil</span>
                        </div>
                        <strong>3</strong>
                        </div>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-ar"></span>
                            <span>Argentina</span>
                        </div>
                        <strong>2</strong>
                        </div>

                        <div class="match-date">
                        20 Mei 2026
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="match-card">
                        <h3>Piala Dunia</h3>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-fr"></span>
                            <span>France</span>
                        </div>
                        <strong>1</strong>
                        </div>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-de"></span>
                            <span>Germany</span>
                        </div>
                        <strong>1</strong>
                        </div>

                        <div class="match-date">
                        21 Mei 2026
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="match-card">
                        <h3>Piala Dunia</h3>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-es"></span>
                            <span>Spain</span>
                        </div>
                        <strong>2</strong>
                        </div>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-pt"></span>
                            <span>Portugal</span>
                        </div>
                        <strong>0</strong>
                        </div>

                        <div class="match-date">
                        22 Mei 2026
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="match-card">
                        <h3>Piala Dunia</h3>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-id"></span>
                            <span>Indonesia</span>
                        </div>
                        <strong>1</strong>
                        </div>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-jp"></span>
                            <span>Japan</span>
                        </div>
                        <strong>2</strong>
                        </div>

                        <div class="match-date">
                        23 Mei 2026
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="match-card">
                        <h3>Piala Dunia</h3>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-us"></span>
                            <span>USA</span>
                        </div>
                        <strong>0</strong>
                        </div>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-gb"></span>
                            <span>England</span>
                        </div>
                        <strong>1</strong>
                        </div>

                        <div class="match-date">
                        24 Mei 2026
                        </div>
                    </div>

                    </div>

                    <button class="slider-btn next">&#10095;</button>
                    <div class="lihat-semua">
                        <a href="hasil-pertandingan.php">Lihat Selengkapnya →</a>
                    </div>

                </div>

                <!-- JADWAL -->
                <div class="tab-content" id="jadwal">

                    <button class="slider-btn prev">&#10094;</button>

                    <div class="worldcup-slider">

                    <div class="match-card">
                        <h3>Jadwal Piala Dunia</h3>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-nl"></span>
                            <span>Netherlands</span>
                        </div>
                        <small>20:00</small>
                        </div>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-it"></span>
                            <span>Italy</span>
                        </div>
                        </div>

                        <div class="match-date">
                        28 Mei 2026
                        </div>
                    </div>

                    <div class="match-card">
                        <h3>Jadwal Piala Dunia</h3>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-kr"></span>
                            <span>South Korea</span>
                        </div>
                        <small>22:00</small>
                        </div>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-mx"></span>
                            <span>Mexico</span>
                        </div>
                        </div>

                        <div class="match-date">
                        29 Mei 2026
                        </div>
                    </div>
                    <div class="match-card">
                        <h3>Jadwal Piala Dunia</h3>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-my"></span>
                            <span>Malaysia</span>
                        </div>
                        <small>22:00</small>
                        </div>

                        <div class="team-row">
                        <div class="team-left">
                            <span class="flag fi fi-id"></span>
                            <span>Indonesia</span>
                        </div>
                        </div>

                        <div class="match-date">
                        29 Mei 2026
                        </div>
                    </div>

                    </div>

                    <button class="slider-btn next">&#10095;</button>
                    <div class="lihat-semua">
                        <a href="jadwal-pertandingan.php">Lihat Selengkapnya →</a>
                    </div>

                </div>

                <!-- Klasmen -->
                <div class="tab-content" id="klasmen">

                    <button class="slider-btn prev">&#10094;</button>

                    <div class="worldcup-slider">

                        <div class="klasmen">

                        <div class="klasemen-box">

                            <!-- Header -->
                            <div class="klasemen-header">
                                <h2>Klasemen Piala Dunia</h2>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">

                                <table class="klasemen-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tim</th>
                                            <th>M</th>
                                            <th>M</th>
                                            <th>S</th>
                                            <th>K</th>
                                            <th>GM</th>
                                            <th>GK</th>
                                            <th>+/-</th>
                                            <th>Poin</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td class="team-name">
                                                <span class="flag fi fi-br"></span>
                                                Brazil
                                            </td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>7</td>
                                            <td>3</td>
                                            <td>+4</td>
                                            <td class="point">7</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td class="team-name">
                                                <span class="flag fi fi-ar"></span>
                                                Argentina
                                            </td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>6</td>
                                            <td>4</td>
                                            <td>+2</td>
                                            <td class="point">6</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td class="team-name">
                                                <span class="flag fi fi-fr"></span>
                                                France
                                            </td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td class="point">4</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td class="team-name">
                                                <span class="flag fi fi-de"></span>
                                                Germany
                                            </td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>8</td>
                                            <td>-6</td>
                                            <td class="point">1</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                        </div>

                    </div>

                    <button class="slider-btn next">&#10095;</button>
                    <div class="lihat-semua">
                        <a href="klasemen.php">Lihat Selengkapnya →</a>
                    </div>
                </div> 

                <div class="tab-content" id="topscore">

                <div class="worldcup-slider">

                    <div class="topscore-card">

                        <div class="topscore-header">
                            <h3>Top Skor</h3>
                        </div>

                        <table class="topscore-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pemain</th>
                                    <th>Negara</th>
                                    <th>Gol</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Kylian Mbappé</td>
                                    <td>
                                        <div class="country-name">
                                            <span class="flag fi fi-fr"></span>
                                            <span>France</span>
                                        </div>
                                    </td>
                                    <td>8</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Harry Kane</td>
                                    <td>
                                        <div class="country-name">
                                            <span class="flag fi fi-gb"></span>
                                            <span>England</span>
                                        </div>
                                    </td>
                                    <td>6</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Vinícius Jr</td>
                                    <td>
                                        <div class="country-name">
                                            <span class="flag fi fi-br"></span>
                                            <span>Brazil</span>
                                        </div>
                                    </td>
                                    <td>5</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Lautaro Martínez</td>
                                    <td>
                                        <div class="country-name">
                                            <span class="flag fi fi-ar"></span>
                                            <span>Argentina</span>
                                        </div>
                                    </td>
                                    <td>4</td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Memphis Depay</td>
                                    <td>
                                        <div class="country-name">
                                            <span class="flag fi fi-nl"></span>
                                            <span>Netherlands</span>
                                        </div>
                                    </td>
                                    <td>4</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>
                <div class="lihat-semua">
                  <a href="topscore.php">Lihat Selengkapnya →</a>
                </div>
                </div>

              
                </div>
                <div class="main-news mt-30">
                <a href="detail.html">
                  <p>News <span class="main-divider">| Ekonomi</span> 
                    <span class="main-time">Senin, 24 November 2025 | 35 Menit</span>
                  </p> 
                  <h1>Pemain Timnas Indonesia Akan Menghadapi Brazil Di Pembukaan Piala Dunia</h1>
                  <img src="assets/images/news/news-1.jpg" alt="Apple AI" class="mt-10">
                  
                </a>
              </div>
              
              <!-- LIST ARTICLE KANAL -->
              <div class="article-kanal-list mt-30">

                <div class="article-kanal-item">
                  <img src="assets/images/news/news-9.jpeg" alt="">
                  <div class="article-kanal-info">
                    <h3>Daftar Lengkap Progres Lahan Koperasi Merah Putih se-Banten: Kabupaten Serang Terbanyak</h3>
                    <h4>Ekonomi <span>| 2 Jam Lalu</span></h4>
                  </div>
                </div>

                <div class="article-kanal-item">
                  <img src="assets/images/news/news-1.jpg" alt="">
                  <div class="article-kanal-info">
                    <h3>Jadwal Imsak dan Buka Puasa Bogor, Depok dan Cianjur Sabtu 28 Februari 2026</h3>
                    <h4>Ekonomi <span>| 2 Jam Lalu</span></h4>
                  </div>
                </div>

                <div class="article-kanal-item">
                  <img src="assets/images/news/news-1.jpg" alt="">
                  <div class="article-kanal-info">
                    <h3>Nama Anak Ketiga Lesti Kejora dan Rizky Billar Belum Juga Diumumkan, Ini Sedikit Bocorannya</h3>
                    <h4>Ekonomi <span>| 2 Jam Lalu</span></h4>
                  </div>
                </div>

                <div class="article-kanal-item">
                  <img src="assets/images/news/news-1.jpg" alt="">
                  <div class="article-kanal-info">
                    <h3>Jadwal Imsakiyah Bukittinggi Sabtu 28 Februari 2026, Simak Waktu Sahur dan Berbuka</h3>
                    <h4>Ekonomi <span>| 2 Jam Lalu</span></h4>
                  </div>
                </div>

                <div class="article-kanal-item">
                  <img src="assets/images/news/news-1.jpg" alt="">
                  <div class="article-kanal-info">
                    <h3>Jadwal Imsakiyah Bukittinggi Sabtu 28 Februari 2026, Simak Waktu Sahur dan Berbuka</h3>
                    <h4>Ekonomi <span>| 2 Jam Lalu</span></h4>
                  </div>
                </div>

                <div class="article-kanal-item">
                  <img src="assets/images/news/news-1.jpg" alt="">
                  <div class="article-kanal-info">
                    <h3>Jadwal Imsakiyah Bukittinggi Sabtu 28 Februari 2026, Simak Waktu Sahur dan Berbuka</h3>
                   <h4>Ekonomi <span>| 2 Jam Lalu</span></h4>
                  </div>
                </div>

                <div class="article-kanal-item">
                  <img src="assets/images/news/news-1.jpg" alt="">
                  <div class="article-kanal-info">
                    <h3>Jadwal Imsakiyah Bukittinggi Sabtu 28 Februari 2026, Simak Waktu Sahur dan Berbuka</h3>
                   <h4>Ekonomi <span>| 2 Jam Lalu</span></h4>
                  </div>
                </div>

                <div class="article-kanal-item">
                  <img src="assets/images/news/news-1.jpg" alt="">
                  <div class="article-kanal-info">
                    <h3>Jadwal Imsak dan Buka Puasa Bogor, Depok dan Cianjur Sabtu 28 Februari 2026</h3>
                    <h4>Ekonomi <span>| 2 Jam Lalu</span></h4>
                  </div>
                </div>

                <div class="article-kanal-item">
                  <img src="assets/images/news/news-1.jpg" alt="">
                  <div class="article-kanal-info">
                    <h3>Jadwal Imsak dan Buka Puasa Bogor, Depok dan Cianjur Sabtu 28 Februari 2026</h3>
                    <h4>Ekonomi <span>| 2 Jam Lalu</span></h4>
                  </div>
                </div>

              </div>

              <div class="pagination mt-30 mb-30">
                <a href="#" class="page-arrow disabled">&lt;</a>
                <a href="#" class="page-number active">1</a>
                <a href="#" class="page-number">2</a>
                <a href="#" class="page-number">3</a>
                <a href="#" class="page-arrow">&gt;</a>
              </div>
                            

             </div>

             <div class="content-side">
                <!-- Banner -->
                <img src="assets/images/banner/300x600.png" alt="Iklan Banner 300x600 Pikiran Rakyat">

                <!-- Side category / news list -->
                <div class="side-category">
                <h2>Diskusi Terpanas</h2>
                <div class="side-category-news">
                    <span class="news-number">1</span>
                    <div class="news-content">
                    <h3 class="news-title">Lorem Ipsum is Dummy Text</h3>
                    <div class="news-meta">
                        <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
                    </div>
                    </div>
                </div>

                <div class="side-category-news">
                    <span class="news-number">2</span>
                    <div class="news-content">
                    <h3 class="news-title">Dolor Sit Amet Consectetur</h3>
                    <div class="news-meta">
                    <div class="news-meta">
                        <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
                        </div>
                        
                    </div>
                    </div>
                </div>

                <div class="side-category-news">
                    <span class="news-number">3</span>
                    <div class="news-content">
                    <h3 class="news-title">Kisah Adik Darius Sinathrya Masuk Islam, Tersentuh Perjalanan Nabi Muhammad</h3>
                    <div class="news-meta">
                        <div class="news-meta">
                        <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
                        </div>
                            
                    </div>
                    </div>
                </div>

                <div class="side-category-news">
                    <span class="news-number">4</span>
                    <div class="news-content">
                    <h3 class="news-title">Kisah Adik Darius Sinathrya Masuk Islam, Tersentuh Perjalanan Nabi Muhammad</h3>
                    <div class="news-meta">
                        <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
                    </div>
                    </div>
                </div>

                <div class="side-category-news">
                    <span class="news-number">5</span>
                    <div class="news-content">
                    <h3 class="news-title">Snoop Dogg Bikin Heboh di Swansea</h3>
                    <div class="news-meta">
                        <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
                    </div> 
                    </div>
                </div>


                <!-- Tambahkan side-category-news lain sesuai kebutuhan -->
                </div>

                <div class="liks">
                <div class="title mt-10">
                    <h4>Liks</h4>
                    <div class="title-line"></div>
                </div> 

                <div class="liks-item">
                    <img src="assets/images/news/news-1.jpg" alt="Berita Liks 1">

                    <span class="liks-category">News</span>
                    <h3 class="liks-title">Lorem Ipsum Is Dummy Text</h3>
                    <span class="liks-time">35 Menit Lalu</span>
                </div>

                </div>

                <div class="sidebar-popular">
                <h2>
                <i>
                    <img src="assets/images/icon/logo-populer.png" alt="Populer">
                </i>
                Terpopuler
                </h2>

                <ul>
                <li class="popular-item">
                    <a href="">
                    <h3>Industri Pangan dan Chef memberikan makanan MBG Berkualitas</h3>
                    <span>News | <i>35 Menit</i></span>
                    </a>
                </li>

                <li class="popular-item">
                    <a href="">
                    <h3>Industri Pangan dan Chef memberikan makanan Basi</h3>
                    <span>News | <i>35 Menit</i></span>
                    </a>
                </li>

                <li class="popular-item">
                    <a href="">
                    <h3>Industri Pangan dan Chef memberikan makanan MBG Berkualitas</h3>
                    <span>News | <i>35 Menit</i></span>
                    </a>
                </li>

                <li class="popular-item">
                    <a href="">
                    <h3>Industri Pangan dan Chef memberikan makanan MBG Berkualitas</h3>
                    <span>News | <i>35 Menit</i></span>
                    </a>
                </li>

                <li class="popular-item">
                    <a href="">
                    <h3>Industri Pangan dan Chef memberikan makanan MBG Berkualitas</h3>
                    <span>News | <i>35 Menit</i></span>
                    </a>
                </li>
                </ul>
                </div>
            </div>

        </div>

      </div>
    </div>
  </section>


  <section class="foot-info">
    <div class="container">

      <div class="foot-grid">

        <div class="foot-logo">
          <img src="assets/images/icon/logo_guideku_2026.svg" width="200">
        </div>

        <div class="foot-col">
          <ul>
            <li><a href="#">Redaksi</a></li>
            <li><a href="#">Kontak</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Karir</a></li>
          </ul>
          <ul>
            <li><a href="#">Pedoman Media Siber</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Saran dan Kritik</a></li>
            <li><a href="#">Site Map</a></li>
          </ul>
        </div>

        <div class="foot-aps">
          <h4>Dapatkan Aplikasi Suara.com</h4>
          <div class="app-store-wrapper">
              <div class="app-store">
                <img src="assets/images/icon/playstore.svg" alt="Play Store">
              </div>
              <div class="app-store">
                <img src="assets/images/icon/iosstore.svg" alt="Ios Store">
              </div>
          </div>
          
        </div>

      </div>

    </div>
  </section>
  
  <div class="foot-network">
    <div class="container">
      <div class="foot-network-icon">
        <ul>
            <li>
              <a href="#">
                <img src="assets/images/icon-partner/arkadia.svg" alt="Facebook">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="assets/images/icon-partner/suara.svg" alt="Twitter">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="assets/images/icon-partner/mata-mata.svg" alt="Instagram">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="assets/images/icon-partner/bolatimes.svg" alt="YouTube">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="assets/images/icon-partner/hitekno.svg" alt="YouTube">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="assets/images/icon-partner/dewiku.svg" alt="YouTube">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="assets/images/icon-partner/mobimoto.svg" alt="YouTube">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="assets/images/icon-partner/himedik.svg" alt="YouTube">
              </a>
            </li>
          </ul>
      </div>

      <div class="foot-sosmed">
        <ul>
          <li>
            <a href="#">
              <img src="assets/images/icon-sosmed/icon-google.svg" alt="Facebook">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-sosmed/icon-fb.svg" alt="Facebook">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-sosmed/icon-thread.svg" alt="Facebook">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-sosmed/icon-x.svg" alt="Facebook">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-sosmed/icon-youtube.svg" alt="Facebook">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-sosmed/icon-instagram.svg" alt="Facebook">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-sosmed/icon-tiktok.svg" alt="Facebook">
            </a>
          </li>
        </ul>
      </div>
    </div>
        
  </div>
  <!-- Bagian Bawah -->

  <footer class="footer py-5">
    <div class="container">
      <p>© 2026 GuideKu.com - All Rights Reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
const header = document.querySelector('.header');

let lastScroll = 0;
let ticking = false;

window.addEventListener('scroll', () => {
  if (!ticking) {
    window.requestAnimationFrame(() => {
      handleScroll();
      ticking = false;
    });
    ticking = true;
  }
});

function handleScroll() {
  const currentScroll = window.scrollY;

  // aktifin fixed
  if (currentScroll > 300) {
    header.classList.add('fixed', 'shadow');

    if (currentScroll > lastScroll) {
      // scroll ke bawah → tetap tampil (NO HIDE)
      header.classList.remove('hide');
      header.classList.add('show');
    } else {
      // scroll ke atas → tetap tampil juga
      header.classList.remove('hide');
      header.classList.add('show');
    }

  } else {
    header.classList.remove('fixed', 'shadow', 'show', 'hide');
  }

  lastScroll = currentScroll;
}

</script>
  
<script>
document.addEventListener("DOMContentLoaded", function () {
  const menu = document.querySelector(".menu-scroll");
  const header = document.querySelector(".header");

  const headerHeight = header.offsetHeight;
  const menuOffset = menu.offsetTop;

  window.addEventListener("scroll", function () {
    if (window.scrollY >= menuOffset - headerHeight) {
      menu.classList.add("fixed");
      menu.style.top = headerHeight + "px";
    } else {
      menu.classList.remove("fixed");
      menu.style.top = "0";
    }
  });

  // biar aman kalau resize
  window.addEventListener("resize", function () {
    menu.style.top = header.offsetHeight + "px";
  });
});
</script>
  
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
  document.addEventListener('DOMContentLoaded', function () {

    const slider = document.querySelector('.trending-slider');
    const prev = document.querySelector('.trending-prev');
    const next = document.querySelector('.trending-next');

    if (!slider || !prev || !next) return;

    let position = 0;
    const step = 200;

    function updateButtons() {
      if (position >= 0) {
        prev.style.display = 'none';
      } else {
        prev.style.display = 'block';
      }

      // batas kanan (manual)
      const maxScroll = slider.scrollWidth - slider.parentElement.clientWidth;

      if (Math.abs(position) >= maxScroll) {
        next.style.display = 'none';
      } else {
        next.style.display = 'block';
      }
    }

    next.onclick = () => {
      const maxScroll = slider.scrollWidth - slider.parentElement.clientWidth;

      position -= step;

      if (Math.abs(position) > maxScroll) {
        position = -maxScroll;
      }

      slider.style.transform = `translateX(${position}px)`;
      slider.style.transition = '0.3s ease';

      updateButtons();
    };

    prev.onclick = () => {
      position += step;

      if (position > 0) {
        position = 0;
      }

      slider.style.transform = `translateX(${position}px)`;
      slider.style.transition = '0.3s ease';

      updateButtons();
    };

    // INIT
    updateButtons();

  });

  const accountBtn = document.getElementById('account-btn');
  const account = document.querySelector('.account');

  accountBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    account.classList.toggle('active');
  });

  document.addEventListener('click', function() {
    account.classList.remove('active');
  });
  
  </script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.querySelector(".sidebar-popular");
  const footer = document.querySelector(".foot-info");
  const liks = document.querySelector(".liks");

  const headerOffset = 20;

  window.addEventListener("scroll", function () {
    const scrollY = window.scrollY;
    const sidebarHeight = sidebar.offsetHeight;

    const footerTop = footer.getBoundingClientRect().top + window.scrollY;
    const liksBottom = liks.offsetTop + liks.offsetHeight;

    const sidebarTop = scrollY + headerOffset;
    const sidebarBottom = sidebarTop + sidebarHeight;

    // RESET
    sidebar.classList.remove("is-sticky", "is-stop");

    if (sidebarTop <= liksBottom + 10) {
      return; 
    }

    if (scrollY > sidebar.offsetTop - headerOffset) {
      sidebar.classList.add("is-sticky");
    }

    if (sidebarBottom >= footerTop - 10) {
      sidebar.classList.remove("is-sticky");
      sidebar.classList.add("is-stop");
    }
  });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

  // AUTHOR POPUP
  const trigger = document.querySelector(".author-trigger");
  const popup = document.querySelector(".author-popup");

  if (trigger && popup) {

    trigger.addEventListener("click", function (e) {
      e.preventDefault();

      popup.style.display =
        popup.style.display === "block"
          ? "none"
          : "block";
    });

    document.addEventListener("click", function (e) {

      if (!e.target.closest(".article-profile")) {
        popup.style.display = "none";
      }

    });

  }

  // TAB
  const tabButtons = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");

  tabButtons.forEach(button => {

    button.addEventListener("click", () => {

      tabButtons.forEach(btn => {
        btn.classList.remove("active");
      });

      tabContents.forEach(content => {
        content.classList.remove("active");
      });

      button.classList.add("active");

      document
        .getElementById(button.dataset.tab)
        .classList.add("active");

    });

  });

  // SLIDER
  document.querySelectorAll(".tab-content").forEach(content => {

    const slider = content.querySelector(".worldcup-slider");
    const next = content.querySelector(".next");
    const prev = content.querySelector(".prev");

    if (slider && next && prev) {

      next.addEventListener("click", () => {
        slider.scrollLeft += 300;
      });

      prev.addEventListener("click", () => {
        slider.scrollLeft -= 300;
      });

    }

  });

});
</script>

</body>
</html>
