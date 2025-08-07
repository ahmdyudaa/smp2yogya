<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold">SN</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold">SMA Nusantara Cendekia</h3>
                    </div>
                </div>
                <p class="text-gray-400 mb-6">
                    Sekolah menengah atas unggulan yang mengutamakan prestasi akademik dan pembentukan karakter siswa.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                        <i class="ri-youtube-line"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                        <i class="ri-twitter-line"></i>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-6">Menu Utama</h4>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a></li>
                    <li><a href="{{ route('profile') }}" class="hover:text-white transition-colors">Profil Sekolah</a></li>
                    <li><a href="{{ route('academics') }}" class="hover:text-white transition-colors">Program Akademik</a></li>
                    <li><a href="{{ route('facilities') }}" class="hover:text-white transition-colors">Fasilitas</a></li>
                    <li><a href="{{ route('achievements') }}" class="hover:text-white transition-colors">Prestasi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-6">Informasi</h4>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="{{ route('admissions') }}" class="hover:text-white transition-colors">Penerimaan Siswa Baru</a></li>
                    <li><a href="{{ route('news') }}" class="hover:text-white transition-colors">Berita & Pengumuman</a></li>
                    <li><a href="{{ route('calendar') }}" class="hover:text-white transition-colors">Kalender Akademik</a></li>
                    <li><a href="{{ route('downloads') }}" class="hover:text-white transition-colors">Download</a></li>
                    <li><a href="{{ route('faq') }}" class="hover:text-white transition-colors">FAQ</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-6">Kontak</h4>
                <div class="space-y-3 text-gray-400">
                    <div class="flex items-start space-x-3">
                        <div class="w-5 h-5 flex items-center justify-center mt-1">
                            <i class="ri-map-pin-line text-sm"></i>
                        </div>
                        <span class="text-sm">Jl. Pendidikan Raya No. 123<br />Jakarta Selatan 12180</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-phone-line text-sm"></i>
                        </div>
                        <span class="text-sm">(021) 7654-3210</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-mail-line text-sm"></i>
                        </div>
                        <span class="text-sm">info@smanusantara.sch.id</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} SMA Nusantara Cendekia. Seluruh hak cipta dilindungi undang-undang.</p>
        </div>
    </div>
</footer>