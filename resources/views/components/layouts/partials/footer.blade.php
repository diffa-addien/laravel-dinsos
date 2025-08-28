<footer class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="col-span-1 lg:col-span-2">
                <div class="flex items-center space-x-4 mb-4">
                    <img src="{{ url('assets/logo_haltim.png') }}" alt="Logo Dinsos" class="h-12 bg-white p-1 rounded-full">
                    <div>
                        <h1 class="text-lg font-bold">DINAS SOSIAL</h1>
                        <p class="text-sm text-gray-300">Kabupaten Halmahera Timur</p>
                    </div>
                </div>
                <p class="text-gray-400 max-w-md">
                    Website resmi Dinas Sosial Kabupaten Halmahera Timur. Menyajikan informasi seputar program, kegiatan, dan layanan sosial.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4 tracking-wider">TAUTAN</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Profil Dinas</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Berita & Kegiatan</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Galeri</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Layanan Publik</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4 tracking-wider">HUBUNGI KAMI</h3>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt w-5 mt-1 text-gray-500"></i>
                        <span>Jalan Lintas Maba-Buli, Desa Buli, Kec. Maba</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope w-5 mt-1 text-gray-500"></i>
                        <span>kontak@dinsos.haltimkab.go.id</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-black py-4">
        <div class="container mx-auto px-4 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} Dinas Sosial Kabupaten Halmahera Timur. All Rights Reserved.
        </div>
    </div>
</footer>