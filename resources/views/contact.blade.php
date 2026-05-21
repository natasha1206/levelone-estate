@extends('layouts.app')

@section('title', 'Contact - LEVEL ONE')

@section('content')
<!-- Hero Section with Parallax - Perfectly Centered with Balanced Spacing -->
<section class="relative h-[70vh] min-h-[550px] bg-cover bg-center bg-fixed"
         style="background-image: url('https://images.pexels.com/photos/280221/pexels-photo-280221.jpeg?auto=compress&cs=tinysrgb&w=2000');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-8 max-w-4xl mx-auto"
         style="padding-top: 60px;">
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mb-8"></div>
        <p class="text-[#C6A43F] text-sm tracking-[6px] mb-5 font-light">GET IN TOUCH</p>
        <h1 class="text-5xl md:text-7xl lg:text-8xl xl:text-9xl font-serif mb-6 leading-tight font-light">
            Begin Your<br><span class="italic">Journey</span>
        </h1>
        <div class="w-16 h-px bg-[#C6A43F] mx-auto mt-8"></div>
    </div>
</section>

<!-- Introduction -->
<section class="py-20 px-8 max-w-5xl mx-auto text-center">
    <p class="text-[#C6A43F] text-xs tracking-[5px] mb-5 font-semibold">WE'RE HERE TO HELP</p>
    <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif font-light leading-tight mb-8">
        Let's start a<br><span class="italic">conversation</span>
    </h2>
    <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-10"></div>
    <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto">
        Whether you're looking to acquire a new property, list your residence, 
        or simply explore your options, our team is ready to assist you 
        with discretion and expertise.
    </p>
</section>

<!-- Contact Form & Info Grid -->
<section class="pt-20 px-8 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-start">
        
        <!-- Contact Form -->
        <div class="bg-white p-10 shadow-xl">
            <h3 class="text-2xl font-serif mb-2">Send us a message</h3>
            <div class="w-12 h-px bg-[#C6A43F] mb-6"></div>
            
            @if(session('success'))
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-5 py-3 rounded mb-6 text-sm">
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-wider font-semibold mb-2 text-gray-500">Full Name *</label>
                    <input type="text" name="name" required
                           class="w-full px-4 py-3 border-b-2 border-gray-200 focus:border-[#C6A43F] outline-none transition bg-transparent">
                </div>
                
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-wider font-semibold mb-2 text-gray-500">Email Address *</label>
                    <input type="email" name="email" required
                           class="w-full px-4 py-3 border-b-2 border-gray-200 focus:border-[#C6A43F] outline-none transition bg-transparent">
                </div>
                
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-wider font-semibold mb-2 text-gray-500">Phone Number</label>
                    <input type="tel" name="phone"
                           class="w-full px-4 py-3 border-b-2 border-gray-200 focus:border-[#C6A43F] outline-none transition bg-transparent">
                </div>
                
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-wider font-semibold mb-2 text-gray-500">Your Message *</label>
                    <textarea name="message" rows="4" required
                              class="w-full px-4 py-3 border-b-2 border-gray-200 focus:border-[#C6A43F] outline-none transition bg-transparent resize-none"></textarea>
                </div>
                
                <button type="submit" class="btn-primary w-full">
                    Send Message →
                </button>
            </form>
        </div>
        
        <!-- Contact Information -->
        <div class="flex flex-col gap-6">
            <!-- Office Address -->
            <div class="bg-[#F5F2ED] p-8">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-serif mb-3">Visit Our Office</h3>
                <div class="w-12 h-px bg-[#C6A43F] mb-5"></div>
                <p class="text-gray-600 leading-relaxed">
                    Level One Estate<br>
                    123 Luxury Avenue, Bandra West<br>
                    Mumbai - 400053, India
                </p>
            </div>
            
            <!-- Contact Details -->
            <div class="bg-[#F5F2ED] p-8">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-serif mb-3">Get In Touch</h3>
                <div class="w-12 h-px bg-[#C6A43F] mb-5"></div>
                <p class="text-gray-600 leading-relaxed">
                    <strong class="block text-xs uppercase tracking-wider mb-1">Phone</strong>
                    +91 22 1234 5678<br>
                    +91 98765 43210
                </p>
                <p class="text-gray-600 leading-relaxed mt-4">
                    <strong class="block text-xs uppercase tracking-wider mb-1">Email</strong>
                    hello@levelone.com<br>
                    concierge@levelone.com
                </p>
            </div>
            
            <!-- Hours -->
            <div class="bg-[#F5F2ED] p-8">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#C6A43F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-serif mb-3">Office Hours</h3>
                <div class="w-12 h-px bg-[#C6A43F] mb-5"></div>
                <div class="space-y-2 text-gray-600">
                    <div class="flex justify-between">
                        <span>Monday - Friday</span>
                        <span class="font-medium">9:00 AM - 7:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Saturday</span>
                        <span class="font-medium">10:00 AM - 4:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Sunday</span>
                        <span class="font-medium">By Appointment</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 px-8 max-w-7xl mx-auto">
    <div class="bg-[#1A1A1A] p-1">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1x3773.456789!2x72.830000!3x19.050000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9a5b5b5b5b5%3A0x5b5b5b5b5b5b5b5b!2sBandra%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="400" 
            style="border:0; filter: grayscale(100%);" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-28 px-8 bg-[#F5F2ED]">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-[#C6A43F] text-xs tracking-[5px] mb-4">HAVE QUESTIONS?</p>
            <h2 class="text-4xl md:text-5xl font-serif font-light mb-6">Frequently Asked</h2>
            <div class="w-12 h-px bg-[#C6A43F] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h4 class="text-lg font-serif mb-2">Do you offer virtual tours?</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Yes, we provide private virtual tours for all our properties, allowing you to explore from anywhere in the world.</p>
            </div>
            <div>
                <h4 class="text-lg font-serif mb-2">What is your commission structure?</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Our commission rates are competitive and vary by property type. We're happy to discuss during our initial consultation.</p>
            </div>
            <div>
                <h4 class="text-lg font-serif mb-2">Do you work with international clients?</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Absolutely. We have extensive experience working with clients from around the world.</p>
            </div>
            <div>
                <h4 class="text-lg font-serif mb-2">How quickly can I schedule a viewing?</h4>
                <p class="text-gray-500 text-sm leading-relaxed">We can typically arrange private viewings within 24-48 hours of your request.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-28 px-8 bg-[#1A1A1A] text-white">
    <div class="max-w-3xl mx-auto text-center">
        <p class="text-[#C6A43F] text-xs tracking-[5px] mb-4">FOLLOW US</p>
        <h2 class="text-4xl md:text-5xl font-serif font-light mb-6">Join our<br><span class="italic">journey</span></h2>
        <div class="w-12 h-px bg-[#C6A43F] mx-auto mb-10"></div>
        <div class="flex justify-center gap-8 mb-10">
            <a href="#" class="text-white/70 hover:text-[#C6A43F] transition text-sm uppercase tracking-wider">Instagram</a>
            <a href="#" class="text-white/70 hover:text-[#C6A43F] transition text-sm uppercase tracking-wider">LinkedIn</a>
            <a href="#" class="text-white/70 hover:text-[#C6A43F] transition text-sm uppercase tracking-wider">Twitter</a>
        </div>
        <p class="text-gray-400 text-sm">
            Subscribe to receive exclusive property previews and market insights.
        </p>
    </div>
</section>
@endsection