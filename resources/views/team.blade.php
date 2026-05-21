@extends('layouts.app')

@section('title', 'Team - LEVEL ONE')

@section('content')
<!-- Hero Section with Parallax - Perfectly Centered -->
<section class="relative h-[70vh] min-h-[550px] bg-cover bg-center bg-fixed"
         style="background-image: url('https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=2000');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-8 max-w-4xl mx-auto"
         style="padding-top: 60px;">
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mb-8"></div>
        <p class="text-[#C6A43F] text-sm tracking-[6px] mb-4 font-light">THE PEOPLE BEHIND</p>
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif mb-6 leading-tight font-light">
            Masters of<br><span class="italic">Their Craft</span>
        </h1>
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mt-8"></div>
    </div>
</section>

<!-- Introduction -->
<section class="py-28 px-8 max-w-5xl mx-auto text-center">
    <p class="text-[#C6A43F] text-xs tracking-[5px] mb-5 font-semibold">MEET THE TEAM</p>
    <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif font-light leading-tight mb-8">
        Dedicated to <span class="italic">Excellence</span>
    </h2>
    <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-10"></div>
    <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto">
        Our team brings together decades of experience in luxury real estate, 
        design, and client relations. We are united by a common purpose: 
        to deliver an extraordinary experience to every client.
    </p>
</section>

<!-- Leadership Team Section -->
<section class="py-20 px-8 max-w-7xl mx-auto">
    <div class="text-center mb-16">
        <p class="text-[#C6A43F] text-xs tracking-[5px] mb-3">LEADERSHIP</p>
        <h3 class="text-3xl md:text-4xl font-serif font-light">Our <span class="italic">Principals</span></h3>
        <div class="w-12 h-px bg-[#C6A43F] mx-auto mt-6"></div>
    </div>

    @php 
        $leadership = App\Models\Team::where('is_active', true)
            ->where(function($q) {
                $q->where('position', 'like', '%CEO%')
                  ->orWhere('position', 'like', '%Founder%')
                  ->orWhere('position', 'like', '%Director%');
            })
            ->orderBy('order', 'asc')
            ->take(2)
            ->get();
        
        $allTeam = App\Models\Team::where('is_active', true)
            ->whereNotIn('id', $leadership->pluck('id'))
            ->orderBy('order', 'asc')
            ->get();
    @endphp

    @if($leadership->count() > 0)
    <div class="grid md:grid-cols-2 gap-12 mb-24">
        @foreach($leadership as $member)
        <div class="group">
            <div class="relative overflow-hidden mb-8 rounded-lg">
                @if($member->photo)
                    @php $photoPath = str_replace('team-photos/', '', $member->photo); @endphp
                    <img src="{{ asset('storage/team-photos/' . $photoPath) }}" 
                         alt="{{ $member->name }}"
                         class="w-full h-[500px] object-cover transition duration-700 group-hover:scale-105">
                @else
                    <div class="w-full h-[500px] bg-[#E8E2D9] flex items-center justify-center">
                        <span class="text-8xl text-gray-400">👤</span>
                    </div>
                @endif
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-8">
                    <h3 class="text-3xl font-serif text-white mb-1">{{ $member->name }}</h3>
                    <p class="text-[#C6A43F] text-sm tracking-wider">{{ $member->position }}</p>
                </div>
            </div>
            <div class="text-center">
                <p class="text-gray-600 leading-relaxed max-w-lg mx-auto">{{ $member->bio }}</p>
                @if($member->email)
                    <a href="mailto:{{ $member->email }}" class="text-sm text-gray-400 hover:text-[#C6A43F] transition inline-flex items-center gap-2 mt-4">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        {{ $member->email }}
                    </a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <!-- Remaining Team Members -->
    @if($allTeam->count() > 0)
    <div class="text-center mb-12">
        <p class="text-[#C6A43F] text-xs tracking-[5px] mb-3">THE EXPERTS</p>
        <h3 class="text-3xl md:text-4xl font-serif font-light">Our <span class="italic">Team</span></h3>
        <div class="w-12 h-px bg-[#C6A43F] mx-auto mt-6"></div>
    </div>

    <div class="grid md:grid-cols-3 gap-10">
        @foreach($allTeam as $member)
        <div class="group text-center">
            <div class="relative mb-6 overflow-hidden rounded-full w-56 h-56 mx-auto">
                @if($member->photo)
                    @php $photoPath = str_replace('team-photos/', '', $member->photo); @endphp
                    <img src="{{ asset('storage/team-photos/' . $photoPath) }}" 
                         alt="{{ $member->name }}"
                         class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                @else
                    <div class="w-full h-full bg-[#E8E2D9] flex items-center justify-center">
                        <span class="text-5xl text-gray-400">👤</span>
                    </div>
                @endif
                <div class="absolute inset-0 bg-[#C6A43F]/0 group-hover:bg-[#C6A43F]/20 transition duration-500 rounded-full"></div>
            </div>
            <h3 class="text-xl font-serif mb-1 group-hover:text-[#C6A43F] transition">{{ $member->name }}</h3>
            <p class="text-[#C6A43F] text-xs tracking-wider mb-3">{{ $member->position }}</p>
            <p class="text-gray-500 text-sm leading-relaxed max-w-sm mx-auto">{{ Str::limit($member->bio, 100) }}</p>
            @if($member->email)
                <a href="mailto:{{ $member->email }}" class="text-xs text-gray-400 hover:text-[#C6A43F] transition block mt-3">
                    {{ $member->email }}
                </a>
            @endif
            @if($member->linkedin)
                <a href="{{ $member->linkedin }}" target="_blank" class="inline-block mt-3 text-gray-400 hover:text-[#C6A43F] transition">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
            @endif
        </div>
        @endforeach
    </div>
    @elseif($leadership->count() == 0)
    <div class="text-center py-20">
        <p class="text-gray-500 text-lg">Team members coming soon.</p>
        <p class="text-gray-400 text-sm mt-2">Add team members through the admin panel.</p>
    </div>
    @endif
</section>

<!-- Join Our Team CTA -->
<section class="py-28 px-8 bg-[#F5F2ED]">
    <div class="max-w-4xl mx-auto text-center">
        <p class="text-[#C6A43F] text-xs tracking-[5px] mb-4">JOIN US</p>
        <h2 class="text-4xl md:text-5xl font-serif font-light mb-6">Become part of<br><span class="italic">something extraordinary</span></h2>
        <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-10"></div>
        <p class="text-gray-600 mb-10 leading-relaxed">
            We're always looking for exceptional talent to join our growing team.
            If you're passionate about luxury real estate, we'd love to hear from you.
        </p>
        <a href="/contact" class="btn-primary inline-block">Get in Touch</a>
    </div>
</section>
@endsection