<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Waroeng Sigma</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Registrasi</h2>
        
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="password">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" required>
            </div>

            <button type="submit" class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600">Daftar</button>
        </form>

        <p class="text-center text-gray-600 mt-4">Sudah punya akun? 
            <a href="{{ route('signin') }}" class="text-pink-500 hover:underline">Login</a>
        </p>
    </div>
</body>
</html>
