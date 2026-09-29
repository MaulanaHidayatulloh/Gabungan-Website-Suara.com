<?php
function tematik_truncate_words($text, $limit = 7) {
  $words = preg_split('/\s+/', trim($text));
  if (count($words) <= $limit) {
    return $text;
  }
  return implode(' ', array_slice($words, 0, $limit));
}

$tematik_articles = [
  'sejarah-jakarta-499' => [
    'title' => 'Sejarah Perjalanan Jakarta Menuju Usia 499 Tahun',
    'category' => 'News',
    'time' => '35 Menit',
    'image' => 'assets/images/hut-jakarta/jakarta_1.png',
    'content' => [
      'Jakarta menapaki perjalanan panjang sejak ditetapkan sebagai hari jadinya pada 22 Juni 1527, saat Fatahillah berhasil mengusir Portugis dari Sunda Kelapa. Nama kota ini pun berganti dari Sunda Kelapa, Jayakarta, Batavia, hingga akhirnya menjadi Jakarta seperti sekarang.',
      'Sepanjang hampir lima abad, Jakarta bertransformasi dari pelabuhan kecil menjadi pusat pemerintahan, ekonomi, dan budaya terbesar di Indonesia. Setiap babak sejarahnya meninggalkan jejak yang masih bisa ditemui di berbagai sudut kota hingga hari ini.',
      'Memasuki usia ke-499 pada 22 Juni 2026, Jakarta terus berbenah menuju kota global tanpa melupakan akar sejarah yang membentuk identitasnya.',
    ],
  ],
  'agenda-hut-jakarta-2026' => [
    'title' => 'Agenda Perayaan HUT Jakarta 2026 yang Wajib Dikunjungi',
    'category' => 'News',
    'time' => '30 Menit',
    'image' => 'assets/images/hut-jakarta/jakarta_2.png',
    'content' => [
      'Menyambut HUT ke-499, Pemprov DKI Jakarta menyiapkan rangkaian acara mulai dari pawai budaya, pameran seni, hingga pesta kembang api di kawasan Monas pada malam puncak 22 Juni 2026.',
      'Selain itu, sejumlah festival kuliner dan bazar UMKM digelar di berbagai titik kota untuk mendukung perekonomian warga sekaligus memperkenalkan kekayaan kuliner khas Betawi kepada masyarakat luas.',
      'Warga dan wisatawan bisa menikmati seluruh rangkaian acara ini secara gratis dengan mengikuti jadwal yang telah dipublikasikan melalui kanal resmi Pemprov DKI Jakarta.',
    ],
  ],
  'transformasi-jakarta-global' => [
    'title' => 'Transformasi Jakarta Menuju Kota Global',
    'category' => 'News',
    'time' => '40 Menit',
    'image' => 'assets/images/hut-jakarta/jakarta_3.png',
    'content' => [
      'Di usianya yang ke-499, Jakarta semakin mengukuhkan diri sebagai kota global dengan pembangunan infrastruktur transportasi terintegrasi seperti MRT, LRT, dan revitalisasi kawasan transit.',
      'Konsep kota global juga diwujudkan melalui pengembangan kawasan bisnis modern, ruang terbuka hijau, serta digitalisasi layanan publik yang memudahkan warga dalam beraktivitas sehari-hari.',
      'Transformasi ini diharapkan mampu menempatkan Jakarta sejajar dengan kota-kota besar dunia tanpa kehilangan karakter lokalnya.',
    ],
  ],
  'tokoh-jakarta-modern' => [
    'title' => 'Tokoh-Tokoh yang Membentuk Jakarta Modern',
    'category' => 'News',
    'time' => '25 Menit',
    'image' => 'assets/images/hut-jakarta/jakarta_4.png',
    'content' => [
      'Wajah Jakarta modern tidak lepas dari peran sejumlah tokoh yang merancang tata kota, kebijakan, hingga ikon-ikon bersejarah yang masih berdiri kokoh hingga kini.',
      'Dari gubernur-gubernur yang membangun fondasi infrastruktur hingga seniman dan budayawan yang menjaga identitas Betawi, setiap tokoh memberikan kontribusi unik bagi perkembangan kota.',
      'Mengenal kembali jejak para tokoh ini menjadi pengingat bahwa kemajuan Jakarta hari ini adalah hasil kerja panjang lintas generasi.',
    ],
  ],
  'kilas-balik-jakarta' => [
    'title' => 'Kilas Balik Jakarta dari Masa ke Masa',
    'category' => 'News',
    'time' => '20 Menit',
    'image' => 'assets/images/hut-jakarta/jakarta_5.png',
    'content' => [
      'Sebelum dikenal sebagai Jakarta, kota ini telah berganti nama beberapa kali mengikuti perubahan kekuasaan, mulai dari Sunda Kelapa, Jayakarta, hingga Batavia pada masa kolonial Belanda.',
      'Setiap era meninggalkan warisan arsitektur dan budaya yang masih bisa disaksikan di kawasan Kota Tua, Glodok, hingga Menteng yang menjadi saksi bisu perjalanan panjang kota ini.',
      'Mengenang perjalanan ini menjadi bagian penting dari perayaan HUT ke-499 Jakarta, sebagai bentuk penghargaan terhadap sejarah yang membentuk kota ini hingga hari ini.',
    ],
  ],
];

$tematik_active_slug = isset($_GET['artikel']) ? $_GET['artikel'] : null;
$tematik_active = ($tematik_active_slug && isset($tematik_articles[$tematik_active_slug]))
  ? $tematik_articles[$tematik_active_slug]
  : null;
if ($tematik_active) {
  $tematik_active['slug'] = $tematik_active_slug;
}
