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
    <nav class="sticky top-0 z-50 bg-[#D1DACC] w-full shadow-md">
      <div class="container max-w-6xl mx-auto flex justify-between items-center h-[70px] px-6">
        <img class="h-10 md:h-12" src="assets/img/rindus.png" alt="Logo Rindu Sempadan">

        <!-- Menu Desktop -->
        <ul class="hidden md:flex space-x-6 items-center font-semibold">
          <li><a href="{{ route('index') }}" class="hover:text-green-700">Beranda</a></li>
          <li><a href="{{ route('blog.index') }}" class="hover:text-green-700">Blog</a></li>
          <li><a href="{{ route('tentang') }}" class="hover:text-green-700">Tentang</a></li>
          <li><a href="{{ route('kontak') }}" class="hover:text-green-700">Kontak</a></li>
        </ul>

        <!-- Tombol Mobile -->
        <button id="menu-btn" class="md:hidden text-2xl text-[#0A400C]">
          <i class="ph ph-list"></i>
        </button>
      </div>

      <!-- Menu Mobile -->
      <div id="mobile-menu" class="hidden flex-col space-y-3 px-6 py-4 bg-[#D1DACC] md:hidden">
        <a href="{{ route('index') }}" class="block font-semibold">Beranda</a>
        <a href="{{ route('blog.index') }}" class="block font-semibold">Blog</a>
        <a href="{{ route('tentang') }}" class="block font-semibold">Tentang</a>
        <a href="{{ route('kontak') }}" class="block font-semibold">Kontak</a>
      </div>
    </nav>

    <!-- HERO -->
    <section class="relative w-full h-[500px] bg-[url('assets/img/bg.png')] bg-cover bg-center flex items-center">
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative container max-w-6xl mx-auto px-6 text-white">
        <h1 class="text-4xl md:text-6xl font-script mb-4">
          Selamat Datang di Rindu Sempadan
        </h1>
        <p class="text-base md:text-lg leading-relaxed max-w-3xl">
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
          <?php for ($i = 0; $i < count($panduanpost); $i++) { ?>
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
          <?php
          for ($i = 0; $i < count($JelajahiPost); $i++) {
            $list_data[$i] = json_decode($JelajahiPost[$i]['deskripsi2'], true);
            if (!is_array($list_data[$i])) {
              $string = trim($JelajahiPost[$i]['deskripsi2'], "[] \n");
              $list_data[$i] = array_map(function ($val) {
                return trim($val, "' ");
              }, explode(",", $string));
            }
          ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <img src="<?php echo $JelajahiPost[$i]['gambar'] ?>" alt="Foto"
                class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="text-xl font-bold mb-3"><?php echo $JelajahiPost[$i]['judul'] ?></h3>
                <p class="mb-3 text-sm md:text-base"><?php echo $JelajahiPost[$i]['deskripsi'] ?></p>
                <p class="font-semibold mb-2">Aktivitas yang Bisa Dilakukan:</p>
                <ul class="list-disc list-inside space-y-1 text-sm md:text-base">
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
            <img src="assets/img/lapangan.png" class="w-full h-48 object-cover rounded-lg">
            <img src="assets/img/hotell.jpg" class="w-full h-48 object-cover rounded-lg">
            <img src="assets/img/kolam.jpeg" class="w-full h-48 object-cover rounded-lg">
            <img src="assets/img/danau.jpeg" class="w-full h-48 object-cover rounded-lg">
            <img src="assets/img/tangga.jpg" class="w-full h-48 object-cover rounded-lg">
            <img src="assets/img/resep.jpg" class="w-full h-48 object-cover rounded-lg">
            <img src="assets/img/kamar.jpg" class="w-full h-48 object-cover rounded-lg col-span-2">
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="bg-white py-12">
      <div class="container max-w-6xl mx-auto px-6">
        <h2 class="text-2xl font-bold text-center mb-8">FAQ</h2>
        <div class="space-y-4">
          <?php for ($i = 0; $i < count($FaqPost); $i++) { ?>
            <div class="border rounded-lg overflow-hidden">
              <button class="faq-btn w-full flex justify-between items-center px-4 py-3 bg-green-500 text-white font-semibold">
                <span><?php echo $FaqPost[$i]['question'] ?></span>
                <i class="ph ph-caret-down text-xl"></i>
              </button>
              <div class="faq-content hidden px-4 py-3 bg-gray-100 text-gray-700">
                <?php echo $FaqPost[$i]['answer'] ?>
              </div>
            </div>
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
          <img src="assets/img/peta.png" class="w-full rounded-md shadow-md">
        </div>
        <div>
          <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Jelajahi</h3>
          <ul class="space-y-2 text-gray-300">
            <li><a href="{{ route('index') }}" class="hover:text-white">B E R A N D A</a></li>
            <li><a href="{{ route('blog.index') }}" class="hover:text-white">B L O G</a></li>
            <li><a href="{{ route('tentang') }}" class="hover:text-white">T E N T A N G</a></li>
            <li><a href="{{ route('kontak') }}" class="hover:text-white">K O N T A K</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Jam Kerja</h3>
          <p class="text-gray-300">Setiap Hari : 24 Jam</p>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Media Sosial</h3>
          <div class="flex space-x-3">
            <a href="#" class="bg-gray-800 p-2 rounded-md hover:bg-green-600"><i class="ph ph-facebook-logo text-xl"></i></a>
            <a href="#" class="bg-gray-800 p-2 rounded-md hover:bg-green-600"><i class="ph ph-instagram-logo text-xl"></i></a>
            <a href="#" class="bg-gray-800 p-2 rounded-md hover:bg-green-600"><i class="ph ph-tiktok-logo text-xl"></i></a>
            <a href="#" class="bg-gray-800 p-2 rounded-md hover:bg-green-600"><i class="ph ph-whatsapp-logo text-xl"></i></a>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <!-- ✅ FLOATING WHATSAPP -->
  <a href="https://wa.me/6282171986481?text=Halo%20Admin%20Rindu%20Sempadan,%20saya%20ingin%20bertanya%20tentang%20fasilitas%20dan%20jam%20buka." 
     target="_blank" 
     aria-label="Chat via WhatsApp"
     class="fixed bottom-5 right-5 w-14 h-14 bg-green-500 rounded-full shadow-lg flex items-center justify-center text-white text-3xl hover:bg-green-600 hover:scale-110 transition-transform duration-200 z-[9999]">
     <i class="ph ph-whatsapp-logo"></i>
  </a>

  <!-- Script -->
  <script>
    // Toggle Menu Mobile
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });

    // FAQ Accordion
    const faqBtns = document.querySelectorAll(".faq-btn");
    faqBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        const content = btn.nextElementSibling;
        content.classList.toggle("hidden");
      });
    });
  </script>
</body>
</html>
