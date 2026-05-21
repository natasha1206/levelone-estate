@extends('layouts.app')

@section('title', 'Portfolio - LEVEL ONE')

@section('content')
<!-- Hero Section with Parallax - Perfectly Centered -->
<section class="relative h-[70vh] min-h-[550px] bg-cover bg-center bg-fixed"
         style="background-image: url('https://images.pexels.com/photos/2587054/pexels-photo-2587054.jpeg?auto=compress&cs=tinysrgb&w=2000');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-8 max-w-4xl mx-auto"
         style="padding-top: 60px;">
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mb-8"></div>
        <p class="text-[#C6A43F] text-sm tracking-[6px] mb-4 font-light">CURATED COLLECTION</p>
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif mb-6 leading-tight font-light">
            Exceptional<br><span class="italic">Residences</span>
        </h1>
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mt-8"></div>
    </div>
</section>

<!-- Filter Bar -->
<section class="sticky top-20 z-40 bg-white shadow-md py-4">
    <div class="container mx-auto px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="filter-btn active px-6 py-2 text-xs uppercase tracking-wider font-medium hover:text-[#C6A43F] transition" data-filter="all">All Properties</button>
            <button class="filter-btn px-6 py-2 text-xs uppercase tracking-wider font-medium hover:text-[#C6A43F] transition" data-filter="residential">Residential</button>
            <button class="filter-btn px-6 py-2 text-xs uppercase tracking-wider font-medium hover:text-[#C6A43F] transition" data-filter="commercial">Commercial</button>
            <button class="filter-btn px-6 py-2 text-xs uppercase tracking-wider font-medium hover:text-[#C6A43F] transition" data-filter="land">Land</button>
        </div>
    </div>
</section>

<!-- Properties Grid -->
<section class="py-28 px-8 max-w-7xl mx-auto">
    @php 
        $properties = App\Models\Property::where('is_active', true)->orderBy('order', 'asc')->paginate(9);
    @endphp

    @if($properties->count() > 0)
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="properties-grid">
        @foreach($properties as $property)
        <div class="property-card group cursor-pointer" 
             data-type="{{ $property->type }}"
             onclick="window.location='{{ route('property.show', $property->slug) }}'">
            <div class="relative overflow-hidden rounded-lg mb-5">
                @if($property->images && count($property->images) > 0)
                    <img src="{{ asset('storage/' . $property->images[0]['image']) }}" 
                         alt="{{ $property->title }}"
                         class="w-full h-80 object-cover transition duration-700 group-hover:scale-110">
                @else
                    <div class="w-full h-80 bg-gray-200 flex items-center justify-center">
                        <span class="text-6xl">🏠</span>
                    </div>
                @endif
                
                <!-- Status Badge -->
                <span class="absolute top-4 right-4 px-4 py-1 text-xs uppercase tracking-wider font-semibold {{ $property->status == 'available' ? 'bg-emerald-600 text-white' : ($property->status == 'sold' ? 'bg-gray-600 text-white' : 'bg-amber-600 text-white') }}">
                    {{ $property->status }}
                </span>
                
                <!-- Featured Badge -->
                @if($property->is_featured)
                <span class="absolute top-4 left-4 px-4 py-1 text-xs uppercase tracking-wider font-semibold bg-[#C6A43F] text-white">
                    Featured
                </span>
                @endif
                
                <!-- Overlay on hover -->
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                    <span class="text-white text-sm uppercase tracking-[3px] border border-white px-6 py-3">View Details</span>
                </div>
            </div>
            
            <div>
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-serif group-hover:text-[#C6A43F] transition">{{ $property->title }}</h3>
                    <p class="text-[#C6A43F] font-medium text-lg">₹{{ number_format($property->price / 10000000, 1) }} Cr</p>
                </div>
                <p class="text-gray-500 text-sm mb-3 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    {{ $property->location }}
                </p>
                <div class="flex justify-between text-sm text-gray-500 pt-3 border-t border-gray-100">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        {{ $property->area ?? '—' }} sq ft
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        {{ $property->bedrooms ?? '—' }} Beds
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path>
                        </svg>
                        {{ $property->bathrooms ?? '—' }}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-16">
        {{ $properties->links() }}
    </div>
    @else
    <div class="text-center py-20">
        <p class="text-gray-500 text-lg">Properties coming soon.</p>
        <p class="text-gray-400 text-sm mt-2">Check back for our curated collection.</p>
    </div>
    @endif
</section>

<!-- Call to Action -->
<section class="py-28 px-8 bg-[#F5F2ED]">
    <div class="max-w-4xl mx-auto text-center">
        <p class="text-[#C6A43F] text-xs tracking-[5px] mb-4">NOT FINDING WHAT YOU'RE LOOKING FOR?</p>
        <h2 class="text-4xl md:text-5xl font-serif font-light mb-6">Let us find your<br><span class="italic">dream home</span></h2>
        <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-10"></div>
        <p class="text-gray-600 mb-10 leading-relaxed">
            Our team has access to off-market properties not listed anywhere else.
            Tell us what you're looking for, and we'll make it happen.
        </p>
        <a href="/contact" class="btn-primary inline-block">Contact Our Team</a>
    </div>
</section>

<!-- JavaScript for Filtering -->
<script>
    document.querySelectorAll('.filter-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Update active state
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active', 'text-[#C6A43F]'));
            this.classList.add('active');
            this.classList.add('text-[#C6A43F]');
            
            const filterValue = this.getAttribute('data-filter');
            const cards = document.querySelectorAll('.property-card');
            
            cards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-type') === filterValue) {
                    card.style.display = 'block';
                    setTimeout(() => card.style.opacity = '1', 10);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => card.style.display = 'none', 300);
                }
            });
        });
    });
</script>

<style>
    .property-card {
        transition: opacity 0.3s ease;
    }
    .filter-btn.active {
        color: #C6A43F;
        position: relative;
    }
    .filter-btn.active::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 2px;
        background-color: #C6A43F;
    }
</style>
@endsection