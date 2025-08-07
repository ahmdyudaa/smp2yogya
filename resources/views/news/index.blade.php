@extends('main')

@section('title', 'Arsip Berita - SMA Nusantara Cendekia')

@section('content')
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Arsip Berita</h1>
                <p class="text-lg text-gray-600">Jelajahi semua berita, informasi, dan kegiatan terbaru dari sekolah kami.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @forelse($news as $news_item)
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
                @empty
                    <div class="md:col-span-3 text-center py-12">
                        <p class="text-gray-600 text-lg">Saat ini belum ada berita yang tersedia.</p>
                    </div>
                @endforelse
            </div>
            <div class="mt-12">
                {{ $news->links() }}
            </div>
        </div>
    </section>
@endsection
