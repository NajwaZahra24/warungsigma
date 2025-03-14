<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Membeli - Waroeng Sigma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-pink-50">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Waroeng Sigma" class="h-10"/>
            <nav class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-pink-500">Home</a>
                <a href="{{ route('beli.robux') }}" class="text-gray-700 hover:text-pink-500">Beli Robux</a>
                <a href="#" class="text-gray-700 hover:text-pink-500">Cek Pesanan</a>
                <a href="#" class="text-gray-700 hover:text-pink-500 font-bold">Cara Membeli</a>
                <a href="#" class="text-gray-700 hover:text-pink-500">FAQ</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold text-gray-800 text-center">Cara Membeli Robux di Waroeng Sigma</h1>
        <p class="text-gray-600 text-center mt-4">Ikuti langkah-langkah berikut untuk melakukan pembelian dengan aman dan cepat.</p>
        
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="{{ asset('images/step1.png') }}" alt="Step 1" class="h-20 mx-auto">
                <h2 class="text-xl font-semibold text-gray-800 mt-4">1. Masukkan Username Roblox anda</h2>
                <p class="text-gray-600 mt-2">Pilih jumlah Robux yang ingin dibeli sesuai kebutuhan Anda.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="{{ asset('images/step2.png') }}" alt="Step 2" class="h-20 mx-auto">
                <h2 class="text-xl font-semibold text-gray-800 mt-4">2. Isi nominal robux yang anda mau</h2>
                <p class="text-gray-600 mt-2">Gunakan metode pembayaran yang tersedia, seperti transfer bank atau e-wallet.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="{{ asset('images/step3.png') }}" alt="Step 3" class="h-20 mx-auto">
                <h2 class="text-xl font-semibold text-gray-800 mt-4">3. Masukkan tanggal, bulan, dan tahun pembayaran</h2>
                <p class="text-gray-600 mt-2">Setelah pembayaran terkonfirmasi, Robux akan dikirim ke akun Anda secara instan.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="{{ asset('images/step3.png') }}" alt="Step 4" class="h-20 mx-auto">
                <h2 class="text-xl font-semibold text-gray-800 mt-4">4. pilih metode pembayaran</h2>
                <p class="text-gray-600 mt-2">Setelah pembayaran terkonfirmasi, Robux akan dikirim ke akun Anda secara instan.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="{{ asset('images/step3.png') }}" alt="Step 5" class="h-20 mx-auto">
                <h2 class="text-xl font-semibold text-gray-800 mt-4">5. Lalu pastikan semua data yang anda masukkan ke dalam form benar</h2>
                <p class="text-gray-600 mt-2">Setelah pembayaran terkonfirmasi, Robux akan dikirim ke akun Anda secara instan.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="{{ asset('images/step3.png') }}" alt="Step 6" class="h-20 mx-auto">
                <h2 class="text-xl font-semibold text-gray-800 mt-4">6. Robux Dikirim</h2>
                <p class="text-gray-600 mt-2">Setelah pembayaran terkonfirmasi, Robux akan dikirim ke akun Anda secara instan.</p>
            </div>
            
        </div>
        
        <div class="mt-12 text-center">
            <a href="{{ route('beli.robux') }}" class="bg-pink-500 text-white px-6 py-3 rounded-lg hover:bg-pink-600 text-lg">Beli Robux Sekarang</a>
        </div>
    </main>
    
    <footer class="bg-white py-8 mt-20 text-center">
        <p class="text-gray-600">Copyright © 2025 Waroeng Sigma</p>
    </footer>
</body>
</html>
