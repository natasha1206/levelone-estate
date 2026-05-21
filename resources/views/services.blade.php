@extends('layouts.app')

@section('title', 'Services - LEVEL ONE')

@section('content')
<!-- Hero Section with Parallax - Perfectly Centered -->
<section class="relative h-[70vh] min-h-[550px] bg-cover bg-center bg-fixed"
         style="background-image: url('https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=2000');">
    <div class="absolute inset-0 bg-black/55"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-8 max-w-4xl mx-auto"
         style="padding-top: 60px;">
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mb-8"></div>
        <p class="text-[#C6A43F] text-sm tracking-[6px] mb-4 font-light">BESPOKE SERVICES</p>
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif mb-6 leading-tight font-light">
            Tailored to<br><span class="italic">Perfection</span>
        </h1>
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mt-8"></div>
    </div>
</section>

<!-- Introduction -->
<section class="py-28 px-8 max-w-5xl mx-auto text-center">
    <p class="text-[#C6A43F] text-xs tracking-[5px] mb-5 font-semibold">WHAT WE OFFER</p>
    <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif font-light leading-tight mb-8">
        A <span class="italic">new standard</span><br>of living
    </h2>
    <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-10"></div>
    <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto">
        From acquisition to disposition, we provide a comprehensive suite of services 
        designed to exceed the expectations of the world's most discerning clients.
    </p>
</section>

<!-- Featured Service - Full Width Image -->
<section class="relative h-[500px] flex items-center justify-center bg-cover bg-center bg-fixed my-20"
         style="background-image: url('https://images.pexels.com/photos/2587054/pexels-photo-2587054.jpeg?auto=compress&cs=tinysrgb&w=2000');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 text-center text-white px-8 max-w-3xl mx-auto">
        <p class="text-[#C6A43F] text-xs tracking-[5px] mb-4">SIGNATURE SERVICE</p>
        <h3 class="text-3xl md:text-5xl font-serif mb-6 font-light">Curated <span class="italic">Portfolio</span></h3>
        <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-6"></div>
        <p class="text-white/90 leading-relaxed">
            Access to off-market properties and exclusive listings not available to the public.
            Every residence in our portfolio has been meticulously vetted for quality, location, and potential.
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-28 px-8 max-w-7xl mx-auto">
    @php $services = App\Models\Service::where('is_active', true)->orderBy('order', 'asc')->get(); @endphp
    
    @if($services->count() > 0)
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($services as $service)
        <div class="group bg-white p-10 shadow-lg hover:shadow-2xl transition-all duration-500 border-b-2 border-transparent hover:border-[#C6A43F]">
            <!-- Dynamic SVG Icon based on service title -->
            <div class="mb-6 group-hover:scale-110 transition duration-500">
                @php
                    $icon = $service->icon ?? '';
                    $iconColor = '#C6A43F';
                @endphp
                
                @if(str_contains($icon, 'search') || str_contains($service->title, 'Search'))
                <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                @elseif(str_contains($icon, 'valuation') || str_contains($service->title, 'Valuation'))
                <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                @elseif(str_contains($icon, 'legal') || str_contains($service->title, 'Legal'))
                <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                @elseif(str_contains($icon, 'management') || str_contains($service->title, 'Management'))
                <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 21v-4H7v4"></path>
                </svg>
                @elseif(str_contains($icon, 'design') || str_contains($service->title, 'Design'))
                <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                @else
                <!-- Default Premium Icon -->
                <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                @endif
            </div>
            <h3 class="text-2xl font-serif mb-3 group-hover:text-[#C6A43F] transition">{{ $service->title }}</h3>
            <div class="w-12 h-px bg-gray-200 group-hover:bg-[#C6A43F] transition mb-5"></div>
            <p class="text-gray-500 text-sm leading-relaxed">{{ $service->description }}</p>
        </div>
        @endforeach
    </div>
    @else
    <div class="text-center py-20">
        <p class="text-gray-500">Services coming soon.</p>
    </div>
    @endif
</section>

<!-- Split Section: Advisory -->
<section class="py-20 px-8 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-0 items-center">
        <div class="bg-[#F5F2ED] p-12 md:p-16 order-2 md:order-1">
            <div class="mb-6">
            <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 2v4h4"></path>
            </svg>
        </div>
            <p class="text-[#C6A43F] text-xs tracking-[4px] mb-3">PERSONALIZED</p>
            <h3 class="text-3xl md:text-4xl font-serif mb-6">Advisory &<br><span class="italic">Consultation</span></h3>
            <div class="w-12 h-px bg-[#C6A43F] mb-8"></div>
            <p class="text-gray-600 leading-relaxed">
                Our team of seasoned advisors provides strategic guidance tailored to your unique goals. 
                Whether acquiring your next residence or maximizing the value of your portfolio, 
                we deliver insights that matter.
            </p>
        </div>
        <div class="relative h-[400px] overflow-hidden order-1 md:order-2">
            <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1200" 
                 alt="Consultation" 
                 class="w-full h-full object-cover transition duration-700 hover:scale-105">
        </div>
    </div>
</section>

<!-- Split Section: Marketing -->
<section class="py-20 px-8 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-0 items-center">
        <div class="relative h-[400px] overflow-hidden">
            <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1200" 
                 alt="Marketing" 
                 class="w-full h-full object-cover transition duration-700 hover:scale-105">
        </div>
        <div class="bg-[#F5F2ED] p-12 md:p-16">
            <div class="mb-6">
            <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
        </div>
            <p class="text-[#C6A43F] text-xs tracking-[4px] mb-3">PREMIER MARKETING</p>
            <h3 class="text-3xl md:text-4xl font-serif mb-6">Global <span class="italic">Reach</span></h3>
            <div class="w-12 h-px bg-[#C6A43F] mb-8"></div>
            <p class="text-gray-600 leading-relaxed">
                Our marketing strategy combines cinematic visuals, strategic digital campaigns, 
                and an extensive global network to ensure your property receives unparalleled exposure.
            </p>
        </div>
    </div>
</section>

<!-- Split Section: Management -->
<section class="py-20 px-8 max-w-7xl mx-auto mb-20">
    <div class="grid md:grid-cols-2 gap-0 items-center">
        <div class="bg-[#1A1A1A] p-12 md:p-16 text-white order-2 md:order-1">
            <div class="mb-6">
                <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 21v-4H7v4"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 7v5"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 10h6"></path>
                </svg>
            </div>
            <p class="text-[#C6A43F] text-xs tracking-[4px] mb-3">FULL-SERVICE</p>
            <h3 class="text-3xl md:text-4xl font-serif mb-6">Property<br><span class="italic">Management</span></h3>
            <div class="w-12 h-px bg-[#C6A43F] mb-8"></div>
            <p class="text-gray-300 leading-relaxed">
                From tenant placement to maintenance and financial reporting, 
                we offer comprehensive management services that protect and enhance your investment.
            </p>
        </div>
        <div class="relative h-[400px] overflow-hidden order-1 md:order-2">
            <img src="https://images.pexels.com/photos/280221/pexels-photo-280221.jpeg?auto=compress&cs=tinysrgb&w=1200" 
                 alt="Property Management" 
                 class="w-full h-full object-cover transition duration-700 hover:scale-105">
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-28 px-8 bg-[#F5F2ED]">
    <div class="max-w-4xl mx-auto text-center">
        <p class="text-[#C6A43F] text-xs tracking-[5px] mb-4">BEGIN YOUR JOURNEY</p>
        <h2 class="text-4xl md:text-5xl font-serif font-light mb-6">Let's create<br><span class="italic">something exceptional</span></h2>
        <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-10"></div>
        <p class="text-gray-600 mb-10 leading-relaxed">
            Whether you're looking to acquire, sell, or manage, our team is ready to assist you.
        </p>
        <a href="/contact" class="btn-primary inline-block">Inquire Today</a>
    </div>
</section>
@endsection