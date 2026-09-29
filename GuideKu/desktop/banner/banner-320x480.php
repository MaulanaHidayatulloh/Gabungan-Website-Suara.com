  <style>
    /* Container Utama Banner */
    .ad-container {
      position: relative;
      width: 320px;
      height: 480px;
      background-color: #000000;
      overflow: hidden;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    /* Gambar Banner SVG */
    .ad-banner-img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Memastikan gambar memenuhi area 320x480 secara pas */
      display: block;
    }

    /* Bar Teks Bawah (Scroll Notice) */
    .scroll-notice {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.85);
      color: #ffffff;
      text-align: center;
      padding: 6px 0;
      font-size: 10px;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      z-index: 10;
    }
  </style>
  
  <!-- Banner Container -->
  <div class="ad-container" id="bannerAd">
    <!-- Gambar SVG 320x480 -->
    <img src="320x480.svg" alt="Banner Ads 320x480" class="ad-banner-img">

    <!-- Petunjuk Scroll -->
    <div class="scroll-notice">
      SCROLL UNTUK MEMBACA ARTIKEL INI
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const banner = document.getElementById("bannerAd");

      // Event Listener saat banner diklik
      banner.addEventListener("click", function () {
        // Ganti URL tujuan sesuai dengan tautan iklan Anda
        const targetUrl = "https://example.com";
        window.open(targetUrl, "_blank");
      });
    });
  </script>