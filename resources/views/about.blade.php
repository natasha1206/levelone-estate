@extends('layouts.app')

@section('title', 'About - LEVEL ONE')

@section('content')
<!-- Hero Section with Parallax -->
<section class="relative h-[70vh] min-h-[500px] flex items-center justify-center bg-cover bg-center bg-fixed"
         style="background-image: url('https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&cs=tinysrgb&w=2000');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 text-center text-white px-8 max-w-4xl mx-auto">
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mb-8"></div>
        <p class="text-[#C6A43F] text-sm tracking-[6px] mb-4 font-light">OUR STORY</p>
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif mb-6 leading-tight font-light">
            A Legacy of<br><span class="italic">Excellence</span>
        </h1>
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mt-8"></div>
    </div>
</section>

<!-- Introduction -->
<section class="py-28 px-8 max-w-5xl mx-auto text-center">
    <p class="text-[#C6A43F] text-xs tracking-[5px] mb-5 font-semibold">REDEFINING LUXURY REAL ESTATE</p>
    <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif font-light leading-tight mb-8">
        Where <span class="italic">vision</span><br>meets <span class="italic">perfection</span>
    </h2>
    <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-10"></div>
    <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto">
        Level One Estate was born from a singular vision — to transform the luxury real estate experience into something extraordinary. 
        With deep roots in Mumbai's most prestigious neighborhoods, we've built relationships that transcend transactions.
    </p>
</section>

<!-- Split Screen with Image -->
<section class="py-20 px-8 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-0 items-center">
        <div class="relative h-[500px] overflow-hidden">
            <img src="{{ asset('storage/properties/roberto-nickson-rEJxpBskj3Q-unsplash.jpg') }}" 
                 alt="Luxury interior" 
                 class="w-full h-full object-cover transition duration-700 hover:scale-105">
        </div>
        <div class="bg-[#F5F2ED] p-12 md:p-16">
            <p class="text-[#C6A43F] text-xs tracking-[4px] mb-3">OUR PHILOSOPHY</p>
            <h3 class="text-3xl md:text-4xl font-serif mb-6">Beyond the<br><span class="italic">transaction</span></h3>
            <div class="w-12 h-px bg-[#C6A43F] mb-8"></div>
            <p class="text-gray-600 leading-relaxed mb-6">
                We believe that buying or selling a home is one of life's most significant moments. 
                That's why we've built our entire practice around discretion, expertise, and genuine care.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Every client receives white-glove service, from the first conversation to closing and beyond.
            </p>
        </div>
    </div>
</section>

<!-- Stats Section with Gold Numbers -->
<section class="py-28 bg-[#1A1A1A] text-white">
    <div class="container mx-auto px-8">
        <div class="text-center mb-16">
            <p class="text-[#C6A43F] text-xs tracking-[5px] mb-4">BY THE NUMBERS</p>
            <h2 class="text-4xl md:text-5xl font-serif font-light">Our Impact</h2>
            <div class="w-12 h-px bg-[#C6A43F] mx-auto mt-6"></div>
        </div>
        <div class="grid md:grid-cols-4 gap-12 text-center">
            <div class="group">
                <div class="text-5xl md:text-6xl font-serif text-[#C6A43F] mb-3 group-hover:scale-110 transition">500+</div>
                <p class="text-xs tracking-[3px] uppercase font-light">Properties Sold</p>
                <div class="w-8 h-px bg-gray-700 mx-auto mt-4"></div>
            </div>
            <div class="group">
                <div class="text-5xl md:text-6xl font-serif text-[#C6A43F] mb-3 group-hover:scale-110 transition">₹2.5B+</div>
                <p class="text-xs tracking-[3px] uppercase font-light">Transaction Value</p>
                <div class="w-8 h-px bg-gray-700 mx-auto mt-4"></div>
            </div>
            <div class="group">
                <div class="text-5xl md:text-6xl font-serif text-[#C6A43F] mb-3 group-hover:scale-110 transition">15+</div>
                <p class="text-xs tracking-[3px] uppercase font-light">Years of Excellence</p>
                <div class="w-8 h-px bg-gray-700 mx-auto mt-4"></div>
            </div>
            <div class="group">
                <div class="text-5xl md:text-6xl font-serif text-[#C6A43F] mb-3 group-hover:scale-110 transition">98%</div>
                <p class="text-xs tracking-[3px] uppercase font-light">Client Satisfaction</p>
                <div class="w-8 h-px bg-gray-700 mx-auto mt-4"></div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Cards -->
<section class="py-28 px-8 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-10 shadow-xl border-t-4 border-[#C6A43F] group hover:shadow-2xl transition duration-500">
            <div class="mb-6">
                <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-serif mb-4">Our Mission</h3>
            <div class="w-12 h-px bg-[#C6A43F] mb-6"></div>
            <p class="text-gray-600 leading-relaxed">
                To redefine luxury real estate by prioritizing client relationships over transactions, 
                offering unparalleled expertise and discretion in every interaction.
            </p>
        </div>
        <div class="bg-white p-10 shadow-xl border-t-4 border-[#C6A43F] group hover:shadow-2xl transition duration-500">
            <div class="mb-6">
                <svg class="w-12 h-12 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-serif mb-4">Our Vision</h3>
            <div class="w-12 h-px bg-[#C6A43F] mb-6"></div>
            <p class="text-gray-600 leading-relaxed">
                To become India's most trusted name in curated luxury living, 
                setting the standard for excellence in real estate services nationwide.
            </p>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-28 bg-[#F5F2ED]">
    <div class="container mx-auto px-8 text-center">
        <p class="text-[#C6A43F] text-xs tracking-[5px] mb-4">OUR VALUES</p>
        <h2 class="text-4xl md:text-5xl font-serif font-light mb-16">What Guides Us</h2>
        <div class="grid md:grid-cols-3 gap-10 max-w-5xl mx-auto">
            <div>
                <div class="mb-4">
                <svg class="w-6 h-6 text-[#C6A43F] mx-auto" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L15 8.5L22 9.5L17 14L18.5 21L12 17.5L5.5 21L7 14L2 9.5L9 8.5L12 2Z" stroke="currentColor" stroke-width="1.5" fill="none"/>
                </svg>
            </div>
                <h4 class="text-xl font-serif mb-3">Integrity</h4>
                <p class="text-gray-500 text-sm">Uncompromising honesty in every transaction.</p>
            </div>
            <div>
                <div class="mb-4">
                    <svg class="w-6 h-6 text-[#C6A43F] mx-auto" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8.5L22 9.5L17 14L18.5 21L12 17.5L5.5 21L7 14L2 9.5L9 8.5L12 2Z" stroke="currentColor" stroke-width="1.5" fill="none"/>
                    </svg>
                </div>
                <h4 class="text-xl font-serif mb-3">Discretion</h4>
                <p class="text-gray-500 text-sm">Your privacy is our highest priority.</p>
            </div>
            <div>
                <div class="mb-4">
                    <svg class="w-6 h-6 text-[#C6A43F] mx-auto" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8.5L22 9.5L17 14L18.5 21L12 17.5L5.5 21L7 14L2 9.5L9 8.5L12 2Z" stroke="currentColor" stroke-width="1.5" fill="none"/>
                    </svg>
                </div>
                <h4 class="text-xl font-serif mb-3">Excellence</h4>
                <p class="text-gray-500 text-sm">Relentless pursuit of the extraordinary.</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Quote -->
<section class="py-28 px-8 max-w-4xl mx-auto text-center">
    <div class="mb-6">
        <svg class="w-12 h-12 text-[#C6A43F] opacity-30 mx-auto" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
        </svg>
    </div>
    <p class="text-2xl md:text-3xl font-serif leading-relaxed text-gray-700">
        We don't just sell homes. We curate the backdrop for life's most cherished moments.
    </p>
    <div class="w-12 h-px bg-[#C6A43F] mx-auto my-6"></div>
    <p class="text-[#C6A43F] text-sm tracking-[3px] font-semibold">— FOUNDER, LEVEL ONE ESTATE</p>
</section>
@endsection