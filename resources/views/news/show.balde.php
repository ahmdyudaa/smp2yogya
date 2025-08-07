@extends('main')

@section('title', '{{ $news->title }} - SMA Nusantara Cendekia')

@section('content')
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-6">{{ $news->title }}</h1>
            <div class="flex items-center space-x-2 mb-6">
                <span class="px-3 py-1 bg-{{ $news->tag_color }} bg-opacity-10 text-{{ $news->tag_color }} text-xs font-medium rounded-full">{{ $news->tag }}</span>
                <span class="text-gray-500 text-sm">{{ $news->date->format('d F Y') }}</span>
            </div>
            @if($news->image)
                <div class="w-full h-96 bg-cover bg-center rounded-2xl mb-6" style="background-image: url('{{ asset('storage/' . $news->image) }}')"></div>
            @endif
            <div class="prose max-w-none text-gray-700">
                {!! nl2br(e($news->description)) !!}
            </div>
        </div>
    </section>
@endsection