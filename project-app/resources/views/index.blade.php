<?php
// $panduan_post = [
//   [
//     'icon' => 'ph-fish',
//     'judul' => 'Memancing',
//     'deskripsi' => 'Cocok untuk aktivitas memancing di danau.'
//   ],
//   [
//     'icon' => 'ph-bed',
//     'judul' => 'Penginapan',
//     'deskripsi' => 'Kamar nyaman dan bersih untuk keluarga.'
//   ],
//   [
//     'icon' => 'ph-person-simple-swim',
//     'judul' => 'Kolam Renang',
//     'deskripsi' => 'Berenang di suasana alam terbuka.'
//   ],
//   [
//     'icon' => 'ph-fork-knife',
//     'judul' => 'Kuliner',
//     'deskripsi' => 'Hidangan khas lokal dan internasional.'
//   ],
//   [
//     'icon' => 'ph-mountains',
//     'judul' => 'Wisata Alam',
//     'deskripsi' => 'Jelajahi keindahan alam hijau.'
//   ]
// ];

// $jelajahi_post = [
//   [
//     'gambar' => 'assets/img/danau.jpeg',
//     'judul' => 'Danau',
//     'deskripsi' => 'Danau Rindu Sempadan menghadirkan panorama hijau yang menyejukkan.',
//     'deskripsi2' => [
//       'Aktivitas yang Bisa Dilakukan',
//       'Bersantai santai',
//       'Memancing bersama keluarga',
//       'Menikmati sunset di tepi danau',
//       'Spot foto yang instagramable'
//     ],
//   ],
//   [
//     'gambar' => 'assets/img/kolam.jpeg',
//     'judul' => 'Kolam Renang',
//     'deskripsi' => 'Kolam renang Rindu Sempadan hadir dengan air yang jernih dan suasana asri.',
//     'deskripsi2' => [
//       'Aktivitas yang Bisa Dilakukan',
//       'Menikmati segarnya air',
//       'Bermain bersama keluarga',
//       'Dikelilingi suasana alami',
//       'Favorit olahraga & bersantai'
//     ],
//   ],
//   [
//     'gambar' => 'assets/img/hotel.jpeg',
//     'judul' => 'Hotel',
//     'deskripsi' => 'Nikmati kenyamanan menginap dengan fasilitas yang lengkap.',
//     'deskripsi2' => [
//       'Aktivitas yang Bisa Dilakukan',
//       'Kamar nyaman pemandangan alam',
//       'Area parkir luas',
//       'Akses kolam renang gratis',
//       'Ruang keluarga & lounge'
//     ],
//   ],
//   [
//     'gambar' => 'assets/img/lapangan.png',
//     'judul' => 'Lapangan',
//     'deskripsi' => 'Lapangan Rindu Sempadan adalah area terbuka luas.',
//     'deskripsi2' => [
//       'Aktivitas yang Bisa Dilakukan',
//       'Olahraga & aktivitas fisik',
//       'Rekreasi & bermain',
//       'Kegiatan sosial & budaya',
//       'Ruang terbuka hijau'
//     ],
//   ]
// ];

// $data = [
//   'hai',
//   'hello',
//   'coba'
// ];

// $FaqPost = [
//   [
//     'question' => 'Bagaimana cara memesan kamar di Rindu Sempadan?',
//     'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate recusandae doloremque sunt temporibus veritatis ipsam illum eum cumque suscipit ratione?'
//   ],
//   [
//     'question' => 'Apa saja fasilitas yang tersedia di Rindu Sempadan?',
//     'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate recusandae doloremque sunt temporibus veritatis ipsam illum eum cumque suscipit ratione?'
//   ],
//   [
//     'question' => 'Apakah tersedia paket untuk keluarga dan rombongan?',
//     'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate recusandae doloremque sunt temporibus veritatis ipsam illum eum cumque suscipit ratione?'
//   ],
//   [
//     'question' => 'Bagaimana cara melakukan pembayaran?',
//     'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate recusandae doloremque sunt temporibus veritatis ipsam illum eum cumque suscipit ratione?'
//   ],
//   [
//     'question' => 'Apakah saya bisa berkunjung tanpa menginap?',
//     'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate recusandae doloremque sunt temporibus veritatis ipsam illum eum cumque suscipit ratione?'
//   ]

// ];
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rindu Sempadan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Island+Moments&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <style>
    .font-script {
      font-family: 'Island Moments', cursive;
    }

    .font-body {
      font-family: 'Quicksand', sans-serif;
    }
  </style>
</head>

<body class="font-body bg-white">
  <div class="mx-auto bg-white shadow-md">

    <!-- NAVBAR -->
    <nav class="sticky top-0 z-50 bg-[#D1DACC] w-full h-[80px] shadow-md">
      <div class="container max-w-6xl mx-auto flex justify-between items-center h-full px-6">
        <img class="h-12" src="assets/img/rindus.png" alt="Logo Rindu Sempadan">
        <ul class="flex space-x-6 items-center">
        <li><a href="{{ route('index') }}" class="hover:text-green-700">Beranda</a></li>
        <li><a href="{{ route('tentang') }}" class="hover:text-green-700">Tentang</a></li>
        <li><a href="{{ route('kontak') }}" class="hover:text-green-700">Kontak</a></li>
        </ul>
      </div>
    </nav>

    <!-- HERO -->
    <section class="relative w-full h-[500px] bg-[url('assets/img/bg.png')] bg-cover bg-center flex items-center">
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative container max-w-6xl mx-auto px-6 text-white">
        <h1 class="text-5xl md:text-6xl font-script mb-4">
          Selamat Datang di Rindu Sempadan
        </h1>
        <p class="text-lg leading-relaxed max-w-3xl">
          Nikmati keindahan alam yang asri, udara segar, dan suasana tenang di tepi danau yang memukau.
          Rindu Sempadan hadir sebagai destinasi wisata keluarga dan sahabat untuk melepas penat, menikmati pemandangan hijau,
          serta menemukan ketenangan di tengah alam Pekanbaru.
        </p>
      </div>
    </section>

    <!-- PANDUAN -->
    <section class="bg-[#D1DACC] py-12">
      <div class="container max-w-6xl mx-auto px-6">
        <h2 class="mb-8 text-2xl font-bold text-center">Panduan Wisata</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
          <?php
          for ($i = 0; $i < count($panduanpost); $i += 1) {
          ?>
            <div class="bg-white p-5 rounded-lg shadow-md text-center">
              <i class="ph <?php echo $panduanpost[$i]['icon'] ?> text-4xl mb-3"></i>
              <h3 class="mb-2 text-lg font-bold"><?php echo $panduanpost[$i]['judul'] ?></h3>
              <p class="text-gray-800"><?php echo $panduanpost[$i]['deskripsi'] ?></p>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- JELAJAHI -->
    <section class="bg-[#D1DACC] py-12">
      <div class="container max-w-6xl mx-auto px-6">
        <h2 class="text-2xl font-bold text-center mb-10">
          Jelajahi Tempat-Tempat yang Wajib Anda Kunjungi
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Card Danau -->
          <?php
          for ($i = 0; $i < count($JelajahiPost); $i++) {
            // pastikan parsing deskripsi2 jadi array
            $list_data[$i] = json_decode($JelajahiPost[$i]['deskripsi2'], true);

            // kalau gagal decode JSON (karena format bukan JSON)
            if (!is_array($list_data[$i])) {
              // fallback: parsing manual
              $string = trim($JelajahiPost[$i]['deskripsi2'], "[] \n");
              $list_data[$i] = array_map(function ($val) {
                return trim($val, "' ");
              }, explode(",", $string));
            }
          ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <img src="<?php echo $JelajahiPost[$i]['gambar'] ?>" alt="Danau" class="w-72 h-40 mt-6 object-cover rounded-lg mx-auto">
              <div class="p-5">
                <h3 class="text-xl font-bold mb-3"><?php echo $JelajahiPost[$i]['judul'] ?></h3>
                <p class="mb-3"><?php echo $JelajahiPost[$i]['deskripsi'] ?></p>
                <p class="font-semibold mb-2">Aktivitas yang Bisa Dilakukan:</p>
                <ul class="list-disc list-inside space-y-1">
                  <?php for ($j = 0; $j < count($list_data[$i]); $j++) { ?>
                    <li><?php echo $list_data[$i][$j]; ?></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </section>

    <!-- GALERI -->
<section class="bg-[#D1DACC] py-12">
  <div class="container max-w-6xl mx-auto px-6">
    <h2 class="text-2xl font-bold text-center mb-8">Galeri</h2>
    <div class="bg-white p-8 rounded-lg shadow-md">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <img src="assets/img/lapangan.png" alt="Foto 1" class="w-full h-48 object-cover rounded-lg">
        <img src="assets/img/hotell.jpg" alt="Foto 2" class="w-full h-48 object-cover rounded-lg">
        <img src="assets/img/kolam.jpeg" alt="Foto 3" class="w-full h-48 object-cover rounded-lg">
        <img src="assets/img/danau.jpeg" alt="Foto 4" class="w-full h-48 object-cover rounded-lg">
        <img src="assets/img/tangga.jpg" alt="Foto 5" class="w-full h-48 object-cover rounded-lg">
        <img src="assets/img/resep.jpg" alt="Foto 6" class="w-full h-48 object-cover rounded-lg">
        <img src="assets/img/kamar.jpg" alt="Foto 7" class="w-full h-48 object-cover rounded-lg col-span-2">
      </div>

      <!-- Tombol ke Blog -->
    <div class="text-center mt-8">
      <a href="{{ route('blog.index') }}" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-700 transition">
        Lihat Blog
      </a>
    </div>
    </div>
  </div>
</section>

    <!-- FAQ -->
    <section class="bg-white py-12">
      <div class="container max-w-6xl mx-auto px-6">
        <h2 class="text-2xl font-bold text-center mb-8">FAQ</h2>
        <div class="space-y-4">
          <?php
          for ($i = 0; $i < count($FaqPost); $i += 1) {
          ?>
            <button class="w-full flex justify-between items-center px-4 py-3 bg-green-500 text-white font-semibold rounded-lg">
              <span><?php echo $FaqPost[$i]['question'] ?></span>
              <i class="ph ph-caret-down text-xl"></i>
            </button>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-black text-white py-10">
      <div class="container max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        <div>
          <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Alamat Kami</h3>
          <p class="text-gray-300 mb-4">Muara Fajar, Kec. Rumbai, Kota Pekanbaru, Riau 28267</p>
          <img src="assets/img/peta.png" alt="Peta Lokasi" class="w-full rounded-md shadow-md">
        </div>
        <div>
          <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Jelajahi</h3>
          <ul class="space-y-2 text-gray-300">
            <li><a href="#" class="hover:text-white">Beranda</a></li>
            <li><a href="#" class="hover:text-white">Tentang</a></li>
            <li><a href="#" class="hover:text-white">Kontak</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Jam Kerja</h3>
          <p class="text-gray-300">Setiap Hari : 24 Jam</p>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Media Sosial</h3>
          <div class="flex space-x-3">
            <a href="#" class="bg-gray-800 p-2 rounded-md hover:bg-green-600">
              <i class="ph ph-facebook-logo text-xl"></i>
            </a>
            <a href="#" class="bg-gray-800 p-2 rounded-md hover:bg-green-600">
              <i class="ph ph-instagram-logo text-xl"></i>
            </a>
            <a href="#" class="bg-gray-800 p-2 rounded-md hover:bg-green-600">
              <i class="ph ph-tiktok-logo text-xl"></i>
            </a>
            <a href="#" class="bg-gray-800 p-2 rounded-md hover:bg-green-600">
              <i class="ph ph-whatsapp-logo text-xl"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>

  </div>
</body>

</html>