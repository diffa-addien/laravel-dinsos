<x-layouts.app>
    {{-- 1. Hero Section --}}
    <section class="relative min-h-[500px] md:min-h-[600px] flex items-center bg-cover bg-center" style="background-image: url('https://dinsos.haltimkab.go.id/wp-content/uploads/2023/12/DSC_0129-scaled.jpg');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/20"></div>
        <div class="relative container mx-auto px-4 text-white">
            <div class="max-w-2xl">
                <h1 data-aos="fade-right" class="text-4xl md:text-6xl font-extrabold leading-tight mb-4">
                    Melayani Masyarakat, Membangun Kesejahteraan
                </h1>
                <p data-aos="fade-right" data-aos-delay="200" class="text-lg md:text-xl mb-8">
                    Selamat datang di portal resmi Dinas Sosial Kabupaten Halmahera Timur. Temukan informasi terbaru seputar layanan dan program sosial kami.
                </p>
                <div data-aos="fade-right" data-aos-delay="400">
                    <a href="#sambutan" class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition-all transform hover:scale-105">
                        Jelajahi Lebih Lanjut <i class="fas fa-arrow-down ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="py-16 md:py-24 space-y-20 md:space-y-28">

        {{-- 2. Sambutan Kepala Dinas --}}
        <section id="sambutan" class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12" data-aos="fade-up">
                <div class="md:w-1/3 text-center">
                    <img src="https://dinsos.haltimkab.go.id/wp-content/uploads/2023/12/Kadis-removebg-preview-1.png" alt="Kepala Dinas" class="rounded-lg shadow-2xl inline-block w-64">
                </div>
                <div class="md:w-2/3 text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Sambutan Kepala Dinas</h2>
                    <p class="font-medium text-gray-500 mb-6">Obeid Saleh, S.IP</p>
                    <p class="text-gray-600 leading-relaxed text-base italic">
                        "Dengan semangat gotong royong, kami berkomitmen untuk terus berinovasi dalam memberikan pelayanan sosial yang cepat, tepat, dan merata bagi seluruh masyarakat Halmahera Timur. Mari bersama kita wujudkan kesejahteraan sosial yang berkeadilan."
                    </p>
                </div>
            </div>
        </section>

        {{-- 3. Sekilas Tentang Kami --}}
        <section class="container mx-auto px-4">
             <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800" data-aos="fade-up">Sekilas Tentang Kami</h2>
                <p class="text-gray-500 mt-2" data-aos="fade-up" data-aos-delay="100">Visi, Misi, dan Komitmen Kami</p>
            </div>
             <div class="flex flex-col md:flex-row items-center gap-10">
                 <div class="md:w-1/2" data-aos="fade-right">
                     <img src="https://dinsos.haltimkab.go.id/wp-content/uploads/2023/12/photo_2023-12-14_12-28-49-1024x768.jpg" alt="Kantor Dinsos" class="rounded-lg shadow-xl w-full">
                 </div>
                 <div class="md:w-1/2" data-aos="fade-left">
                     <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-blue-100 text-blue-600 p-3 rounded-full"><i class="fas fa-eye fa-lg"></i></div>
                            <div>
                                <h4 class="font-bold text-xl text-gray-800">Visi</h4>
                                <p class="text-gray-600">Terwujudnya Kesejahteraan Sosial Masyarakat Halmahera Timur yang Maju dan Mandiri.</p>
                            </div>
                        </div>
                         <div class="flex items-start gap-4">
                            <div class="bg-blue-100 text-blue-600 p-3 rounded-full"><i class="fas fa-bullseye fa-lg"></i></div>
                            <div>
                                <h4 class="font-bold text-xl text-gray-800">Misi</h4>
                                <ul class="list-disc list-inside text-gray-600">
                                    <li>Meningkatkan kualitas pelayanan sosial yang inklusif.</li>
                                    <li>Mengembangkan program pemberdayaan sosial yang inovatif.</li>
                                    <li>Memperkuat sinergi dengan seluruh pemangku kepentingan.</li>
                                </ul>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
        </section>

        {{-- 4. Berita Terbaru --}}
        <section class="bg-slate-50 py-16 md:py-24">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800" data-aos="fade-up">Berita & Kegiatan</h2>
                    <p class="text-gray-500 mt-2" data-aos="fade-up" data-aos-delay="100">Informasi terkini dari Dinas Sosial Halmahera Timur</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                        <img src="https://dinsos.haltimkab.go.id/wp-content/uploads/2023/12/photo_2023-12-14_13-05-46-768x576.jpg" alt="Berita 1" class="w-full h-56 object-cover">
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-2"><i class="fas fa-calendar-alt mr-2"></i>25 Agustus 2025</p>
                            <h3 class="font-bold text-xl mb-3 text-gray-800 group-hover:text-blue-600 transition-colors"><a href="#">Penyaluran Bantuan Sosial untuk Korban Bencana Alam</a></h3>
                            <a href="#" class="font-semibold text-blue-600 hover:text-blue-800 text-sm">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                        <img src="https://dinsos.haltimkab.go.id/wp-content/uploads/2023/12/photo_2023-12-14_13-03-34-768x576.jpg" alt="Berita 2" class="w-full h-56 object-cover">
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-2"><i class="fas fa-calendar-alt mr-2"></i>22 Agustus 2025</p>
                            <h3 class="font-bold text-xl mb-3 text-gray-800 group-hover:text-blue-600 transition-colors"><a href="#">Sosialisasi Program Keluarga Harapan (PKH) Tahun 2025</a></h3>
                            <a href="#" class="font-semibold text-blue-600 hover:text-blue-800 text-sm">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                        <img src="https://dinsos.haltimkab.go.id/wp-content/uploads/2023/12/photo_2023-12-14_12-29-01-768x576.jpg" alt="Berita 3" class="w-full h-56 object-cover">
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-2"><i class="fas fa-calendar-alt mr-2"></i>20 Agustus 2025</p>
                            <h3 class="font-bold text-xl mb-3 text-gray-800 group-hover:text-blue-600 transition-colors"><a href="#">Pelatihan Keterampilan bagi Penyandang Disabilitas</a></h3>
                            <a href="#" class="font-semibold text-blue-600 hover:text-blue-800 text-sm">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="mt-12 text-center" data-aos="fade-up">
                    <a href="#" class="bg-slate-700 text-white px-8 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all transform hover:scale-105">Lihat Semua Berita</a>
                </div>
            </div>
        </section>

        {{-- 5. Pengumuman Section (BARU) --}}
        <section class="bg-gray-800 py-16 md:py-24 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <i class="fas fa-bullhorn text-white text-[25rem] absolute -top-20 -left-20 transform rotate-12"></i>
            </div>
            <div class="container mx-auto px-4 text-center relative" data-aos="zoom-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Pusat Pengumuman</h2>
                <p class="text-gray-300 max-w-2xl mx-auto mb-8">Dapatkan informasi resmi dan pengumuman penting terkait jadwal, program, dan layanan terbaru dari Dinas Sosial.</p>
                <a href="#" class="bg-white text-gray-800 px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition-all transform hover:scale-105">
                    Lihat Semua Pengumuman
                </a>
            </div>
        </section>


        {{-- 6. Statistik Pengunjung Section (BARU) --}}
        <section class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800" data-aos="fade-up">Statistik Website</h2>
                <p class="text-gray-500 mt-2" data-aos="fade-up" data-aos-delay="100">Data kunjungan dan aktivitas pada portal kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 text-center">
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="0">
                    <div class="bg-blue-100 text-blue-600 text-3xl w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-eye"></i>
                    </div>
                    <p class="text-4xl font-bold text-gray-800">1,250</p>
                    <p class="text-gray-500">Pengunjung Hari Ini</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                     <div class="bg-green-100 text-green-600 text-3xl w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <p class="text-4xl font-bold text-gray-800">45,789</p>
                    <p class="text-gray-500">Total Kunjungan Bulan Ini</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                     <div class="bg-purple-100 text-purple-600 text-3xl w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <p class="text-4xl font-bold text-gray-800">3,421</p>
                    <p class="text-gray-500">Total Unduhan Formulir</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-2xl border border-gray-100" data-aos="fade-up" data-aos-delay="500">
                <div class="h-80 bg-gray-100 rounded-lg flex justify-center items-center">
                    <p class="text-gray-400">Placeholder untuk Grafik Statistik Pengunjung (Chart.js)</p>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>