@extends('layouts.app')

@section('title', $property->title . ' - EstateFlow')

@section('content')
<section class="py-24 px-6 max-w-7xl mx-auto">
    <!-- Breadcrumb -->
    <div class="mb-8">
        <a href="{{ route('properties') }}" class="text-gold hover:underline">← Back to Properties</a>
    </div>

    <div class="grid lg:grid-cols-2 gap-12">
        <!-- Image Gallery -->
        <div>
            @if($property->images && count($property->images) > 0)
                <img src="{{ asset('storage/' . $property->images[0]['image']) }}" 
                     alt="{{ $property->title }}"
                     class="w-full rounded-lg shadow-lg mb-4">
                @if(count($property->images) > 1)
                    <div class="grid grid-cols-4 gap-2">
                        @foreach(array_slice($property->images, 1, 4) as $image)
                            <img src="{{ asset('storage/' . $image['image']) }}" 
                                 alt="{{ $property->title }}"
                                 class="w-full h-24 object-cover rounded cursor-pointer hover:opacity-75">
                        @endforeach
                    </div>
                @endif
            @else
                <div class="w-full h-96 bg-sand flex items-center justify-center rounded-lg">
                    <span class="text-6xl">🏠</span>
                </div>
            @endif
        </div>

        <!-- Property Details -->
        <div>
            <div class="flex justify-between items-start mb-4">
                <h1 class="text-3xl md:text-4xl font-serif">{{ $property->title }}</h1>
                <span class="text-2xl font-semibold text-gold">₹{{ number_format($property->price) }}</span>
            </div>
            
            <p class="text-gray-500 mb-4 flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                {{ $property->location }}
            </p>

            <div class="grid grid-cols-3 gap-4 py-6 border-y border-sand mb-6">
                <div class="text-center">
                    <div class="text-2xl font-serif">{{ $property->bedrooms ?? '-' }}</div>
                    <div class="text-sm text-gray-500">Bedrooms</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-serif">{{ $property->bathrooms ?? '-' }}</div>
                    <div class="text-sm text-gray-500">Bathrooms</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-serif">{{ $property->area ?? '-' }}</div>
                    <div class="text-sm text-gray-500">Sq Ft</div>
                </div>
            </div>

            <div class="mb-6">
                <h3 class="text-xl font-serif mb-3">Description</h3>
                <div class="text-gray-600 leading-relaxed">
                    {!! nl2br(e($property->description)) !!}
                </div>
            </div>

            <div class="flex gap-4">
                <a href="{{ route('contact') }}" 
                   class="flex-1 bg-gold text-white py-3 rounded text-center hover:bg-charcoal transition">
                    Inquire Now
                </a>
                <button onclick="window.print()" 
                        class="px-6 border border-gold text-gold py-3 rounded hover:bg-gold hover:text-white transition">
                    Print
                </button>
            </div>
        </div>
    </div>
</section>
@endsection