@extends('main')

@section('title', 'Beranda - SMA Nusantara Cendekia')

@section('content')
    <!-- Hero Section with Slider -->
    <section class="relative h-screen bg-cover bg-center slider-container" style="background-image: url('https://readdy.ai/api/search-image?query=Modern%20Indonesian%20high%20school%20campus%20with%20beautiful%20architecture%2C%20students%20walking%2C%20green%20garden%2C%20blue%20sky%2C%20educational%20environment%2C%20bright%20daylight%2C%20contemporary%20buildings%2C%20inspiring%20atmosphere%2C%20clean%20pathways%2C%20academic%20excellence%20setting&width=1920&height=1080&seq=hero001&orientation=landscape')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="slider-track" id="hero-slider">
            @foreach([
                [
                    'image' => 'https://readdy.ai/api/search-image?query=Modern%20Indonesian%20high%20school%20campus%20with%20beautiful%20architecture%2C%20students%20walking%2C%20green%20garden%2C%20blue%20sky%2C%20educational%20environment%2C%20bright%20daylight%2C%20contemporary%20buildings%2C%20inspiring%20atmosphere%2C%20clean%20pathways%2C%20academic%20excellence%20setting&width=1920&height=1080&seq=hero001&orientation=landscape',
                    'title' => 'Selamat Datang di SMA Nusantara Cendekia',
                    'description' => 'Membentuk generasi unggul yang berkarakter, berprestasi, dan siap menghadapi tantangan masa depan dengan nilai-nilai Pancasila.',
                    'button_text' => 'Daftar Sekarang',
                    'button_color' => 'primary',
                    'button_icon' => 'ri-arrow-right-line',
                    'button_link' => '#'
                ],
                [
                    'image' => 'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20students%20in%20modern%20classroom%2C%20active%20learning%2C%20technology%20integration%2C%20bright%20educational%20environment%2C%20collaborative%20study%2C%20academic%20excellence%2C%20contemporary%20learning%20space%2C%20engaged%20teenagers&width=1920&height=1080&seq=hero002&orientation=landscape',
                    'title' => 'Pendidikan Berkualitas Tinggi',
                    'description' => 'Dengan kurikulum terdepan, fasilitas modern, dan tenaga pengajar berpengalaman untuk mengoptimalkan potensi setiap siswa.',
                    'button_text' => 'Pelajari Lebih Lanjut',
                    'button_color' => 'secondary',
                    'button_icon' => 'ri-arrow-right-line',
                    'button_link' => '#'
                ],
                [
                    'image' => 'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20students%20celebrating%20academic%20achievement%2C%20awards%20ceremony%2C%20proud%20moment%2C%20educational%20success%2C%20graduation%20celebration%2C%20academic%20excellence%2C%20inspiring%20achievement%2C%20bright%20future&width=1920&height=1080&seq=hero003&orientation=landscape',
                    'title' => 'Prestasi Membanggakan',
                    'description' => 'Ratusan prestasi akademik dan non-akademik di tingkat nasional dan internasional menjadi bukti keunggulan kami.',
                    'button_text' => 'Lihat Prestasi',
                    'button_color' => 'yellow-600',
                    'button_icon' => 'ri-trophy-line',
                    'button_link' => '#'
                ]
            ] as $slide)
                <div class="slider-slide relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ $slide['image'] }}')">
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                        <div class="text-white max-w-3xl">
                            <h1 class="text-5xl md:text-6xl font-bold mb-6">{{ $slide['title'] }}</h1>
                            <p class="text-xl md:text-2xl mb-8 leading-relaxed">{{ $slide['description'] }}</p>
                            <a href="{{ $slide['button_link'] }}" class="inline-flex items-center space-x-3 bg-{{ $slide['button_color'] }} text-white px-8 py-4 rounded-button font-medium hover:bg-{{ $slide['button_color'] == 'yellow-600' ? 'yellow-700' : ($slide['button_color'] == 'primary' ? 'blue-700' : 'green-700') }} transition-colors whitespace-nowrap">
                                <span>{{ $slide['button_text'] }}</span>
                                <div class="w-5 h-5 flex items-center justify-center">
                                    <i class="{{ $slide['button_icon'] }}"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3">
            @foreach([0, 1, 2] as $index)
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all slider-dot {{ $index == 0 ? 'active' : '' }}" data-slide="{{ $index }}"></button>
            @endforeach
        </div>
        <button class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center text-white transition-all" id="prev-slide">
            <div class="w-6 h-6 flex items-center justify-center">
                <i class="ri-arrow-left-line text-xl"></i>
            </div>
        </button>
        <button class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center text-white transition-all" id="next-slide">
            <div class="w-6 h-6 flex items-center justify-center">
                <i class="ri-arrow-right-line text-xl"></i>
            </div>
        </button>
    </section>

    <!-- Quick Access Menu -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Akses Cepat</h2>
                <p class="text-lg text-gray-600">Temukan informasi yang Anda butuhkan dengan mudah</p>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                @foreach([
                    [
                        'link' => route('profile'),
                        'icon' => 'ri-user-line',
                        'title' => 'Profil Sekolah',
                        'description' => 'Pelajari sejarah, visi misi, dan struktur organisasi sekolah kami',
                        'gradient' => 'from-primary to-blue-600',
                        'text_color' => 'text-blue-100'
                    ],
                    [
                        'link' => route('academics'),
                        'icon' => 'ri-book-line',
                        'title' => 'Akademik',
                        'description' => 'Informasi kurikulum, jadwal pelajaran, dan program studi',
                        'gradient' => 'from-secondary to-green-600',
                        'text_color' => 'text-green-100'
                    ],
                    [
                        'link' => route('news.index'),
                        'icon' => 'ri-news-line',
                        'title' => 'Berita',
                        'description' => 'Berita terkini dan informasi kegiatan sekolah',
                        'gradient' => 'from-yellow-500 to-orange-500',
                        'text_color' => 'text-yellow-100'
                    ],
                    [
                        'link' => route('admissions'),
                        'icon' => 'ri-user-add-line',
                        'title' => 'PPDB',
                        'description' => 'Penerimaan Peserta Didik Baru tahun ajaran 2024/2025',
                        'gradient' => 'from-purple-500 to-pink-500',
                        'text_color' => 'text-purple-100'
                    ]
                ] as $item)
                    <a href="{{ $item['link'] }}" class="group bg-gradient-to-br {{ $item['gradient'] }} rounded-2xl p-8 text-white hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <i class="{{ $item['icon'] }} text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">{{ $item['title'] }}</h3>
                        <p class="{{ $item['text_color'] }}">{{ $item['description'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- School Overview -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="text-4xl font-bold text-gray-900">Tentang SMA Nusantara Cendekia</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        SMA Nusantara Cendekia adalah sekolah menengah atas unggulan yang telah berdiri sejak 1985. Dengan pengalaman lebih dari 35 tahun dalam dunia pendidikan, kami berkomitmen untuk menghasilkan lulusan yang tidak hanya unggul secara akademik, tetapi juga berkarakter mulia dan siap menghadapi tantangan global.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        @foreach([
                            ['value' => '1,247', 'label' => 'Siswa Aktif', 'color' => 'text-primary'],
                            ['value' => '89', 'label' => 'Guru & Staff', 'color' => 'text-secondary'],
                            ['value' => '156', 'label' => 'Prestasi', 'color' => 'text-yellow-600'],
                            ['value' => 'A', 'label' => 'Akreditasi', 'color' => 'text-red-500']
                        ] as $stat)
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <div class="text-3xl font-bold {{ $stat['color'] }} mb-2">{{ $stat['value'] }}</div>
                                <div class="text-gray-600">{{ $stat['label'] }}</div>
                            </div>
                        @endforeach
                    </div>
                    <div class="space-y-4">
                        @foreach([
                            'Kurikulum Merdeka dan Cambridge International',
                            'Fasilitas pembelajaran modern dan lengkap',
                            'Program pengembangan karakter terintegrasi'
                        ] as $feature)
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="ri-check-line text-white text-sm"></i>
                                </div>
                                <span class="text-gray-700">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="relative">
                    <div class="w-full h-96 bg-cover bg-center rounded-2xl shadow-lg" style="background-image: url('https://readdy.ai/api/search-image?query=Modern%20Indonesian%20high%20school%20students%20in%20classroom%20studying%2C%20diverse%20group%2C%20collaborative%20learning%2C%20bright%20educational%20environment%2C%20academic%20excellence%2C%20engaged%20teenagers%2C%20contemporary%20classroom%20setting%2C%20inspiring%20atmosphere&width=600&height=400&seq=overview001&orientation=landscape')"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-primary rounded-2xl flex items-center justify-center text-white">
                        <div class="text-center">
                            <div class="text-2xl font-bold">35+</div>
                            <div class="text-sm">Tahun</div>
                            <div class="text-xs">Pengalaman</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Berita Terbaru</h2>
                    <p class="text-lg text-gray-600">Informasi terkini seputar kegiatan dan pencapaian sekolah</p>
                </div>
                <a href="{{ route('news.index') }}" class="inline-flex items-center space-x-2 text-primary hover:text-blue-700 font-medium">
                    <span>Lihat Semua</span>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-arrow-right-line"></i>
                    </div>
                </a>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($news as $news_item)
                    <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="h-48 bg-cover bg-center" style="background-image: url('{{ $news_item->image ? asset('storage/' . $news_item->image) : 'https://via.placeholder.com/400x300' }}')"></div>
                        <div class="p-6">
                            <div class="flex items-center space-x-2 mb-3">
                                <span class="px-3 py-1 bg-{{ $news_item->tag_color }} bg-opacity-10 text-{{ $news_item->tag_color }} text-xs font-medium rounded-full">{{ $news_item->tag }}</span>
                                <span class="text-gray-500 text-sm">{{ $news_item->date->format('d F Y') }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-primary transition-colors cursor-pointer">{{ $news_item->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ \Illuminate\Support\Str::limit($news_item->description, 100) }}</p>
                            <a href="{{ route('news.show', $news_item->id) }}" class="inline-flex items-center space-x-2 text-primary hover:text-blue-700 font-medium">
                                <span>Baca Selengkapnya</span>
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <i class="ri-arrow-right-line text-sm"></i>
                                </div>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Important Announcements -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pengumuman Penting</h2>
                <p class="text-lg text-gray-600">Informasi terbaru yang perlu diketahui oleh seluruh civitas akademika</p>
            </div>
            <div class="bg-white rounded-2xl shadow-sm p-8">
                <div class="space-y-6">
                    @foreach(\App\Models\Announcement::latest()->take(3)->get() as $announcement)
                        <div class="announcement-item bg-{{ $announcement->bg_color }} border-{{ $announcement->border_color }} rounded-xl p-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-{{ $announcement->icon_bg }} rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="{{ $announcement->icon }} text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h4 class="text-lg font-bold text-gray-900">{{ $announcement->title }}</h4>
                                        <span class="px-3 py-1 bg-{{ $announcement->tag_color }} text-white text-xs font-medium rounded-full">{{ $announcement->tag }}</span>
                                    </div>
                                    <p class="text-gray-600 mb-3">{{ \Illuminate\Support\Str::limit($announcement->description, 150) }}</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span>{{ $announcement->date->format('d F Y') }}</span>
                                        <span>•</span>
                                        <span>{{ $announcement->category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Galeri Kegiatan</h2>
                <p class="text-lg text-gray-600">Dokumentasi berbagai kegiatan dan momen berharga di sekolah</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                @foreach([
                    'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20students%20in%20science%20laboratory%2C%20conducting%20experiments%2C%20chemistry%20class%2C%20educational%20activity%2C%20learning%20environment%2C%20academic%20excellence%2C%20STEM%20education&width=300&height=300&seq=gallery001&orientation=squarish',
                    'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20sports%20day%2C%20students%20running%20track%2C%20athletic%20competition%2C%20school%20sports%20event%2C%20physical%20education%2C%20healthy%20lifestyle%2C%20teamwork%20spirit&width=300&height=300&seq=gallery002&orientation=squarish',
                    'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20cultural%20performance%2C%20traditional%20dance%2C%20students%20in%20costume%2C%20school%20arts%20festival%2C%20cultural%20celebration%2C%20artistic%20expression%2C%20heritage%20preservation&width=300&height=300&seq=gallery003&orientation=squarish',
                    'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20library%20study%20session%2C%20students%20reading%20books%2C%20quiet%20learning%20environment%2C%20academic%20research%2C%20educational%20facility%2C%20knowledge%20seeking&width=300&height=300&seq=gallery004&orientation=squarish',
                    'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20music%20concert%2C%20students%20playing%20instruments%2C%20school%20orchestra%2C%20musical%20performance%2C%20arts%20education%2C%20creative%20expression%2C%20talent%20showcase&width=300&height=300&seq=gallery005&orientation=squarish',
                    'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20robotics%20competition%2C%20students%20with%20robots%2C%20technology%20showcase%2C%20STEM%20project%2C%20innovation%20display%2C%20engineering%20education&width=300&height=300&seq=gallery006&orientation=squarish',
                    'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20environmental%20project%2C%20students%20planting%20trees%2C%20green%20school%20initiative%2C%20sustainability%20education%2C%20eco-friendly%20activity%2C%20nature%20conservation&width=300&height=300&seq=gallery007&orientation=squarish',
                    'https://readdy.ai/api/search-image?query=Indonesian%20high%20school%20debate%20competition%2C%20students%20presenting%20arguments%2C%20public%20speaking%20event%2C%20academic%20competition%2C%20critical%20thinking%2C%20intellectual%20challenge&width=300&height=300&seq=gallery008&orientation=squarish'
                ] as $image)
                    <div class="gallery-item bg-gray-200 rounded-xl overflow-hidden cursor-pointer">
                        <div class="h-48 bg-cover bg-center" style="background-image: url('{{ $image }}')"></div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <button class="inline-flex items-center space-x-2 bg-primary text-white px-6 py-3 rounded-button font-medium hover:bg-blue-700 transition-colors whitespace-nowrap">
                    <span>Lihat Lebih Banyak</span>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-image-line"></i>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <!-- Student Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Testimoni Siswa & Alumni</h2>
                <p class="text-lg text-gray-600">Pengalaman dan kesan dari para siswa dan alumni</p>
            </div>
            <div class="relative overflow-hidden">
                <div class="flex space-x-8 testimonial-track" id="testimonial-slider">
                    @foreach([
                        [
                            'image' => 'https://readdy.ai/api/search-image?query=Indonesian%20female%20high%20school%20student%20smiling%2C%20confident%20teenager%2C%20school%20uniform%2C%20educational%20portrait%2C%20bright%20expression%2C%20academic%20success%2C%20young%20achiever&width=150&height=150&seq=student001&orientation=squarish',
                            'name' => 'Sari Dewi Lestari',
                            'status' => 'Siswa Kelas XII IPA',
                            'testimonial' => 'SMA Nusantara Cendekia memberikan pendidikan yang luar biasa. Guru-guru sangat berdedikasi dan fasilitas sekolah sangat mendukung proses pembelajaran. Saya merasa sangat beruntung bisa bersekolah di sini.',
                            'date' => 'Januari 2024'
                        ],
                        [
                            'image' => 'https://readdy.ai/api/search-image?query=Indonesian%20male%20high%20school%20graduate%2C%20proud%20alumni%2C%20formal%20attire%2C%20successful%20young%20professional%2C%20confident%20smile%2C%20educational%20achievement%2C%20inspiring%20graduate&width=150&height=150&seq=alumni001&orientation=squarish',
                            'name' => 'Ahmad Rizki Pratama',
                            'status' => 'Alumni 2023 - Mahasiswa ITB',
                            'testimonial' => 'Berkat pendidikan di SMA Nusantara Cendekia, saya berhasil diterima di ITB jurusan Teknik Informatika. Program STEM dan bimbingan guru sangat membantu mempersiapkan saya untuk kuliah.',
                            'date' => 'Desember 2023'
                        ],
                        [
                            'image' => 'https://readdy.ai/api/search-image?query=Indonesian%20female%20high%20school%20alumni%2C%20successful%20graduate%2C%20professional%20attire%2C%20confident%20young%20woman%2C%20educational%20success%2C%20inspiring%20achievement%2C%20bright%20future&width=150&height=150&seq=alumni002&orientation=squarish',
                            'name' => 'Maya Sari Indah',
                            'status' => 'Alumni 2022 - Mahasiswa UI',
                            'testimonial' => 'Ekstrakurikuler debat bahasa Inggris di sekolah sangat membantu mengembangkan kemampuan public speaking saya. Sekarang saya aktif di organisasi mahasiswa UI.',
                            'date' => 'November 2023'
                        ]
                    ] as $testimonial)
                        <div class="testimonial-card min-w-full md:min-w-0 md:w-1/3 bg-white rounded-2xl p-8 shadow-sm">
                            <div class="flex items-center space-x-4 mb-6">
                                <div class="w-16 h-16 bg-cover bg-center rounded-full" style="background-image: url('{{ $testimonial['image'] }}')"></div>
                                <div>
                                    <h4 class="font-bold text-gray-900">{{ $testimonial['name'] }}</h4>
                                    <p class="text-gray-600">{{ $testimonial['status'] }}</p>
                                    <div class="flex text-yellow-400 text-sm">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed mb-4">{{ $testimonial['testimonial'] }}</p>
                            <div class="text-sm text-gray-500">{{ $testimonial['date'] }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center space-x-2 mt-8">
                    @foreach([0, 1, 2] as $index)
                        <button class="w-3 h-3 rounded-full bg-{{ $index == 0 ? 'primary' : 'gray-300' }} testimonial-dot {{ $index == 0 ? 'active' : '' }}" data-testimonial="{{ $index }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection