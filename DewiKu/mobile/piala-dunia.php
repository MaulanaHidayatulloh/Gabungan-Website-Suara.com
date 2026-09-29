<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanal</title>
  <link rel="stylesheet" href="assets/css/style-1.0.1.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css">
</head>

<body>

  <header class="header">
    <div class="container">

      <div class="logo">
        <a href="index.html">
          <img src="assets/images/icon/logo_dewiku_2026.svg" alt="Logo Website" width="180px" height="21px">
        </a>
        
      </div>

      <div class="search">
        <button class="search-btn" id="search-btn">
          <img src="assets/images/icon/search.svg" width="20">
        </button>
      </div>

      <div class="search-overlay" id="search-overlay">
        <div class="search-header">
          <button class="back-btn" id="close-search">←</button>
          <input type="text" placeholder="Cari berita...">
        </div>
        <div class="search-content">
          <div class="trending">
            <i><img src="assets/images/icon/trending.svg" alt=""></i>
            <span>Trending</span>
          </div>
          <ul>
            <li>
              <a href="">Indonesia</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt=""></span>
            </li>
            <li>
              <a href="">Kamerun</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt=""></span>
            </li>
            <li>
              <a href="">WFH</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt=""></span>
            </li>
            <li>
              <a href="">Honda</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt=""></span>
            </li>
            <li>
              <a href="">Malaysia</a>
              <span><img src="assets/images/icon/icon-chart.webp" alt=""></span>
            </li>
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
              <a href="piala-dunia.php">Piala Dunia</a>
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
    <div class="menu-wrapper">
      <a href="#">Nasional</a>
      <a href="#">Ekonomi</a>
      <a href="#">Bola</a>
      <a href="#">Otomotif</a>
      <a href="#">Entertainment</a>
      <a href="#">Tekno</a>
      <a href="#">Gaya Hidup</a>
      <a href="#" id="regional-btn">Regional</a>
    </div>
  </div>

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
   
 <section class="trending-menu mt-10" style="display:none">
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

<div class="main-wordlcup">

    <!-- TAB MENU -->
    <div class="worldcup-tabs">
        <button class="tab-btn active" data-tab="hasil">Hasil Pertandingan</button>
        <button class="tab-btn" data-tab="jadwal">Jadwal Pertandingan</button>
        <button class="tab-btn" data-tab="klasmen">Klasemen</button>
        <button class="tab-btn" data-tab="topscore">Top Score</button>
    </div>

    <!-- HASIL -->
    <div class="tab-content active" id="hasil">

        <div class="slider-wrapper">

            <button class="slider-btn prev">&#10094;</button>

            <div class="worldcup-slider">

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

                    <div class="match-date">20 Mei 2026</div>
                </div>

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

                    <div class="match-date">21 Mei 2026</div>
                </div>

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

                    <div class="match-date">22 Mei 2026</div>
                </div>

            </div>

            <button class="slider-btn next">&#10095;</button>

        </div>

        <div class="lihat-semua">
            <a href="hasil-pertandingan.php">Lihat Selengkapnya →</a>
        </div>

    </div>

    <!-- JADWAL -->
    <div class="tab-content" id="jadwal">

        <div class="slider-wrapper">

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

                    <div class="match-date">28 Mei 2026</div>
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

                    <div class="match-date">29 Mei 2026</div>
                </div>

            </div>

            <button class="slider-btn next">&#10095;</button>

        </div>

        <div class="lihat-semua">
            <a href="jadwal-pertandingan.php">Lihat Selengkapnya →</a>
        </div>

    </div>

    <!-- KLASMEN -->
    <div class="tab-content" id="klasmen">

        <div class="worldcup-standings">

            <div class="standings-header">
                <h2>Klasemen Piala Dunia</h2>
            </div>

            <div class="standings-table">

                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tim</th>
                            <th>Main</th>
                            <th>Menang</th>
                            <th>Seri</th>
                            <th>Kalah</th>
                            <th>GM</th>
                            <th>GK</th>
                            <th>+/-</th>
                            <th>Poin</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr class="top-team">
                            <td>1</td>
                            <td class="team">
                                <img src="https://flagcdn.com/w40/br.png" alt="">
                                Brazil
                            </td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>7</td>
                            <td>3</td>
                            <td>+4</td>
                            <td><strong>7</strong></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td class="team">
                                <img src="https://flagcdn.com/w40/ar.png" alt="">
                                Argentina
                            </td>
                            <td>3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td>6</td>
                            <td>4</td>
                            <td>+2</td>
                            <td><strong>6</strong></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td class="team">
                                <img src="https://flagcdn.com/w40/fr.png" alt="">
                                France
                            </td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>5</td>
                            <td>5</td>
                            <td>0</td>
                            <td><strong>4</strong></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td class="team">
                                <img src="https://flagcdn.com/w40/de.png" alt="">
                                Germany
                            </td>
                            <td>3</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>8</td>
                            <td>-6</td>
                            <td><strong>1</strong></td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- TOP SKOR -->
    <div class="tab-content" id="topscore">

        <div class="worldcup-topscore">

            <div class="standings-header">
                <h2>Top Skor</h2>
            </div>

            <div class="standings-table">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pemain</th>
                            <th>Negara</th>
                            <th>Gol</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr class="rank-1">
                            <td>1</td>
                            <td>Kylian Mbappé</td>
                            <td class="country">
                                <span class="flag fi fi-fr"></span>
                                France
                            </td>
                            <td><strong>8</strong></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Harry Kane</td>
                            <td class="country">
                                <span class="flag fi fi-gb"></span>
                                England
                            </td>
                            <td>6</td>
                        </tr>

                        <tr class="rank-3">
                            <td>3</td>
                            <td>Vinícius Jr</td>
                            <td class="country">
                                <span class="flag fi fi-br"></span>
                                Brazil
                            </td>
                            <td>5</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Lautaro Martínez</td>
                            <td class="country">
                                <span class="flag fi fi-ar"></span>
                                Argentina
                            </td>
                            <td>4</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Memphis Depay</td>
                            <td class="country">
                                <span class="flag fi fi-nl"></span>
                                Netherlands
                            </td>
                            <td>4</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>

 <section class="headline mt-30">
  <div class="container">
    <div class="headline-news">

      <div class="headline-main">
        <img src="assets/images/news/news-1.jpg" 
            alt="Mobil Sport Terbaru 2026 warna merah tampak depan">

        <div class="headline-title">
          <div class="meta">
            <span class="category">News</span>
            <span class="date">| Senin, 24 November 2025</span>
          </div>

          <h2 class="mt-10">
            <a href="detail.html">
              Mobil Sport Terbaru 2026
            </a>
          </h2>

          <p>
            Performa tinggi dengan desain futuristik dan teknologi hybrid terbaru.
          </p>
        </div>
      </div>

      <div class="headline-list">

        <div class="list-item">
          <img src="assets/images/news/news-3.jpg" 
              alt="Suzuki Fronx SUV Premium 2026 warna merah tampak depan">

          <div class="list-content">
            <div class="meta">
              <span class="category">Otomotif</span>
            </div>
            <span class="date">30 Menit Lalu</span>
            <h3>
              <a href="detail.html">
                Suzuki Fronx SUV Premium 2026 yang Highclass
              </a>
            </h3>
          </div>
        </div>

         <div class="list-item">
          <img src="assets/images/news/news-2.jpg" 
              alt="Suzuki Fronx SUV Premium 2026 warna merah tampak depan">

          <div class="list-content">
            <div class="meta">
              <span class="category">Otomotif</span>
            </div>
            <span class="date">30 Menit Lalu</span>
            <h3>
              <a href="detail.html">
                Suzuki Fronx SUV Premium 2026 yang Highclass
              </a>
            </h3>
          </div>
        </div>

        <div class="list-item">
          <img src="assets/images/news/news-5.png" 
              alt="Suzuki Fronx SUV Premium 2026 warna merah tampak depan">

          <div class="list-content">
            <div class="meta">
              <span class="category">Otomotif</span>
            </div>
            <span class="date">10 Menit Lalu</span>
            <h3>
              <a href="detail.html">
                Suzuki Fronx SUV Premium 2026 yang Highclass
              </a>
            </h3>
          </div>
        </div>

        <div class="list-item">
          <img src="assets/images/news/news-5.png" 
              alt="Suzuki Fronx SUV Premium 2026 warna merah tampak depan">

          <div class="list-content">
            <div class="meta">
              <span class="category">Otomotif</span>
            </div>
            <span class="date">10 Menit Lalu</span>
            <h3>
              <a href="detail.html">
                Suzuki Fronx SUV Premium 2026 yang Highclass
              </a>
            </h3>
          </div>
        </div>

        <div class="list-item">
          <img src="assets/images/news/news-5.png" 
              alt="Suzuki Fronx SUV Premium 2026 warna merah tampak depan">

          <div class="list-content">
            <div class="meta">
              <span class="category">Otomotif</span>
            </div>
            <span class="date">10 Menit Lalu</span>
            <h3>
              <a href="detail.html">
                Suzuki Fronx SUV Premium 2026 yang Highclass
              </a>
            </h3>
          </div>
        </div>

        <div class="list-item">
          <img src="assets/images/news/news-5.png" 
              alt="Suzuki Fronx SUV Premium 2026 warna merah tampak depan">

          <div class="list-content">
            <div class="meta">
              <span class="category">Otomotif</span>
            </div>
            <span class="date">10 Menit Lalu</span>
            <h3>
              <a href="detail.html">
                Suzuki Fronx SUV Premium 2026 yang Highclass
              </a>
            </h3>
          </div>
        </div>


      </div>

      <div class="pagination">
        <a href="#" class="prev">←</a>

        <a href="#" class="page active">1</a>
        <a href="#" class="page">2</a>
        <a href="#" class="page">3</a>
        <span class="dots">...</span>
        <a href="#" class="page">10</a>

        <a href="#" class="next">→</a>
      </div>

    </div>
  </div>
</section>


<section class="foot">
  <div class="container">

    <div class="foot-top">
      <img src="assets/images/icon/logo_dewiku_2026.svg" alt="">
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
        <img src="assets/images/icon/playstore.svg">
        <img src="assets/images/icon/iosstore.svg">
      </div>
    </div>

  </div>
</section>

<section class="foot-partner">
  <div class="container">

    <!-- PARTNER LOGO -->
    <div class="partner-list">
      <ul>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/arkadia.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/suara.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/mata-mata.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/bolatimes.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/hitekno.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/dewiku.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/guideku.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/mobimoto.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-partner/himedik.svg"></a></li>
      </ul>
    </div>

    <div class="line-bottom"></div>

    <!-- SOCIAL -->
    <div class="social-list">
      <ul>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-google.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-fb.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-thread.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-x.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-youtube.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-instagram.svg"></a></li>
        <li class="icon"><a href=""><img src="assets/images/icon-sosmed/icon-tiktok.svg"></a></li>
      </ul>
    </div>

  </div>
</section>

<section class="footer">
  <p>© 2026 DewiKu.com - All Rights Reserved.</p>
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
const tabs = document.querySelectorAll(".tab-btn");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
    tab.addEventListener("click", () => {

        tabs.forEach(btn => btn.classList.remove("active"));
        contents.forEach(content => content.classList.remove("active"));

        tab.classList.add("active");

        document.getElementById(tab.dataset.tab)
        .classList.add("active");
    });
});
document.querySelectorAll(".tab-content").forEach(section => {

    const slider = section.querySelector(".worldcup-slider");
    const next = section.querySelector(".next");
    const prev = section.querySelector(".prev");

    if (!slider || !next || !prev) return;

    next.addEventListener("click", () => {
        slider.scrollBy({
            left: 350,
            behavior: "smooth"
        });
    });

    prev.addEventListener("click", () => {
        slider.scrollBy({
            left: -350,
            behavior: "smooth"
        });
    });

});
</script>

</body>
</html>
