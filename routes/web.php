<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // 2. Ambil 3 berita terbaru yang sudah waktunya publish
    $latestBerita = Berita::where('published_at', '<=', now()) // Hanya ambil berita yang sudah publish
        ->latest('published_at') // Urutkan dari yang paling baru
        ->take(3) // Ambil hanya 3
        ->get();

    // 3. Kirim data berita ke view 'home'
    return view('home', [
        'latestBerita' => $latestBerita,
    ]);
});
