<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang | Rindu Sempadan</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .font-script { font-family: 'Great Vibes', cursive; }
        .font-body { font-family: 'Quicksand', sans-serif; }
    </style>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="font-body bg-white">

    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-[#D1DACC] w-full h-[80px] shadow-md flex items-center">
      <div class="container max-w-6xl mx-auto flex justify-between items-center px-6">
          <!-- Logo -->
          <div class="flex items-center">
              <img class="h-12" src="assets/img/rindus.png" alt="Logo Rindu Sempadan">
          </div>
          <!-- Menu -->
          <ul class="flex space-x-6 items-center font-semibold">
              <li><a href="{{ route('index') }}" class="text-[#0A400C] hover:text-[#AFE1AF]">Beranda</a></li>
              <li><a href="{{ route('tentang') }}" class="text-[#0A400C] hover:text-[#AFE1AF]">Tentang</a></li>
              <li><a href="{{ route('kontak') }}" class="text-[#0A400C] hover:text-[#AFE1AF]">Kontak</a></li>
          </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative w-full h-[500px] bg-[url('assets/img/latar.png')] bg-cover bg-center flex items-start">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative container max-w-6xl mx-auto px-6 text-center text-white pt-24 md:pt-32">
            <h1 class="text-5xl md:text-6xl font-black">Ingin Tahu Kami?</h1>
        </div>
    </section>

    <!-- Latar Belakang -->
    <section class="w-full py-10 bg-white">
        <div class="container max-w-6xl mx-auto px-6 text-left">
            <h5 class="text-xl font-bold text-[#1E392A] mb-3">Latar Belakang</h5>
            <p class="text-justify">
                Taman Wisata Rindu Sempadan merupakan destinasi wisata alam yang menghadirkan keindahan panorama hijau, udara sejuk, dan suasana tenang sehingga menjadi tempat ideal untuk melepas penat dari rutinitas sehari-hari. 
                Dengan konsep taman yang tertata rapi, pepohonan rindang, serta area rekreasi yang ramah keluarga, Rindu Sempadan tidak hanya menawarkan keindahan alam, tetapi juga memberikan ruang edukasi dan interaksi sosial bagi masyarakat. 
                Keberadaannya diharapkan mampu menjadi sarana refreshing, meningkatkan kesadaran akan pentingnya menjaga lingkungan, sekaligus memberi dampak positif bagi perekonomian dan pembangunan daerah.
            </p>
        </div>
    </section>

    <!-- Sejarah Singkat -->
    <section class="w-full py-10 bg-white">
        <div class="container max-w-6xl mx-auto px-6 text-left">
            <h5 class="text-xl font-bold text-[#1E392A] mb-3">Sejarah Singkat</h5>
            <p class="text-justify">
                Taman Wisata Rindu Sempadan adalah kawasan wisata terpadu yang berkedudukan di perbatasan Kota Pekanbaru dan Kabupaten Siak, tepatnya di Jalan Raya Pekanbaru – Minas KM 23 (atau Jalan Yossudarso KM 23). 
                Wilayah ini masuk administrasi Kelurahan Minas Jaya, Kecamatan Minas, Kabupaten Siak, Provinsi Riau. 
                Awalnya tempat ini hadir sebagai resort/hotel dengan beberapa cottage dan fasilitas hotel, kemudian berkembang menjadi objek wisata lengkap yang menyediakan taman rekreasi, mini-zoo (kebun binatang mini), area outbound dan adventure, arena air seperti sepeda air, speed boat, kolam renang, hingga fasilitas pendukung seperti meeting room dan camping ground.
            </p>
            <p class="text-justify mt-3">
                Luas kawasan diperkirakan sekitar 67 hektar. Karena lokasinya di sempadan kota/kabupaten dan jauh dari keramaian pusat kota, Rindu Sempadan menjadi pilihan utama untuk wisata alam, pelepas penat, edukasi alam, serta rekreasi keluarga.
            </p>
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

</body>
</html>
