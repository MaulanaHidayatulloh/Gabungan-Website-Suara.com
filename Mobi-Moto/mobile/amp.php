<!doctype html>
<html amp lang="id">

<head>
  <meta charset="utf-8">
  <title>AMP</title>
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <!-- SEO -->
  <link rel="canonical" href="https://www.suara.com/">

  <!-- ICON -->
  <link rel="apple-touch-icon" href="https://assets.suara.com/mobile/images/img/suara-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="https://assets.suara.com/mobile/images/img/suara-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="https://assets.suara.com/mobile/images/img/suara-icon-114x114.png">

  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- AMP CORE -->
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-carousel"
  src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>

  <!-- AMP COMPONENT -->
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script> 
  <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
  <style amp-custom>

  /* =========================
    GLOBAL
  ========================= */
  body {
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.5;
  }

  .header .container {
    display: flex;
    align-items: center;
  }

  /* =========================
    HEADER
  ========================= */
  .header {
    position: sticky;
    top: 0;
    z-index: 999;
    padding: 14px 16px;
    background: #BAA66D;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }

  .logo {
    flex: 1;
  }

  .logo amp-img {
    height: 22px;
  }

  .search {
    cursor: pointer;
    margin-right: 12px;
    padding-top: 3px;
  }

  .search amp-img {
    width: 20px;
    height: 20px;
  }

  .hamburger {
    width: 34px;
    height: 18px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: none;
    border: none;
  }

  .hamburger span {
    height: 2px;
    background: #fff;
    border-radius: 2px;
  }

  /* =========================
    SIDEBAR
  ========================= */
  .slide-menu {
    max-width: 320px;
    height: 100%;
    padding: 10px 16px;
    background: #fff;
    overflow-y: auto;
  }

  .menu-header {
    display: flex;
    padding-bottom: 12px;
  }

  .close-btn {
    font-size: 22px;
    background: none;
    border: none;
  }

  /* =========================
    MENU LIST
  ========================= */
  .menu-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .menu-list li {
    border-bottom: 1px solid #e6e6e6;
  }

  .menu-list a {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 8px 4px;
    font-size: 16px;
    color: #111;
    text-decoration: none;
  }

  .menu-list amp-img {
    width: 22px;
    height: 22px;
  }

  .menu-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  /* submenu */
  .submenu {
    display: none;
  }

  .submenu.show {
    display: block;
  }

  /* arrow */
  .arrow {
    cursor: pointer;
    transition: transform 0.3s ease;
  }

  .arrow.up {
    transform: rotate(180deg);
  }

  /* =========================
    REGIONAL
  ========================= */
  .regional {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
    list-style: none;
    padding: 12px 0;
    margin: 0;
  }

  .regional .title {
    grid-column: span 3;
    font-weight: 700;
    margin: 10px 0;
  }

  .regional a {
    font-size: 14px;
    color: #111;
    text-decoration: none;
  }

  .regional li a {
  display: block;
  padding: 2px 6px;
  border-radius: 6px;
  text-decoration: none;
  transition: 0.2s;
  }

  .regional li a:hover {
  background: #BAA66D;
  color: #fff;
  }

  /* =========================
    FOOTER MENU
  ========================= */
  .menu-bottom {
    text-align: center;
    margin-top: 20px;
  }

  .menu-bottom p {
    font-size: 13px;
    color: #666;
  }

  .menu-store {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 6px;
  }

  .menu-store amp-img {
    width: 110px;
  }

  /* =========================
    MENU SCROLL
  ========================= */
  .menu-scroll {
    overflow-x: auto;
    white-space: nowrap;
    background: #333333;
    -webkit-overflow-scrolling: touch;
  }

  .menu-wrapper {
    display: inline-flex;
  }

  .menu-wrapper a {
    padding: 12px 16px;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-decoration: none;
    flex-shrink: 0;
  }

  .menu-wrapper a:hover {
    opacity: 0.8;
    color: #F9F724;
  }

  /* =========================
    TRENDING
  ========================= */
  .trending-bar {
    display: flex;
    align-items: center;
    background: #f5f5f5;
    overflow: hidden;
  }

  .trending-label {
    flex-shrink: 0;
    padding: 12px 14px;
    font-weight: 700;
  }

  .trending-scroll {
    flex: 1;
    overflow-x: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;

    -ms-overflow-style: none;
    scrollbar-width: none;
  }

  .trending-scroll::-webkit-scrollbar {
    display: none;
  }

  .trending-menu {
    display: inline-flex;
    align-items: center;
  }

  .trending-menu a {
    padding: 12px 10px;
    font-size: 14px;
    color: #333;
    text-decoration: none;
    flex-shrink: 0;
  }

  .trending-menu span {
    padding: 0 6px;
    color: #999;
  }

  /* =========================
    BREADCRUMB
  ========================= */
  .breadcrumb {
    padding: 12px 16px;
    font-size: 16px;
    color: #666;
  }

  .breadcrumb a {
    color: #666;
    text-decoration: none;
  }

  .breadcrumb span {
    margin: 0 6px;
    color: #999;
  }

  /* =========================
    ARTICLE
  ========================= */
  .detail-news h1 {
    padding: 0 15px;
    font-size: 24px;
  }

  /* writer */
  .writer-news {
    text-align: center;
  }

  .writer-info {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-bottom: 4px;
  }

  .writer-info img {
    width: 18px;
    height: 18px;
    opacity: 0.7;
  }

  .writer-info span {
    font-size: 16px;
    font-weight: 600;
  }

  .writer-news small {
    font-size: 13px;
    color: #777;
  }

  /* =========================
    SHARE
  ========================= */
  .share-article ul {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2px;
    padding: 16px 0;
    margin: 0;
    list-style: none;
  }

  .share-article ul li a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }

  .share-article ul li img {
    width: 24px;
    height: 24px;
    display: block;
  }

    
  .google-follow-wrapper{
      margin: 15px 0;
  }

  .google-follow-btn{
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;

      width: 100%;
      padding: 12px 18px;

      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 12px;

      text-decoration: none;
      color: #374151;
      font-size: 14px;
      font-weight: 600;
      box-shadow: 0 2px 8px rgba(0,0,0,.05);
      transition: all .25s ease;
  }

  .google-follow-btn:hover{
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0,0,0,.12);
      border-color: #4285f4;
      color: #4285f4;
  }

  .google-follow-btn img{
      width: 24px;
      height: 24px;
      flex-shrink: 0;
  }

  .google-follow-btn span{
      white-space: nowrap;
  }


  /* =========================
    IMAGE
  ========================= */
  figure.article-image {
    margin: 0;
    position: relative;
  }

  figure.article-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .article-image figcaption {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 6px 10px;
    font-size: 13px;
    color: #fff;
    background: rgba(0,0,0,0.6);
  }
  .article-content p{
      padding: 2px 10px 4px 10px;
  }

  /* ********** */
  /* ten second */
  /* ********** */
    
  .ten-second{
    background: #F6F6F6;
    padding: 10px;
  }
  .ten-second .heading{
      display:flex;
      
      margin-bottom:15px;
  }
  .heading {
      display: flex;
      align-items: center;
      width: 100%;
      margin: 20px 0;
      gap: 15px; /* jarak garis dengan lingkaran */
  }

  .heading::after {
      content: "";
      flex: 1;
      gap: 5px;
      border-top: 1.5px solid #ddd;
  }

  .heading img {
      display: block;
      
      flex-shrink: 0;
  }

  .ten-second .badge{
      display:inline-flex;
      align-items:center;
      gap:8px;
      background:#6b3cc9;
      color:#fff;
      padding:8px 16px;
      border-radius:20px;
      font-size:14px;
      font-weight:700;
  }

  .ten-second .line{
      flex:1;
      height:2px;
      background:#e5e5e5;
      margin-left:12px;
  }

  .ten-second ul{
      margin:0;
      padding-left:18px;
  }

  .ten-second li{
      margin-bottom:10px;
  }

  .ten-second li a{
      color:#222;
      font-weight:600;
      font-size: 17px;
      line-height:1.6;
      text-decoration:none;
  }

  .ten-second li a:hover{
      color:#6b3cc9;
  }

  .article-read {
    background: #F6F6F6;
    display: flex;
    margin: 10px;
    gap: 14px;
    padding: 10px;
    height: 150px;
    align-items: center;
  }
  .article-read p{
    margin: 0;
    padding: 0;
    color: #e82724;
  }
  /* Gambar kiri */
  .article-read .thumb {
    flex-shrink: 0;
    border-right: 1px #CFCFCF solid;
    padding-right: 10px;
  }

  .article-read .thumb img {
    width: 80%;
    border-radius: 6px;
    object-fit: cover;
  }

  .article-read ul {
    list-style: none;
    padding: 0;
    margin: 0;
    flex: 1;
  }

  .article-read ul li {
    margin-bottom: 10px;
  }

  .article-read ul li a {
    text-decoration: none;
    font-size: 15px;
    font-weight: 700;
    line-height: 1.5;
    color: #222;
    transition: 0.3s;
  }
  /* Tags/ */
  .article-tags {
    border-radius: 6px;
    padding: 10px;
  }

  .article-tags a {
    display: inline-block;
    background: #BAA66D;
    padding: 6px 12px;
    margin: 5px 5px 0 0;
    font-size: 13px;
    border-radius: 6px;
    text-decoration: none;
    color: #fff;
  }


  /* category */
  .category{
      padding: 10px;
  }
  .category-secondary {
    display: flex;
    flex-direction: column;
    gap: 18px;
  }

  .category-item {
    display: flex;
    gap: 14px;
    align-items: flex-start;
  }

  /* THUMBNAIL */
  .category-item amp-img {
    flex-shrink: 0;
    width: 120px;
    border-radius: 6px;
    overflow: hidden;
  }

  /* BIAR GAMBAR GA KE-STRETCH ANEH */
  .category-item amp-img img {
    object-fit: cover;
  }

  /* CONTENT */
  .category-item .content {
    flex: 1;
  }

  /* JUDUL */
  .category-item .content h4 {
    font-size: 15px;
    font-weight: 600;
    line-height: 1.4;
    margin: 0 0 6px;
    color: #1E1E1E;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  /* META */
  .category-item .content span {
    font-size: 12px;
    color: #999;
  }

  /* KATEGORI (warna merah kayak contoh) */
  .category-item .content span i {
    color: #BAA66D;
    font-style: normal;
    font-weight: 500;
  }

  .title {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
  }

  .title h4 {
    font-size: 21px;
    font-weight: bold;
    margin: 0;
  }

  .title-line {
    flex-grow: 1;
    height: 2px;
    background-color: #ddd;
    position: relative;
  }

  .title-line::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 20px;
    height: 100%;
    background-color: #BAA66D;
  }


  .foot {
    background: #BAA66D;
    color: #fff;
    padding: 40px 20px 20px;
    font-family: 'Poppins', sans-serif;
    
  }

  .foot .container {
    margin: auto;
  }

  /* TOP */

  .foot-top{
    display: flex;
    justify-content: center; 
    align-items: center;     
    text-align: center;
  }
  .foot-top .logo {
    font-size: 52px;
    font-weight: 800;
    margin: 0;
    letter-spacing: -1px;
  }
  .foot-top amp-img{
    width: 70%;  
    height:55px
  }

  .tagline {
    margin-top: 12px;
    font-size: 15px;
    color: rgba(255,255,255,0.9);
    letter-spacing: 2px;
  }

  /* GARIS */
  .line {
    width: 100%;
    height: 1px;
    background: #fff;
    margin: 35px 0;
  }

  /* MENU */
  .foot-menu {
    display: flex;
    justify-content: space-between;
    max-width: 700px;
  }

  .foot-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .foot-menu li {
    font-size: 16px;
    margin-bottom: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .foot-menu ul li a{
    color: #fff;
    text-decoration:none;
  }

  .foot-menu li:hover {
    opacity: 0.7;
    transform: translateX(3px);
  }

  /* BOTTOM */
  .foot-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .app-text {
    font-size: 16px;
    line-height: 1.6;
  }

  .app-text p:first-child {
    opacity: 0.8;
  }

  .app-badge {
    display: flex;
    align-items: center;
    gap: 25px;
  }

  .app-badge amp-img {
    width: 50%;
    height: 55px;
    border-radius: 12px;
    padding: 5px;
  }

  /* =========================
    SEARCH ICON TOGGLE
  ========================= */
  .search {
    display: flex;
    gap: 10px;
    align-items: center;
    margin-right: 10px;
  }

  /* Tombol icon */
  .search-btn {
    background: none;
    border: none;
    font-size: 18px;
    cursor: pointer;
    color: #333;
  }
  .search-content{
    padding: 20px;
  }
  .search-content p{
    color: #1E1E1E;
  }
  .search-content ul{
    padding: 0;
    margin-top: 20px;
  }


  /* OVERLAY FULL */
  .search-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    background: #fff;
    z-index: 9999;

    display: flex;
    flex-direction: column;
  }

  amp-lightbox[open] .search-overlay {
    animation: slideDown 0.3s ease forwards;
  }


  /* HEADER SEARCH */
  .search-header {
    display: flex;
    align-items: center;
    gap: 10px;

    padding: 15px;
    border-bottom: 1px solid #eee;
  }

  /* INPUT */
  .search-header input {
    flex: 1;
    padding: 10px 15px;
    border-radius: 20px;
    border: 1px solid #ddd;
    outline: none;
    font-size: 14px;
  }

  /* BACK BUTTON */
  .back-btn {
    border: none;
    background: none;
    font-size: 20px;
    cursor: pointer;
  }

  /* AKTIF */
  .search-overlay.active {
    opacity: 1;
    transform: translateY(0);
  }
  .search-content li span{
    margin-left: auto; /* dorong ke paling kanan */
    display: flex;
    align-items: center;
  }
  .search-content li{
    display: flex;
    align-items: center; /* ini kunci biar sejajar */
    gap: 6px;
    background: linear-gradient(90deg, #BAA66D, #fff);
    margin-bottom: 10px;
    border-radius: 6px;
    padding: 10px;
    font-weight: 700;
    text-decoration:none;
  }
  .search-content li a{
    text-decoration:none;
    color:#fff;  
  }

  .search-content span{
    color: #333;
    }
  .search-content li img{
    width: 20px;
  }

  /* ******* */
  /* trending */
  .trending {
    display: flex;
    align-items: center; /* 🔥 ini kunci */
    gap: 6px;
  }

  /* icon */
  .trending i {
    display: flex;
    align-items: center;
  }

  .trending img {
    width: 16px;
    height: 16px;
  }

  /* text */
  .trending span {
    line-height: 1;
  }

  /* foot partner */
  .foot-partner {
    background: #e6e6e6;
    padding: 30px 20px;
  }


  /* FLEX UL */
  .partner-list ul,
  .social-list ul {
    list-style: none;
    padding: 0;
    margin: 0;

    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
  }

  /* ICON BULAT */
  .icon {
    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;
    transition: 0.3s;
  }

  /* GAMBAR */
  .icon img {
    width: 21px
    height:21px;
    object-fit: cover; /* biar pas bulat */
  }

  /* HOVER */
  .icon:hover {
    transform: scale(1.1);
  }

  /* GARIS */
  .line {
    width: 100%;
    height: 1px;
    background: #fff;
    margin: 28px 0;
  }

  .line-bottom {
  width: 100%;
  height: 1px;
  background: #000;
  margin: 28px 0;
  }

  .social-list .icon img {
    width: 19px ;
    height: 19px;
    object-fit: contain;
    transition: 0.3s ease;
  }

  /* footer */
  footer{
    padding: 10px 0 10px 0;
    text-align: center;
    font-size: 14px;
  }

  /* paksa full width */
  .main-gallery,
  .thumbs {
    width: 100vw;
    max-width: 100vw;
    margin-left: calc(-50vw + 50%);
  }

  /* hilangin padding container induk */
  .container, 
  .content, 
  .article {
    padding-left: 0;
    padding-right: 0;
  }

  /* reset figure */
  figure {
    margin: 0;
  }

  /* gambar utama full */
  .main-gallery amp-img img {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

  /* caption overlay */
  .slide-item figcaption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 12px;
    font-size: 14px;
    color: #fff;
    background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
  }

  /* THUMB FULL WIDTH */
  .thumbs {
    margin-top: 10px;
  }

  /* thumbnail styling */
  .thumbs amp-img {
    margin-right: 10px;
    border-radius: 6px;
    overflow: hidden;
    opacity: 0.6;
  }

  /* biar nggak gepeng */
  .thumbs amp-img img {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

  /* klik effect */
  .thumbs amp-img:active {
    opacity: 1;
  }


  </style>

    <style amp-boilerplate>
      body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
      -moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
      -ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
      animation:-amp-start 8s steps(1,end) 0s 1 normal both}
      @-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
      @-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
      @-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
      @-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
      @keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    </style>

    <noscript>
      <style amp-boilerplate>
      body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
      </style>
    </noscript>

  </head>

  <body>

    <!-- HEADER -->
    <header class="header">
      <div class="container">

        <div class="logo">
          <a href="#">
            <amp-img src="assets/images/icon/logo_mobimoto_2026.svg" width="180" height="21" layout="fixed"></amp-img>
          </a>
        </div>

        <div class="search">
          <button on="tap:search-overlay.open" style="background:none;border:none;padding:0;">
              <amp-img 
              src="assets/images/icon/search_white.svg" 
              width="20" 
              height="20" 
              layout="fixed">
              </amp-img>
          </button>
        </div>
        
      <!-- SEARCH OVERLAY -->
      <amp-lightbox id="search-overlay" layout="nodisplay">
      <div class="search-overlay">

          <div class="search-header">
          <button class="back-btn" on="tap:search-overlay.close">←</button>
          <input type="text" placeholder="Cari berita...">
          </div>

          <div class="search-content">
          
          <div class="trending">
              <i>
              <amp-img src="assets/images/icon/trending.svg"
                  width="16" height="16" layout="fixed">
              </amp-img>
              </i>
              <span>Trending</span>
          </div>

          <ul>
              <li>
              <a href="">Indonesia</a>
              <span>
                  <amp-img src="assets/images/icon/icon-chart.webp"
                  width="16" height="16" layout="fixed">
                  </amp-img>
              </span>
              </li>

              <li>
              <a href="">Kamerun</a>
              <span>
                  <amp-img src="assets/images/icon/icon-chart.webp"
                  width="16" height="16" layout="fixed">
                  </amp-img>
              </span>
              </li>

              <li>
              <a href="">WFH</a>
              <span>
                  <amp-img src="assets/images/icon/icon-chart.webp"
                  width="16" height="16" layout="fixed">
                  </amp-img>
              </span>
              </li>

              <li>
              <a href="">Honda</a>
              <span>
                  <amp-img src="assets/images/icon/icon-chart.webp"
                  width="16" height="16" layout="fixed">
                  </amp-img>
              </span>
              </li>

              <li>
              <a href="">Malaysia</a>
              <span>
                  <amp-img src="assets/images/icon/icon-chart.webp"
                  width="16" height="16" layout="fixed">
                  </amp-img>
              </span>
              </li>
          </ul>

          </div>
      </div>
      </amp-lightbox>

        <button class="hamburger" on="tap:sidebar.toggle">
          <span></span>
          <span></span>
          <span></span>
        </button>

      </div>
    </header>

    <!-- SIDEBAR -->
    <amp-sidebar id="sidebar" layout="nodisplay" side="right">
      <div class="slide-menu">

        <div class="menu-header">
          <span></span>
          <button class="close-btn" on="tap:sidebar.close">✕</button>
        </div>

        <ul class="menu-list">
          <li>

          <div class="menu-item">
              <a href="kanal.php">
              <amp-img src="assets/images/icon/menu-news.svg"
                  width="20" height="20" layout="fixed"></amp-img>
              News
              </a>

              <span class="arrow"
              role="button"
              tabindex="0"
              on="tap:AMP.setState({openNews: !openNews})"
              [class]="openNews ? 'arrow up' : 'arrow'">

              <svg width="16" height="16" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"
                  fill="none"
                  stroke="#333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              </span>
          </div>

          <div class="submenu"
              [class]="openNews ? 'submenu show' : 'submenu'">
              <a href="kanal.php">Women</a>
              <a href="kanal.php">Men</a>
          </div>

          </li>
          
          <li>
          <div class="menu-item">
              <a href="kanal.php">
              <amp-img src="assets/images/icon/menu-bisnis.svg"
                  width="20" height="20" layout="fixed"></amp-img>
              Bisnis
              </a>

              <span class="arrow"
              role="button"
              tabindex="0"
              on="tap:AMP.setState({openBisnis: !openBisnis})"
              [class]="openBisnis ? 'arrow up' : 'arrow'">

              <svg width="16" height="16" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"
                  fill="none"
                  stroke="#333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              </span>
          </div>

          <div class="submenu"
              [class]="openBisnis ? 'submenu show' : 'submenu'">
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
          <div class="menu-item">
              <a href="kanal.php">
              <amp-img src="assets/images/icon/menu-bola.svg"
                  width="20" height="20" layout="fixed"></amp-img>
              Bola
              </a>

              <span class="arrow"
              role="button"
              tabindex="0"
              on="tap:AMP.setState({openBola: !openBola})"
              [class]="openBisnis ? 'arrow up' : 'arrow'">

              <svg width="16" height="16" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"
                  fill="none"
                  stroke="#333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              </span>
          </div>

          <div class="submenu"
              [class]="openBola ? 'submenu show' : 'submenu'">
                <a href="kanal.php">Bola Indonesia</a>
                <a href="kanal.php">Liga Inggris</a>
                <a href="kanal.php">Liga Italia</a>
                <a href="kanal.php">Bola Dunia</a>
          </div>
          </li>

          <li>
          <div class="menu-item">
              <a href="kanal.php">
              <amp-img src="assets/images/icon/menu-sport.svg"
                  width="20" height="20" layout="fixed"></amp-img>
              Sport
              </a>

              <span class="arrow"
              role="button"
              tabindex="0"
              on="tap:AMP.setState({openSport: !openSport})"
              [class]="openSport ? 'arrow up' : 'arrow'">

              <svg width="16" height="16" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"
                  fill="none"
                  stroke="#333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              </span>
          </div>

          <div class="submenu"
              [class]="openSport ? 'submenu show' : 'submenu'">
                <a href="kanal.php">Raket</a>
                <a href="kanal.php">Balap</a>
                <a href="kanal.php">Arena</a>
          </div>
          </li>

          <li>
          <div class="menu-item">
              <a href="kanal.php">
              <amp-img src="assets/images/icon/menu-lifestyle.svg"
                  width="20" height="20" layout="fixed"></amp-img>
              Life
              </a>

              <span class="arrow"
              role="button"
              tabindex="0"
              on="tap:AMP.setState({openLife: !openLife})"
              [class]="openLife ? 'arrow up' : 'arrow'">

              <svg width="16" height="16" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"
                  fill="none"
                  stroke="#333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              </span>
          </div>

          <div class="submenu"
              [class]="openLife ? 'submenu show' : 'submenu'">
                <a href="kanal.php">Female</a>
                <a href="kanal.php">Male</a>
                <a href="kanal.php">Relationship</a>
                <a href="kanal.php">Food & Travel</a>
                <a href="kanal.php">Komunitas</a>
          </div>
          </li>

          <li>
          <div class="menu-item">
              <a href="kanal.php">
              <amp-img src="assets/images/icon/menu-entertainment.svg"
                  width="20" height="20" layout="fixed"></amp-img>
              Entertainment
              </a>

              <span class="arrow"
              role="button"
              tabindex="0"
              on="tap:AMP.setState({openEntertainment: !openEntertainment})"
              [class]="openEntertainment ? 'arrow up' : 'arrow'">

              <svg width="16" height="16" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"
                  fill="none"
                  stroke="#333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              </span>
          </div>

          <div class="submenu"
              [class]="openEntertainment ? 'submenu show' : 'submenu'">
                <a href="kanal.php">Gosip</a>
                <a href="kanal.php">Music</a>
                <a href="kanal.php">Fllm</a>
          </div>
          </li>

          <li>
          <div class="menu-item">
              <a href="kanal.php">
              <amp-img src="assets/images/icon/menu-otomotif.svg"
                  width="20" height="20" layout="fixed"></amp-img>
              Otomotif
              </a>

              <span class="arrow"
              role="button"
              tabindex="0"
              on="tap:AMP.setState({openOtomotif: !openOtomotif})"
              [class]="openOtomotif ? 'arrow up' : 'arrow'">

              <svg width="16" height="16" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"
                  fill="none"
                  stroke="#333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              </span>
          </div>

          <div class="submenu"
              [class]="openOtomotif ? 'submenu show' : 'submenu'">
                <a href="kanal.php">Mobil</a>
                <a href="kanal.php">Motor</a>
                <a href="kanal.php">Autoseleb</a>
          </div>
          </li>

          <li>
          <div class="menu-item">
              <a href="kanal.php">
              <amp-img src="assets/images/icon/menu-tekno.svg"
                  width="20" height="20" layout="fixed"></amp-img>
              Tekno
              </a>

              <span class="arrow"
              role="button"
              tabindex="0"
              on="tap:AMP.setState({openTekno: !openTekno})"
              [class]="openTekno ? 'arrow up' : 'arrow'">

              <svg width="16" height="16" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"
                  fill="none"
                  stroke="#333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              </span>
          </div>

          <div class="submenu"
              [class]="openTekno ? 'submenu show' : 'submenu'">
                <a href="kanal.php">Mobil</a>
                <a href="kanal.php">Motor</a>
                <a href="kanal.php">Autoseleb</a>
          </div>
          </li>
          
          <li>
          <div class="menu-item">
              <a href="kanal.php">
              <amp-img src="assets/images/icon/menu-healt.svg"
                  width="20" height="20" layout="fixed"></amp-img>
              Healt
              </a>

              <span class="arrow"
              role="button"
              tabindex="0"
              on="tap:AMP.setState({openHealt: !openHealt})"
              [class]="openHealt ? 'arrow up' : 'arrow'">

              <svg width="16" height="16" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"
                  fill="none"
                  stroke="#333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              </span>
          </div>

          <div class="submenu"
              [class]="openHealt ? 'submenu show' : 'submenu'">
                <a href="kanal.php">Women</a>
                <a href="kanal.php">Men</a>
                <a href="kanal.php">Parenting</a>
                <a href="kanal.php">Konsultasi</a>
          </div>
          </li>
          <li><a href="#"><amp-img src="assets/images/icon/menu-foto.svg" width="20" height="20" layout="fixed"></amp-img>Foto</a></li>
          <li><a href="#"><amp-img src="assets/images/icon/menu-video.svg" width="20" height="20" layout="fixed"></amp-img>Video</a></li>
          <li><a href="#"><amp-img src="assets/images/icon/menu-opini.svg" width="20" height="20" layout="fixed"></amp-img>Opini</a></li>
        </ul>

        <ul class="regional">
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
            <amp-img src="assets/images/icon/playstore.svg" width="120" height="40" layout="fixed"></amp-img>
            <amp-img src="assets/images/icon/iosstore.svg" width="120" height="40" layout="fixed"></amp-img>
          </div>
        </div>

      </div>
    </amp-sidebar>

    <div class="menu-scroll">
      <div class="menu-wrapper">
          <a href="#">Nasional</a>
          <a href="#">Ekonomi</a>
          <a href="#">Bola</a>
          <a href="#">Otomotif</a>
          <a href="#">Entertainment</a>
          <a href="#">Tekno</a>
          <a href="#">Gaya Hidup</a>
          <a href="#">Regional</a>
      </div>
    </div>

    <div class="trending-bar">
    
      <!-- FIXED (tidak scroll) -->
      <div class="trending-label">
          🔥 Trending
      </div>

      <!-- SCROLL -->
      <div class="trending-scroll">
          <div class="trending-menu">
          <a href="#">Bola</a>
          <span>|</span>
          <a href="#">Tennis</a>
          <span>|</span>
          <a href="#">Sepatu</a>
          <span>|</span>
          <a href="#">Indonesia</a>
          <span>|</span>
          <a href="#">Malaysia</a>
          <span>|</span>
          <a href="#">Piala Dunia</a>
          <span>|</span>
          <a href="#">Ekonomi</a>
          <span>|</span>
          <a href="#">Tekno</a>
          <span>|</span>
          <a href="#">Islam</a>
          <span>|</span>
          <a href="#">Kristen</a>
          </div>
      </div>
    </div>
    
    <div class="breadcrumb">
      <a href="#">Home</a>
      <span>/</span>
      <a href="#">Sepak Bola</a>
    </div>
    <div class="detail-news">
      <h1>
          Negara Eropa Banyak yang Pakai Sistem Contractual Savings
      </h1>    
      <div class="writer-news mb-20">
          <div class="writer-info">
              <amp-img 
              src="assets/images/icon/user.svg"
              width="24"
              height="24"
              layout="fixed"
              alt="User">
              </amp-img>
              <span>Ilham Ananda</span>
          </div>
          <small>30 Agustus 2025</small>
      </div>
      <div class="share-article">
      <ul>
          <li>
          <a href="#">
              <amp-img src="assets/images/icon/share-fb.svg"
              width="24"
              height="24"
              layout="fixed"
              alt="Facebook">
              </amp-img>
          </a>
          </li>

          <li>
          <a href="#">
              <amp-img src="assets/images/icon/share-wa.svg"
              width="24"
              height="24"
              layout="fixed"
              alt="WhatsApp">
              </amp-img>
          </a>
          </li>

          <li>
          <a href="#">
              <amp-img src="assets/images/icon/share-x.svg"
              width="24"
              height="24"
              layout="fixed"
              alt="X">
              </amp-img>
          </a>
          </li>

          <li>
          <a href="#">
              <amp-img src="assets/images/icon/share-tele.svg"
              width="24"
              height="24"
              layout="fixed"
              alt="Telegram">
              </amp-img>
          </a>
          </li>

          <li>
          <a href="#">
              <amp-img src="assets/images/icon/share-link.svg"
              width="24"
              height="24"
              layout="fixed"
              alt="Copy Link">
              </amp-img>
          </a>
          </li>
        </ul>
      </div>

      <div class="google-follow-wrap">
          <a
              class="google-follow-btn"
              href="https://www.google.com/preferences/source?q=suara.com"
              target="_blank"
              rel="noopener"
              aria-label="Follow Google News"
          >
              <amp-img
                  src="https://assets.suara.com/suara/desktop/images/icon-sosmed/icon-google-color.svg"
                  width="24"
                  height="24"
                  layout="fixed"
                  alt="Google">
              </amp-img>

              <span>Atur, Baru Temukan</span>
          </a>
      </div>
      

      <!-- MAIN IMAGE -->
    <amp-carousel
      id="gallery"
      class="main-gallery"
      width="800"
      height="450"
      layout="responsive"
      type="slides">

      <figure class="slide-item">
        <amp-img src="assets/images/news/news-1.jpg"
          width="800" height="450" layout="responsive"
          alt="Timnas Indonesia vs Bulgaria">
        </amp-img>
        <figcaption>
          Pemain Timnas Indonesia saat menghadapi Bulgaria di GBK.
        </figcaption>
      </figure>

      <figure class="slide-item">
        <amp-img src="assets/images/news/news-2.jpg"
          width="800" height="450" layout="responsive">
        </amp-img>
        <figcaption>
          Pertandingan berlangsung sengit.
        </figcaption>
      </figure>

      <figure class="slide-item">
        <amp-img src="assets/images/news/news-3.jpg"
          width="800" height="450" layout="responsive">
        </amp-img>
        <figcaption>
          Suporter memadati stadion.
        </figcaption>
      </figure>

    </amp-carousel>


    <!-- THUMBNAILS -->
    <amp-carousel
      class="thumbs"
      height="90"
      layout="fixed-height"
      type="carousel">

      <amp-img src="assets/images/news/news-1.jpg"
        width="140" height="90"
        role="button" tabindex="0"
        on="tap:gallery.goToSlide(index=0)">
      </amp-img>

      <amp-img src="assets/images/news/news-2.jpg"
        width="140" height="90"
        role="button" tabindex="0"
        on="tap:gallery.goToSlide(index=1)">
      </amp-img>

      <amp-img src="assets/images/news/news-3.jpg"
        width="140" height="90"
        role="button" tabindex="0"
        on="tap:gallery.goToSlide(index=2)">
      </amp-img>

    </amp-carousel>

      <div class="article-content">
          
          <div class="ten-second mb-10">
              <div class="heading mt-20">
                  <amp-img
                      src="assets/images/icon/ten-second.png"
                      alt="10 Detik"
                      width="140"
                      height="47"
                      layout="intrinsic">
                  </amp-img>
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
          
          <p>Perubahan tersebut mulai terasa yang diawali dengan dukungan program Desa Sejahtera Astra, yang memberikan penguatan kapasitas sumber daya manusia, penyediaan peralatan pendukung, serta pengembangan atraksi wisata baru seperti arung jeram. </p>
          <figure class="article-image">
              <amp-img
                  src="assets/images/news/news-1.jpg"
                  width="16"
                  height="9"
                  layout="responsive"
                  alt="Pemain Timnas Indonesia saat menghadapi Bulgaria di GBK.">
              </amp-img>
              <figcaption>
                  Pemain Timnas Indonesia saat menghadapi Bulgaria di GBK.
              </figcaption>
          </figure>
          <p>
              Membuat hukum di Indonesia itu nggak boleh sembrono lho. Membuat hukum di Indonesia itu harus dipertanggungjawabkan juga kepada Tuhan Yang Maha Esa, selain kita pertanggungjawabkan kepada rakyat, kepada bangsa, dan negara," tegas Arief saat sesi wawancara khusus dengan Direktur Pemberitaan Tribun Network, Febby Mahendra Putra, Jumat (6/3/2026).
              Artikel ini telah tayang di Tribunnews.com dengan judul Eks Hakim MK Arief Hidayat Ingatkan DPR: Bikin Hukum Jangan Sembrono, Ada Nama Tuhan di Tiap UU, https://www.tribunnews.com/nasional/7802176/eks-hakim-mk-arief-hidayat-ingatkan-dpr-bikin-hukum-jangan-sembrono-ada-nama-tuhan-di-tiap-uu.
              Penulis: Fransiskus Adhiyuda Prasetia
              Editor: Acos Abdul Qodir
          </p>
         
          <p>
              Komisioner BP Tapera Heru Pudyo Nugroho mengatakan, skema ini sudah
              diterapkan di beberapa negara termasuk negara-negara di Eropa Barat.
          </p>
          <!-- Tags -->
            <div class="article-tags">
              <div class="title mt-10">
                <h4>TAG</h4>
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
            <div class="comment">
              <img src="assets/images/icon/comment.png" alt="Komentar" width="100%">
            </div>
      </div>
    </div>  

    <div class="category">
    <div class="container">

      <!-- Judul -->
      <div class="title mt-10">
        <h4>Terkini</h4>
        <div class="title-line"></div>
      </div>

      <!-- Grid Utama -->
      <div class="category-grid mt-30">
        <div class="category-secondary">

          <div class="category-item">
            <amp-img src="assets/images/news/news-4.jpg"
              width="150"
              height="124"
              layout="responsive"
              alt="news">
            </amp-img>

            <div class="content">
              <h4>Kasih paham: Industri Pangan dan Chef wrong man lost the times?</h4>
              <span><i>Tekno</i> | 25 Menit Lalu</span>
            </div>
          </div>

          <div class="category-item">
            <amp-img src="assets/images/news/news-4.jpg"
              width="150"
              height="124"
              layout="responsive"
              alt="news">
            </amp-img>

            <div class="content">
              <h4>Menkop Tak Mau Ambil Pusing Soal Impor Pikap untuk Koperasi Desa Merah Putih</h4>
              <span><i>Otomotif</i> | 25 Menit Lalu</span>
            </div>
          </div>

          <div class="category-item">
            <amp-img src="assets/images/news/news-2.jpg"
              width="150"
              height="124"
              layout="responsive"
              alt="news">
            </amp-img>

            <div class="content">
              <h4>Kurniawan Dwi Yulianto Pimpin Seleksi Perdana 42 Pemain Timnas Indonesia U-17</h4>
              <span><i>Bola</i> | 25 Menit Lalu</span>
            </div>
          </div>

          <div class="category-item">
            <amp-img src="assets/images/news/news-4.jpg"
              width="150"
              height="124"
              layout="responsive"
              alt="news">
            </amp-img>

            <div class="content">
              <h4>Kurniawan Dwi Yulianto Pimpin Seleksi Perdana 42 Pemain Timnas Indonesia U-17</h4>
              <span><i>Bola</i> | 25 Menit Lalu</span>
            </div>
          </div>

          <div class="category-item">
            <amp-img src="assets/images/news/news-1.jpg"
              width="150"
              height="124"
              layout="responsive"
              alt="news">
            </amp-img>

            <div class="content">
              <h4>Kurniawan Dwi Yulianto Pimpin Seleksi Perdana 42 Pemain Timnas Indonesia U-17</h4>
              <span><i>Bola</i> | 25 Menit Lalu</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <div class="foot">
    <div class="container">

      <div class="foot-top">
        <amp-img src="assets/images/icon/logo_mobimoto_2026.svg"
          width="40"
          height="40"
          layout="intrinsic"
          alt="">
        </amp-img>
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
          <amp-img 
              src="assets/images/icon/playstore.svg"
              width="40"
              height="40"
              layout="intrinsic">
          </amp-img>

          <amp-img 
              src="assets/images/icon/iosstore.svg"
              width="40"
              height="40"
              layout="intrinsic">
          </amp-img>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="foot-partner">
    <div class="container">

      <!-- PARTNER LOGO -->
      <div class="partner-list">
        <ul>
          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-partner/arkadia.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-partner/suara.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-partner/mata-mata.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-partner/bolatimes.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-partner/hitekno.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-partner/dewiku.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-partner/guideku.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-partner/mobimoto.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-partner/himedik.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>
        </ul>
      </div>

      <div class="line-bottom"></div>

      <!-- SOCIAL -->
      <div class="social-list">
        <ul>
          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-sosmed/icon-google.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-sosmed/icon-fb.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-sosmed/icon-thread.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-sosmed/icon-x.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-sosmed/icon-youtube.svg" width="19" height="24" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-sosmed/icon-instagram.svg" width="24" height="19" layout="intrinsic"></amp-img>
          </a></li>

          <li class="icon"><a href="">
            <amp-img src="assets/images/icon-sosmed/icon-tiktok.svg" width="19" height="19" layout="intrinsic"></amp-img>
          </a></li>
        </ul>
      </div>

    </div>
  </div>

  
  <!-- FOOTER -->
  <footer>
    <p style="">
      © 2026 <a href="mailto:redaksi@suara.com">MobiMoto.com</a> - All Rights Reserved.
    </p>
  </footer>

  <!-- ANALYTICS -->
  <amp-analytics type="googleanalytics">
    <script type="application/json">
      {
        "vars": { "account": "UA-48479604-1" },
        "triggers": {
          "trackPageview": {
            "on": "visible",
            "request": "pageview"
          }
        }
      }
    </script>
  </amp-analytics>

</body>
</html>