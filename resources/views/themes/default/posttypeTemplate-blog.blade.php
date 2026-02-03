@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

<section class="py-14">
    <div class="container">
        <!-- Blog Grid -->
        <h1 class="text-3xl font-extrabold leading-tight text-brand-900 lg:text-4xl mb-8">
            Blog
        </h1>
        <div class="grid grid-rows gap-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <!-- Large Featured Card (Left) -->
                <a href="blog-details.php"
                    class="lg:col-span-7 relative group cursor-pointer overflow-hidden rounded-2xl shadow-lg ">
                    <img src="{{asset('theme-assets/assets/trip/1.jpg')}}" alt="Annapurna Circuit Trek" loading="lazy"
                        class="lazy-image w-full h-[500px] lg:h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500">
                    </div>

                    <!-- Bottom Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <p class="text-sm font-medium mb-2 opacity-90">Trekking/Hiking | Sep 15, 2025</p>
                        <h1 class="text-3xl font-bold leading-tight">Annapurna Circuit Trek during Autumn</h1>
                    </div>
                </a>

                <!-- Smaller Cards (Right) -->
                <div class="lg:col-span-5 flex flex-col justify-between gap-8">

                    <!-- Post 1 -->
                    <a href="blog-details.php" class="flex  flex-row gap-6 group cursor-pointer">
                        <div class="shrink-0 overflow-hidden rounded-2xl  w-48 h-32 shadow-md">
                            <img src="{{asset('theme-assets/assets/trip/2.jpg')}}" alt="Langtang Valley" loading="lazy"
                                class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-sm text-gray-500 mb-2 font-medium">Trekking/Hiking | Sep 2, 2025</p>
                            <h4
                                class="text-xl font-bold text-black leading-snug group-hover:text-brand-400 transition-colors">
                                Alternative Treks to Langtang Valley Trek</h4>
                        </div>
                    </a>

                    <!-- Post 2 -->
                    <a href="blog-details.php" class="flex  flex-row gap-6 group cursor-pointer">
                        <div class="shrink-0 overflow-hidden rounded-2xl  w-48 h-32 shadow-md">
                            <img src="{{asset('theme-assets/assets/trip/3.jpg')}}" alt="Manaslu Circuit" loading="lazy"
                                class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-sm text-gray-500 mb-2 font-medium">Trekking/Hiking | Aug 27, 2025</p>
                            <h4
                                class="text-xl font-bold text-black leading-snug group-hover:text-brand-400 transition-colors">
                                Best Viewpoints on the Manaslu Circuit</h4>
                        </div>
                    </a>

                    <!-- Post 3 -->
                    <a href="blog-details.php" class="flex  flex-row gap-6 group cursor-pointer">
                        <div class="shrink-0 overflow-hidden rounded-2xl  w-48 h-32 shadow-md">
                            <img src="{{asset('theme-assets/assets/trip/8000.jpg')}}" alt="Everest Base Camp" loading="lazy"
                                class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-sm text-gray-500 mb-2 font-medium">Trekking/Hiking | Aug 25, 2025</p>
                            <h4
                                class="text-xl font-bold text-black leading-snug group-hover:text-brand-400 transition-colors">
                                What to Pack for the Everest Base Camp Trek?</h4>
                        </div>
                    </a>

                </div>
            </div>
            <div class="grid grid-cols-3 gap-8">
                <!-- Post   -->
                <a href="blog-details.php" class="flex  flex-col gap-6 group cursor-pointer">
                    <div class="shrink-0 overflow-hidden rounded-2xl  w-full h-64 shadow-md">
                        <img src="{{asset('theme-assets/assets/trip/8000.jpg')}}" alt="Langtang Valley" loading="lazy"
                            class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm text-gray-500 mb-2 font-medium">Trekking/Hiking | Sep 2, 2025</p>
                        <h4
                            class="text-xl font-bold text-black leading-snug group-hover:text-brand-400 transition-colors">
                            Alternative Treks to Langtang Valley Trek</h4>
                    </div>
                </a>

                <!-- Post   -->
                <a href="blog-details.php" class="flex  flex-col gap-6 group cursor-pointer">
                    <div class="shrink-0 overflow-hidden rounded-2xl  w-full h-64 shadow-md">
                        <img src="{{asset('theme-assets/assets/trip/6000.jpg')}}" alt="Langtang Valley" loading="lazy"
                            class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm text-gray-500 mb-2 font-medium">Trekking/Hiking | Sep 2, 2025</p>
                        <h4
                            class="text-xl font-bold text-black leading-snug group-hover:text-brand-400 transition-colors">
                            Alternative Treks to Langtang Valley Trek</h4>
                    </div>
                </a>
                <!-- Post   -->
                <a href="blog-details.php" class="flex  flex-col gap-6 group cursor-pointer">
                    <div class="shrink-0 overflow-hidden rounded-2xl  w-full h-64 shadow-md">
                        <img src="{{asset('theme-assets/assets/trip/7000.jpg')}}" alt="Langtang Valley" loading="lazy"
                            class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm text-gray-500 mb-2 font-medium">Trekking/Hiking | Sep 2, 2025</p>
                        <h4
                            class="text-xl font-bold text-black leading-snug group-hover:text-brand-400 transition-colors">
                            Alternative Treks to Langtang Valley Trek</h4>
                    </div>
                </a>
                <!-- Post   -->
                <a href="blog-details.php" class="flex  flex-col gap-6 group cursor-pointer">
                    <div class="shrink-0 overflow-hidden rounded-2xl  w-full h-64 shadow-md">
                        <img src="{{asset('theme-assets/assets/trip/8000.jpg')}}" alt="Langtang Valley" loading="lazy"
                            class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm text-gray-500 mb-2 font-medium">Trekking/Hiking | Sep 2, 2025</p>
                        <h4
                            class="text-xl font-bold text-black leading-snug group-hover:text-brand-400 transition-colors">
                            Alternative Treks to Langtang Valley Trek</h4>
                    </div>
                </a>

                <!-- Post   -->
                <a href="blog-details.php" class="flex  flex-col gap-6 group cursor-pointer">
                    <div class="shrink-0 overflow-hidden rounded-2xl  w-full h-64 shadow-md">
                        <img src="{{asset('theme-assets/assets/trip/6000.jpg')}}" alt="Langtang Valley" loading="lazy"
                            class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm text-gray-500 mb-2 font-medium">Trekking/Hiking | Sep 2, 2025</p>
                        <h4
                            class="text-xl font-bold text-black leading-snug group-hover:text-brand-400 transition-colors">
                            Alternative Treks to Langtang Valley Trek</h4>
                    </div>
                </a>
                <!-- Post   -->
                <a href="blog-details.php" class="flex  flex-col gap-6 group cursor-pointer">
                    <div class="shrink-0 overflow-hidden rounded-2xl  w-full h-64 shadow-md">
                        <img src="{{asset('theme-assets/assets/trip/7000.jpg')}}" alt="Langtang Valley" loading="lazy"
                            class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm text-gray-500 mb-2 font-medium">Trekking/Hiking | Sep 2, 2025</p>
                        <h4
                            class="text-xl font-bold text-black leading-snug group-hover:text-brand-400 transition-colors">
                            Alternative Treks to Langtang Valley Trek</h4>
                    </div>
                </a>
            </div>

        </div>

    </div>

</section>

@endsection
