@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

<!-- Hero Section -->
<div class="relative h-[480px] bg-cover bg-center flex items-center lazy-image" loading="lazy" style="background-image: url('{{asset('theme-assets/assets/trip/8000.jpg')}}');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative container ">

    </div>
</div>
<!--   Section -->
<section class="py-16 relative  pattern-white relative">
    <div class="container ">
        <div class="lg:w-10/12 lg:mx-auto space-y-8">
            <h1 class=" text-3xl font-extrabold leading-tight text-brand-900    lg:text-4xl ">
                Legal Documents

            </h1>
            <p class="text-lg text-gray-500">Summit 8000 is a fully licensed trekking agency in Nepal, holding all
                approvals and memberships required by the relevant authorities. With all official documents in place, we
                proudly operate as a LEGAL TREKKING AGENCY, ensuring safe and trusted adventures for all our clients.
            </p>


            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <!-- Certificate 1 -->
                <a href="{{asset('theme-assets/assets/doc/1.jpg')}}" data-fancybox="certificates" data-caption="Company Registration Certificate"
                    class="group relative block document-card rounded-xl overflow-hidden bg-white border border-gray-200">
                    <div class="h-80 bg-gray-100 p-3">
                        <img src="{{asset('theme-assets/assets/doc/1.jpg')}}" alt="Company Registration Certificate"
                            class="w-full h-full object-contain rounded-xl">
                    </div>
                    <div class="mt-3 p-4">
                        <h3 class="text-lg font-bold">Company Registration Certificate</h3>
                        <p class="text-xs text-gray-400">Click to view in full screen</p>
                    </div>
                </a>

                <!-- Certificate 2 -->
                <a href="{{asset('theme-assets/assets/doc/2.jpg')}}" data-fancybox="certificates" data-caption="VAT Certificate"
                    class="group relative block document-card rounded-xl overflow-hidden bg-white border border-gray-200">
                    <div class="h-80 bg-gray-100 p-3">
                        <img src="{{asset('theme-assets/assets/doc/2.jpg')}}" alt="VAT Certificate"
                            class="w-full h-full object-contain rounded-xl">
                    </div>
                    <div class="mt-3 p-4">
                        <h3 class="text-lg font-bold">VAT Certificate</h3>
                        <p class="text-xs text-gray-400 ">Click to view in full screen</p>
                    </div>
                </a>

                <!-- Certificate 3 -->
                <a href="{{asset('theme-assets/assets/doc/3.jpg')}}" data-fancybox="certificates"
                    data-caption="Cottage & Small Industry Certificate"
                    class="group relative block document-card rounded-xl overflow-hidden bg-white border border-gray-200">
                    <div class="h-80 bg-gray-100 p-3">
                        <img src="{{asset('theme-assets/assets/doc/3.jpg')}}" alt="Cottage & Small Industry Certificate"
                            class="w-full h-full object-contain rounded-xl">
                    </div>
                    <div class="mt-3 p-4">
                        <h3 class="text-lg font-bold">Cottage & Small Industry Certificate</h3>
                        <p class="text-xs text-gray-400">Click to view in full screen</p>
                    </div>
                </a>
                <!-- Certificate 1 -->
                <a href="{{asset('theme-assets/assets/doc/1.jpg')}}" data-fancybox="certificates" data-caption="Company Registration Certificate"
                    class="group relative block document-card rounded-xl overflow-hidden bg-white border border-gray-200">
                    <div class="h-80 bg-gray-100 p-3">
                        <img src="{{asset('theme-assets/assets/doc/1.jpg')}}" alt="Company Registration Certificate"
                            class="w-full h-full object-contain rounded-xl">
                    </div>
                    <div class="mt-3 p-4">
                        <h3 class="text-lg font-bold">Company Registration Certificate</h3>
                        <p class="text-xs text-gray-400">Click to view in full screen</p>
                    </div>
                </a>

                <!-- Certificate 2 -->
                <a href="{{asset('theme-assets/assets/doc/2.jpg')}}" data-fancybox="certificates" data-caption="VAT Certificate"
                    class="group relative block document-card rounded-xl overflow-hidden bg-white border border-gray-200">
                    <div class="h-80 bg-gray-100 p-3">
                        <img src="{{asset('theme-assets/assets/doc/2.jpg')}}" alt="VAT Certificate"
                            class="w-full h-full object-contain rounded-xl">
                    </div>
                    <div class="mt-3 p-4">
                        <h3 class="text-lg font-bold">VAT Certificate</h3>
                        <p class="text-xs text-gray-400 ">Click to view in full screen</p>
                    </div>
                </a>

                <!-- Certificate 3 -->
                <a href="{{asset('theme-assets/assets/doc/3.jpg')}}" data-fancybox="certificates"
                    data-caption="Cottage & Small Industry Certificate"
                    class="group relative block document-card rounded-xl overflow-hidden bg-white border border-gray-200">
                    <div class="h-80 bg-gray-100 p-3">
                        <img src="{{asset('theme-assets/assets/doc/3.jpg')}}" alt="Cottage & Small Industry Certificate"
                            class="w-full h-full object-contain rounded-xl">
                    </div>
                    <div class="mt-3 p-4">
                        <h3 class="text-lg font-bold">Cottage & Small Industry Certificate</h3>
                        <p class="text-xs text-gray-400">Click to view in full screen</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
