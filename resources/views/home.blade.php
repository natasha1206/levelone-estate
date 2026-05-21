@extends('layouts.app')

@section('title', 'LEVEL ONE - Luxury Real Estate')

@section('content')
<!-- Hero Section with New Background -->
<section class="relative min-h-screen flex items-center justify-center bg-cover bg-center"
         style="background-image: url('https://images.pexels.com/photos/2587054/pexels-photo-2587054.jpeg?auto=compress&cs=tinysrgb&w=2000');">
    <div class="absolute inset-0 bg-black/35"></div>
    <div class="relative z-10 text-center text-white px-8 max-w-5xl mx-auto">
        <p class="text-[#C6A43F] text-sm tracking-[6px] mb-6 font-light">SINCE 2015</p>
        <h1 class="text-6xl md:text-8xl lg:text-9xl font-serif mb-8 leading-tight font-light">
            Where Lives Become<br><span class="italic">Legacies</span>
        </h1>
        <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-10"></div>
        <a href="/properties" class="btn-primary">Explore Portfolio</a>
    </div>
</section>

<!-- Philosophy -->
<section class="py-28 px-8 max-w-6xl mx-auto text-center">
    <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-8"></div>
    <p class="text-[#C6A43F] text-xs tracking-[4px] mb-4">OUR PHILOSOPHY</p>
    <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif font-light leading-tight">
        Beyond the transaction,<br>a <span class="italic">relationship</span>.
    </h2>
    <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto mt-8">
        At Level One, we don't just sell properties—we curate lifestyles. 
        With an unparalleled understanding of luxury real estate, 
        we connect discerning individuals with residences that transcend the ordinary.
    </p>
</section>

<!-- Stats -->
<section class="py-20 bg-[#F5F2ED]">
    <div class="container mx-auto px-8">
        <div class="grid md:grid-cols-4 gap-12 text-center">
            <div><div class="text-4xl md:text-5xl font-serif text-[#C6A43F] mb-2">500+</div><p class="text-xs tracking-[3px] uppercase">Properties Sold</p></div>
            <div><div class="text-4xl md:text-5xl font-serif text-[#C6A43F] mb-2">₹2.5B+</div><p class="text-xs tracking-[3px] uppercase">Transaction Value</p></div>
            <div><div class="text-4xl md:text-5xl font-serif text-[#C6A43F] mb-2">15+</div><p class="text-xs tracking-[3px] uppercase">Years of Excellence</p></div>
            <div><div class="text-4xl md:text-5xl font-serif text-[#C6A43F] mb-2">98%</div><p class="text-xs tracking-[3px] uppercase">Client Satisfaction</p></div>
        </div>
    </div>
</section>

<!-- Featured Properties -->
<section class="py-28 px-8 max-w-7xl mx-auto">
    <div class="text-center mb-16">
        <p class="text-[#C6A43F] text-xs tracking-[4px] mb-3">CURATED SELECTION</p>
        <h2 class="text-4xl md:text-5xl font-serif font-light">Featured <span class="italic">Residences</span></h2>
        <div class="w-12 h-px bg-[#C6A43F] mx-auto mt-6"></div>
    </div>

    @php
        $featured = App\Models\Property::where('is_active', true)->where('is_featured', true)->orderBy('order', 'asc')->take(3)->get();
    @endphp

    <div class="grid md:grid-cols-3 gap-8">
        @forelse($featured as $property)
        <div class="group cursor-pointer" onclick="window.location='{{ route('property.show', $property->slug) }}'">
            <div class="overflow-hidden mb-5">
                @php
                    $images = is_string($property->images) ? json_decode($property->images, true) : $property->images;
                    $firstImage = $images[0]['image'] ?? null;
                @endphp

                @if($firstImage)
                    <img src="{{ Storage::url($firstImage) }}" alt="{{ $property->title }}" class="w-full h-96 object-cover transition duration-700 group-hover:scale-105">
                @else
                    <div class="w-full h-96 bg-gray-200 flex items-center justify-center"><span class="text-6xl">🏠</span></div>
                @endif
            </div>
            <div class="flex justify-between items-start">
                <div><h3 class="text-xl font-serif mb-1 group-hover:text-[#C6A43F] transition">{{ $property->title }}</h3><p class="text-gray-500 text-sm">{{ $property->location }}</p></div>
                <div class="text-right"><p class="text-[#C6A43F] font-medium">₹{{ number_format($property->price / 10000000, 1) }} Cr</p></div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12">Featured properties coming soon.</div>
        @endforelse
    </div>
    <div class="text-center mt-12"><a href="/properties" class="btn-outline">View All Properties</a></div>
</section>

<!-- Services -->
<section class="py-28 px-8 bg-[#F5F2ED]">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div>
            <p class="text-[#C6A43F] text-xs tracking-[4px] mb-3">BESPOKE SERVICES</p>
            <h2 class="text-4xl md:text-5xl font-serif font-light mb-6">An <span class="italic">uncompromising</span><br>approach to luxury.</h2>
            <div class="w-12 h-px bg-[#C6A43F] mb-8"></div>
            <div class="space-y-8">
                <div><h3 class="text-lg font-serif mb-2">Curated Portfolio</h3><p class="text-gray-500 text-sm">Access to off-market and exclusive listings not available elsewhere.</p></div>
                <div><h3 class="text-lg font-serif mb-2">Personalized Advisory</h3><p class="text-gray-500 text-sm">Dedicated experts who understand your unique lifestyle requirements.</p></div>
                <div><h3 class="text-lg font-serif mb-2">White-Glove Service</h3><p class="text-gray-500 text-sm">From private viewings to closing, every detail is meticulously handled.</p></div>
            </div>
            <div class="mt-8">
                <a href="/services" class="inline-block bg-[#C6A43F] hover:bg-[#1A1A1A] text-white px-8 py-3 text-xs uppercase tracking-wider font-semibold transition duration-300">
                    DISCOVER OUR SERVICES
                </a>
</div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-80 object-cover">
            <img src="https://images.pexels.com/photos/280221/pexels-photo-280221.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-80 object-cover mt-8">
        </div>
    </div>
</section>

<!-- Team Preview -->
<section class="py-28 px-8 max-w-7xl mx-auto text-center">
    <p class="text-[#C6A43F] text-xs tracking-[4px] mb-3">THE PEOPLE BEHIND</p>
    <h2 class="text-4xl md:text-5xl font-serif font-light mb-4">Our Principals</h2>
    <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-12"></div>
    @php $team = App\Models\Team::where('is_active', true)->orderBy('order', 'asc')->take(3)->get(); @endphp
    <div class="grid md:grid-cols-3 gap-12">
        @forelse($team as $member)
        <div>
            @if($member->photo)
                @php $photoPath = str_replace('team-photos/', '', $member->photo); @endphp
                <img src="{{ asset('storage/team-photos/' . $photoPath) }}" class="w-48 h-48 rounded-full object-cover mx-auto mb-5">
            @else
                <div class="w-48 h-48 rounded-full bg-[#E8E2D9] mx-auto mb-5 flex items-center justify-center"><span class="text-5xl text-gray-400">👤</span></div>
            @endif
            <h3 class="text-xl font-serif mb-1">{{ $member->name }}</h3>
            <p class="text-[#C6A43F] text-xs tracking-wider mb-3">{{ $member->position }}</p>
        </div>
        @empty
        <div class="col-span-full">Team members coming soon.</div>
        @endforelse
    </div>
    <div class="mt-12"><a href="/team" class="btn-outline">Meet Our Team</a></div>
</section>
@endsection