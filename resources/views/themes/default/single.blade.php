@extends('themes.default.common.master')
@section('title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->page_thumbnail)
@section('content')

<section class="antialiased pt-16 pb-4">
    <div class="container ">
        <article class="max-w-5xl mx-auto format format-sm sm:format-base lg:format-sm format-blue  ">
            <header>
                <h1>
                    {{$data->post_title}}
                </h1>
                <address class="flex items-center mb-6 not-italic">
                    <!-- <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img loading="lazy" class="lazy-image mr-4 m-0 w-8 h-8 rounded-full" src="{{$data->page_banner ? asset('uploads/banners/'.$data->page_banner) : asset('theme-assets/assets/trip/2.jpg')}}" alt="{{ $data->post_title }}" alt="Jese Leos">
                        <div rel="author" class="text-base font-bold text-gray-700 dark:text-black">
                            {{ $data->sub_title }}
                        </div>
                    </div> -->
                    <div class="text-base text-gray-500 ">
                        <time pubdate datetime="2022-02-08" title="February 8th, 2022">
                            {{ $data->sub_title }}
                        </time>
                    </div>
                </address>
            </header>

            <figure>
                <img src="{{$data->page_banner ? asset('uploads/banners/'.$data->page_banner) : asset('theme-assets/assets/trip/1.jpg')}}" alt="{{ $data->post_title }}" loading="lazy" class="lazy-image rounded-2xl">
                <!-- <figcaption>Trek Packing List</figcaption> -->
            </figure>

            <p>
                {!! $data->post_content !!}
            </p>

            @if($data->post_excerpt)
                <blockquote>
                    <p>
                        {{ $data->post_excerpt }}
                    </p>
                </blockquote>
            @endif

        </article>
    </div>
</section>

<aside aria-label="Related articles" class="pt-4 pb-8 lg:pb-24 lg:pt-8 bg-gray-50  ">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 ">Related articles</h2>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Post   -->
            @foreach($related as $post)
                <a href="{{ route('page.pagedetail', $post->uri) }}" class="flex  flex-col gap-6 group cursor-pointer">
                    <div class="shrink-0 overflow-hidden rounded-2xl  w-full h-64 shadow-md">
                        <img src="{{$post->page_thumbnail ? asset('uploads/medium/'.$post->page_thumbnail) : asset('theme-assets/assets/trip/8000.jpg')}}" alt="{{ $post->post_title }}" loading="lazy" class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm text-gray-500 mb-2 font-medium">{{ $post->sub_title }}</p>
                        <h1 class="text-xl font-bold text-black leading-snug group-hover:text-sky-600 transition-colors">{{ $post->post_title }}</h1>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</aside>

@endsection
