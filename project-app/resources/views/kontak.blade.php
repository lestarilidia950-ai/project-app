<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak | Rindu Sempadan</title>
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
  <nav class="sticky top-0 z-50 bg-[#D1DACC] shadow-md">
    <div class="container max-w-6xl mx-auto flex justify-between items-center px-6 h-[70px]">
      <!-- Logo -->
      <div class="flex items-center">
        <img class="h-10 md:h-12" src="assets/img/rindus.png" alt="Logo Rindu Sempadan">
      </div>

      <!-- Menu -->
      <ul class="hidden md:flex space-x-6 items-center font-semibold">
        <li><a href="{{ route('index') }}" class="text-[#0A400C] hover:text-[#AFE1AF]">Beranda</a></li>
        <li><a href="{{ route('blog.index') }}" class="hover:text-green-700">Blog</a></li>
        <li><a href="{{ route('tentang') }}" class="text-[#0A400C] hover:text-[#AFE1AF]">Tentang</a></li>
        <li><a href="{{ route('kontak') }}" class="text-[#0A400C] hover:text-[#AFE1AF]">Kontak</a></li>
      </ul>

      <!-- Mobile Menu Button -->
      <button id="menu-btn" class="md:hidden text-[#0A400C] text-3xl">
        <i class="ph ph-list"></i>
      </button>
    </div>

    <!-- Mobile Dropdown -->
    <div id="menu" class="hidden md:hidden bg-[#D1DACC] px-6 py-4 space-y-3 font-semibold">
      <a href="{{ route('index') }}" class="block text-[#0A400C] hover:text-[#AFE1AF]">Beranda</a>
      <a href="{{ route('blog.index') }}" class="block hover:text-green-700">Blog</a>
      <a href="{{ route('tentang') }}" class="block text-[#0A400C] hover:text-[#AFE1AF]">Tentang</a>
      <a href="{{ route('kontak') }}" class="block text-[#0A400C] hover:text-[#AFE1AF]">Kontak</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative w-full h-[300px] sm:h-[400px] md:h-[500px] bg-[url('assets/img/latar.png')] bg-cover bg-center flex items-center">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative container max-w-6xl mx-auto px-6 text-center text-white">
      <h1 class="text-3xl sm:text-4xl md:text-6xl font-black">Kontak</h1>
    </div>
  </section>

  <!-- Kontak Section -->
  <section class="w-full py-12 bg-white">
    <div class="container max-w-6xl mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        
        <!-- Kiri -->
        <div class="space-y-6">
          <div>
            <h2 class="text-xl md:text-2xl font-bold text-[#0A400C] mb-2">Terhubung dengan Kami</h2>
            <p class="text-base text-[#0A400C]">
              Merencanakan liburan Anda atau memiliki pertanyaan tentang Taman Wisata Rindu Sempadan? Kami senang mendengar dari Anda!
            </p>
          </div>
          <div>
            <h2 class="text-xl md:text-2xl font-bold text-[#0A400C] mb-2">Media Sosial</h2>
            <div class="space-y-3 text-base text-[#0A400C]">
              <div class="flex items-center space-x-2">
                <i class="ph ph-whatsapp-logo text-xl"></i>
                <p>Chat kami di Whatsapp</p>
              </div>
              <div class="flex items-center space-x-2">
                <i class="ph ph-facebook-logo text-xl"></i>
                <p>Kunjungi halaman Facebook kami</p>
              </div>
              <div class="flex items-center space-x-2">
                <i class="ph ph-instagram-logo text-xl"></i>
                <p>Ikuti kami di Instagram</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Kanan (Form) -->
        <div>
          <form action="#" method="POST" class="space-y-4">
            <div>
              <label class="block text-sm font-semibold text-[#000000]">Nama</label>
              <input type="text" placeholder="Siapa Pengirim Email ini"
                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
              <label class="block text-sm font-semibold text-[#000000]">Email</label>
              <input type="email" placeholder="Email ini"
                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
              <label class="block text-sm font-semibold text-[#000000]">Pesan</label>
              <textarea rows="4" placeholder="Tulis pesan kamu di sini..."
                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-[#000000] text-white text-lg font-semibold px-6 py-4 rounded-lg hover:bg-green-700">
              Kirim Pesan
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
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
          <li><a href="{{ route('index') }}" class="hover:text-white">Beranda</a></li>
          <li><a href="{{ route('blog.index') }}" class="hover:text-white">Blog</a></li>
          <li><a href="{{ route('tentang') }}" class="hover:text-white">Tentang</a></li>
          <li><a href="{{ route('kontak') }}" class="hover:text-white">Kontak</a></li>
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

  <!-- Script menu mobile -->
  <script>
    const menuBtn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");

    menuBtn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  </script>

</body>
</html>
