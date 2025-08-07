<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-xl">SN</span>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-900">SMA Nusantara Cendekia</h1>
                    <p class="text-sm text-gray-600">Unggul dalam Prestasi, Berkarakter Mulia</p>
                </div>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 text-primary font-medium">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-home-line"></i>
                    </div>
                    <span>Beranda</span>
                </a>
                <div class="relative group">
                    <a href="{{ route('profile') }}" class="flex items-center space-x-2 text-gray-700 hover:text-primary">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-user-line"></i>
                        </div>
                        <span>Profil</span>
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-arrow-down-s-line transition-transform group-hover:rotate-180"></i>
                        </div>
                    </a>
                    <div class="absolute left-0 top-full mt-2 w-56 bg-white rounded-xl shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <a href="{{ route('vision-mission') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-eye-line"></i>
                            </div>
                            <span>Visi & Misi</span>
                        </a>
                        <a href="{{ route('history') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-history-line"></i>
                            </div>
                            <span>Sejarah Sekolah</span>
                        </a>
                        <a href="{{ route('organization') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-team-line"></i>
                            </div>
                            <span>Struktur Organisasi</span>
                        </a>
                    </div>
                </div>
                <a href="{{ route('academics') }}" class="flex items-center space-x-2 text-gray-700 hover:text-primary">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-book-line"></i>
                    </div>
                    <span>Akademik</span>
                </a>
                <a href="{{ route('news') }}" class="flex items-center space-x-2 text-gray-700 hover:text-primary">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-news-line"></i>
                    </div>
                    <span>Berita</span>
                </a>
                <a href="{{ route('contact') }}" class="flex items-center space-x-2 text-gray-700 hover:text-primary">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-phone-line"></i>
                    </div>
                    <span>Kontak</span>
                </a>
            </nav>
            <button class="md:hidden w-8 h-8 flex items-center justify-center" id="mobile-menu-btn">
                <i class="ri-menu-line text-xl"></i>
            </button>
        </div>
    </div>
    <div class="md:hidden hidden bg-white border-t border-gray-200" id="mobile-menu">
        <div class="px-4 py-2 space-y-2">
            <a href="{{ route('home') }}" class="block py-2 text-primary font-medium">Beranda</a>
            <a href="{{ route('profile') }}" class="block py-2 text-gray-700">Profil</a>
            <a href="{{ route('academics') }}" class="block py-2 text-gray-700">Akademik</a>
            <a href="{{ route('news') }}" class="block py-2 text-gray-700">Berita</a>
            <a href="{{ route('contact') }}" class="block py-2 text-gray-700">Kontak</a>
        </div>
    </div>
</header>