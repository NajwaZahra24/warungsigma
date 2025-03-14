<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeliRobuxController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:100',
            'tanggal_pembelian' => 'required|date',
            'metode_pembayaran' => 'required|string',
        ]);

        // Simpan ke database
        DB::table('purchases')->insert([
            'username' => $request->username,
            'jumlah' => $request->jumlah,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'metode_pembayaran' => $request->metode_pembayaran,
            'created_at' => now(),
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('beli.robux')->with('success', 'Pembelian berhasil!');
    }
}
