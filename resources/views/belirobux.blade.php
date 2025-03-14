<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Robux - Warung Sigma</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 py-12">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold text-gray-800 text-center">Beli Robux</h2>
        <form action="{{ route('/BeliRobuxController.php') }}" method="POST" class="mt-4">
            @csrf
            <!-- Username Roblox -->
            <label class="block text-gray-700 font-semibold">Username Roblox</label>
            <input type="text" name="username" required class="w-full p-3 border rounded mt-2 focus:ring-2 focus:ring-pink-500">
            
            <!-- Jumlah Robux -->
            <label class="block text-gray-700 font-semibold mt-4">Jumlah Robux</label>
            <input type="number" name="jumlah" step="100" min="100" required class="w-full p-3 border rounded mt-2 focus:ring-2 focus:ring-pink-500">
            
            <!-- Tanggal Pembelian -->
            <label class="block text-gray-700 font-semibold mt-4">Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" required class="w-full p-3 border rounded mt-2 focus:ring-2 focus:ring-pink-500">
            
            <!-- Metode Pembayaran -->
            <label class="block text-gray-700 font-semibold mt-4">Metode Pembayaran</label>
            <select name="metode_pembayaran" required class="w-full p-3 border rounded mt-2 focus:ring-2 focus:ring-pink-500">
                <optgroup label="E-Wallet">
                    <option value="dana">Dana</option>
                    <option value="spay">ShopeePay</option>
                    <option value="ovo">OVO</option>
                    <option value="gopay">GoPay</option>
                </optgroup>
                <optgroup label="Debit Bank">
                    <option value="bca">BCA</option>
                    <option value="bni">BNI</option>
                    <option value="bri">BRI</option>
                    <option value="mandiri">Mandiri</option>
                </optgroup>
            </select>
            
            <!-- Tombol Submit -->
            <button type="submit" class="mt-6 w-full bg-pink-500 text-white p-3 rounded hover:bg-pink-600">Beli Sekarang</button>
        </form>
    </div>
</body>
</html>
