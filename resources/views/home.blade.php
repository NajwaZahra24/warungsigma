<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Warung Sigma
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Inter', sans-serif;
        }
  </style>
 </head>
 <body class="bg-pink-50"> 
   <header class="bg-white shadow">
     <div class="container mx-auto px-4 py-4 flex justify-between items-center">
       <!-- Logo -->
       <div class="flex items-center">
         <img alt="Waroeng Sigma logo" class="h-10" src="{{ asset('images/logonew1.png') }}" width="150"/>
       </div>
 
       <!-- Menu Navigasi -->
       <nav class="flex items-center space-x-6">
         <a class="text-gray-700 hover:text-pink-500" href="#">Home</a>
         <a class="text-gray-700 hover:text-pink-500" href="{{ route('beli.robux') }}">Beli Robux</a>
         <a class="text-gray-700 hover:text-pink-500" href="#">Cek Pesanan</a>
         <a class="text-gray-700 hover:text-pink-500" href="#">FAQ</a>
       </nav>
 
       <div class="flex space-x-4">
        <!-- Tombol Registrasi -->
    
        <!-- Tombol Login -->
        <a class="text-white bg-pink-500 px-4 py-2 rounded hover:bg-pink-600" 
           href="{{ route('signin') }}">
            Login
        </a>
    </div>
    
     </div>
   </header> 
  <main class="container mx-auto px-4 py-12">
   <div class="flex flex-col md:flex-row-reverse items-center text-center md:text-left mt-16">
       <img alt="Roblox character" class="h-96 w-auto md:ml-8" src="{{ asset('images/rblx.png') }}" />
       <div>
           <h1 class="text-4xl font-bold text-gray-800">
               Beli Robux Murah dan Bergaransi di Waroeng Sigma
           </h1>
           <p class="text-gray-600 mt-4">
               Upgrade akun Roblox serba untung hanya di Waroeng Sigma, proses instan dan dapatkan garansi 100% aman!
           </p>
           <div class="mt-6 flex justify-center md:justify-start space-x-4">
               <a class="bg-pink-500 text-white px-6 py-3 rounded hover:bg-pink-600" href="{{ route('beli.robux') }}">
                   Beli Robux
               </a>
               <a class="border border-pink-500 text-pink-500 px-6 py-3 rounded hover:bg-pink-500 hover:text-white" href="{{ route('caramembeli') }}">
                  Cara Membeli
              </a>              
           </div>
       </div>
   </div>
   <div class="mt-60 text-center">
      <h2 class="text-2xl font-bold text-gray-800">
       Testimoni Pembeli Waroeng Sigma
      </h2>
   <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-lg shadow">
     <h2 class="text-2xl font-bold text-gray-800">
      91.918
     </h2>
     <p class="text-gray-600 mt-2">
      Stock Robux
     </p>
     <p class="text-gray-600 mt-2">
        Dapatkan harga terbaik dengan stok terlengkap hanya di WarungSigma! Pesan sekarang!
     </p>
     <a class="text-pink-500 mt-4 inline-block" href="#">
      Beli Robux
     </a>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
     <h2 class="text-2xl font-bold text-gray-800">
      98.733.573
     </h2>
     <p class="text-gray-600 mt-2">
      Robux Terjual
     </p>
     <p class="text-gray-600 mt-2">
      Waroeng Sigma selalu memberikan kenyamanan dan keamanan kepada pembeli.
     </p>
     <a class="text-pink-500 mt-4 inline-block" href="#">
      Cara Membeli
     </a>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
     <h2 class="text-2xl font-bold text-gray-800">
      228.770
     </h2>
     <p class="text-gray-600 mt-2">
      Pembeli
     </p>
     <p class="text-gray-600 mt-2">
     Waroeng Sigma telah dipercaya oleh ribuan orang, karena kami selalu memberikan pelayanan yang cepat dan aman.
     </p>
     <a class="text-pink-500 mt-4 inline-block" href="#">
      Sosial Media Waroeng Sigma
     </a>
    </div>
   </div>
   <div class="mt-60 text-center">
      <h2 class="text-2xl font-bold text-gray-800 mb-20">
          Percayakan Robux anda di Waroeng Sigma
      </h2>
      <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-6">
          <div class="flex flex-col items-center">
              <img alt="Pengiriman Instan icon" class="h-20" height="80" src="{{ asset('images/2.png') }}" width="80"/>
              <p class="text-gray-600 mt-3 text-base font-normal">
                  Pengiriman Instan
              </p>
          </div>
          <div class="flex flex-col items-center">
              <img alt="Pembayaran Terlengkap icon" class="h-20" height="80" src="{{ asset('images/1.png') }}" width="80"/>
              <p class="text-gray-600 mt-3 text-base font-normal">
                  Pembayaran Terlengkap
              </p>
          </div>
          <div class="flex flex-col items-center">
              <img alt="Mudah dan Bergaransi icon" class="h-20" height="80" src="{{ asset('images/3.png') }}" width="80"/>
              <p class="text-gray-600 mt-3 text-base font-normal">
                  Mudah dan Bergaransi
              </p>
          </div>
          <div class="flex flex-col items-center">
              <img alt="Pelayanan Terbaik icon" class="h-20" height="80" src="{{ asset('images/4.png') }}" width="80"/>
              <p class="text-gray-600 mt-3 text-base font-normal">
                  Pelayanan Terbaik
              </p>
          </div>
      </div>
  </div>  
  </main>
  <footer class="bg-white py-8 mt-20 lg:mt-40">
   <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row justify-between items-center">
     <div class="text-center md:text-left">
      <img alt="Waroeng Sigma logo" class="h-10 mx-auto md:mx-0" height="50" src="{{ asset('images/logo.png') }}" width="50"/>
      <p class="text-gray-600 mt-4">
       Percayakan Robux anda di Waroeng Sigma
      </p>
      <p class="text-gray-600 mt-2">
       Copyright © 2025 Waroeng Sigma
      </p>
     </div>
     <div class="mt-6 md:mt-0 flex space-x-8">
      <div>
       <h3 class="text-gray-800 font-bold">
        Sosial Media
       </h3>
       <div class="mt-2 flex space-x-4">
        <a class="text-gray-600 hover:text-pink-500" href="https://facebook.com">
         <i class="fab fa-facebook-f">
         </i>
        </a>
        <a class="text-gray-600 hover:text-pink-500" href="https://x.com">
         <i class="fab fa-twitter">
         </i>
        </a>
        <a class="text-gray-600 hover:text-pink-500" href="https://www.instagram.com/">
         <i class="fab fa-instagram">
         </i>
        </a>
       </div>
      </div>
      <div>
       <h3 class="text-gray-800 font-bold">
        Produk
       </h3>
       <ul class="mt-2 space-y-2">
        <li>
         <a class="text-gray-600 hover:text-pink-500" href="#">
          Beli Robux
         </a>
        </li>
        <li>
         <a class="text-gray-600 hover:text-pink-500" href="#">
          Cara Membeli
         </a>
        </li>
        <li>
         <a class="text-gray-600 hover:text-pink-500" href="#">
          Lihat Ranking
         </a>
        </li>
       </ul>
      </div>
      <div>
       <h3 class="text-gray-800 font-bold">
        Bantuan
       </h3>
       <ul class="mt-2 space-y-2">
        <li>
         <a class="text-gray-600 hover:text-pink-500" href="#">
          Kontak Support
         </a>
        </li>
        <li>
         <a class="text-gray-600 hover:text-pink-500" href="#">
          FAQs
         </a>
        </li>
       </ul>
      </div>
      <div>
       <h3 class="text-gray-800 font-bold">
        Panduan
       </h3>
       <ul class="mt-2 space-y-2">
        <li>
         <a class="text-gray-600 hover:text-pink-500" href="#">
          Syarat dan Kebijakan
         </a>
        </li>
        <li>
         <a class="text-gray-600 hover:text-pink-500" href="#">
          Privasi
         </a>
        </li>
       </ul>
      </div>
     </div>
    </div>
   </div>
  </footer>
 </body>
</html>
