<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak | Rindu Sempadan</title>

  <!-- Tailwind -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">

  <!-- Custom Font -->
  <style>
    .font-script { font-family: 'Great Vibes', cursive; }
    .font-body { font-family: 'Quicksand', sans-serif; }
  </style>

  <!-- Icons -->
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
        <li>
          <a href="{{ route('index') }}" class="text-[#0A400C] hover:text-[#AFE1AF] transition">Beranda</a>
        </li>
        <li>
          <a href="{{ route('tentang') }}" class="text-[#0A400C] hover:text-[#AFE1AF] transition">Tentang</a>
        </li>
        <li>
          <a href="{{ route('kontak') }}" class="text-[#0A400C] hover:text-[#AFE1AF] transition">Kontak</a>
        </li>
      </ul>
    </div>
  </nav>

    <!-- Konten Blog -->
    <section class="container max-w-6xl mx-auto px-6 py-12">

    <!-- Tombol Kembali -->
    <div class="flex mb-6">
    <a href="{{ route('index') }}" 
        class="w-auto px-4 h-10 flex items-center gap-2 border rounded-lg bg-[#D1DACC] text-[#0A400C] font-semibold hover:opacity-80">
        
        <i class="ph ph-arrow-left text-lg"></i>
        <span>Kembali</span>
    </a>
    </div>

    @foreach($blogs as $blog)
    <!-- Card -->
    <div class="bg-[#D1DACC] rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center md:items-start gap-6 mb-8">
        <!-- Gambar -->
        <img src="{{ asset('storage/' . $blog->image) }}" 
            alt="{{ $blog->title }}" 
            class="w-full md:w-1/3 h-64 object-cover rounded-lg shadow">

        <!-- Deskripsi -->
        <div class="flex-1">
        <h2 class="text-xl font-bold text-[#0A400C] mb-2">{{ $blog->title }}</h2>
        <p class="text-sm text-gray-600 font-semibold mb-4">{{ $blog->first()->category->first()->category->name }}</p>
        <p class="text-gray-700 leading-relaxed">
          {{ $blog->description }}
        </p>
        </div>
    </div>
    @endforeach

    <!-- Pagination -->
     <div class="mt-8 mb-4 flex justify-center items-center">
    {{ $blogs->links() }}
     </div>
    <!-- <div class="flex justify-center items-center mt-8 space-x-2">
        <a href="#" class="w-10 h-10 flex items-center justify-center border rounded-lg bg-[#D1DACC] hover:opacity-80">
        <i class="ph ph-caret-left"></i>
        </a>
        <a href="#" class="w-10 h-10 flex items-center justify-center border rounded-lg bg-[#D1DACC] text-[#0A400C] font-semibold">1</a>
        <a href="#" class="w-10 h-10 flex items-center justify-center border rounded-lg bg-[#D1DACC] hover:opacity-80">2</a>
        <a href="#" class="w-10 h-10 flex items-center justify-center border rounded-lg bg-[#D1DACC] hover:opacity-80">3</a>
        <a href="#" class="w-10 h-10 flex items-center justify-center border rounded-lg bg-[#D1DACC] hover:opacity-80">
        <i class="ph ph-caret-right"></i>
        </a>
    </div>
    </section> -->


  <!-- Footer -->
  <footer class="bg-black text-white py-10">
    <div class="container max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
      
      <!-- Alamat -->
      <div>
        <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Alamat Kami</h3>
        <p class="text-gray-300 mb-4">Muara Fajar, Kec. Rumbai, Kota Pekanbaru, Riau 28267</p>
        <img src="assets/img/peta.png" alt="Peta Lokasi" class="w-full rounded-md shadow-md">
      </div>

      <!-- Navigasi -->
      <div>
        <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Jelajahi</h3>
        <ul class="space-y-2 text-gray-300">
          <li><a href="{{ route('index') }}" class="hover:text-white">Beranda</a></li>
          <li><a href="{{ route('tentang') }}" class="hover:text-white">Tentang</a></li>
          <li><a href="{{ route('kontak') }}" class="hover:text-white">Kontak</a></li>
        </ul>
      </div>

      <!-- Jam Kerja -->
      <div>
        <h3 class="text-lg font-bold mb-3 border-b-2 border-orange-500 inline-block">Jam Kerja</h3>
        <p class="text-gray-300">Setiap Hari : 24 Jam</p>
      </div>

      <!-- Media Sosial -->
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

