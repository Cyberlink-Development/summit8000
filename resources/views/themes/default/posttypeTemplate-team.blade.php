@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

<!-- Hero Section -->
<div class="relative h-[480px] bg-cover bg-center flex items-center  lazy-image" loading="lazy"
    style="background-image: url('{{asset('theme-assets/assets/trip/nepal-tours.jpg')}}');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative container  ">
        <div class="  space-y-6 text-white">
            <h1 class="text-3xl font-extrabold leading-tight  lg:text-5xl">
                Our Team
            </h1>

            <p class="text-lg max-w-4xl">Summit 8000 has earned its reputation through dedication, consistency, and
                teamwork. Our success comes from the collective effort of everyone who works with heart and
                responsibility every day.</p>
        </div>

    </div>
</div>
<!--   Section -->

<!--   Section -->
<section class="py-16 relative pattern-white relative">

    <div class="container ">
        <div class="  space-y-6">
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <!-- Team Member 1: Cody Fisher -->
                <div class="flex flex-col">
                    <img src="https://pagedone.io/asset/uploads/1696238702.png" alt="Cody Fisher" loading="lazy"
                        class="lazy-image w-full h-5/6 object-cover rounded-3xl">
                    <div class="bg-white p-6 text-center -mt-10 mx-4 relative z-10 rounded-2xl shadow-sm">
                        <h3 class="text-xl font-bold text-gray-900">Cody Fisher</h3>
                        <p class="text-gray-500 mt-1">Founder</p>
                    </div>
                </div>

                <!-- Team Member 2: Michael Cannon -->
                <div class="flex flex-col">
                    <img src="https://pagedone.io/asset/uploads/1696238720.png" alt="Michael Cannon" loading="lazy"
                        class="lazy-image w-full h-5/6 object-cover rounded-3xl">
                    <div class="bg-white p-6 text-center -mt-8 mx-4 relative z-10 rounded-2xl shadow-sm">
                        <h3 class="text-xl font-bold text-gray-900">Michael Cannon</h3>
                        <p class="text-gray-500 mt-1">Sales Executive</p>
                    </div>
                </div>

                <!-- Team Member 3: Alexa Kim -->
                <div class="flex flex-col">
                    <img src="https://pagedone.io/asset/uploads/1696238665.png" alt="Alexa Kim" loading="lazy"
                        class="lazy-image w-full h-5/6 object-cover rounded-3xl">
                    <div class="bg-white p-6 text-center -mt-8 mx-4 relative z-10 rounded-2xl shadow-sm">
                        <h3 class="text-xl font-bold text-gray-900">Alexa Kim</h3>
                        <p class="text-gray-500 mt-1">Product Manager</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
