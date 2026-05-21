<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LEVEL ONE - Luxury Real Estate')</title>
    <meta name="description" content="Level One Estate - Curating exceptional properties for discerning clients.">
    @vite(['resources/css/app.css'])
    
    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background: #FCF9F5;
            color: #1A1A1A;
            scroll-behavior: smooth;
        }
        
        h1, h2, h3, h4, .font-serif {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 500;
        }
        
        /* Premium Scrollbar */
        ::-webkit-scrollbar {
            width: 3px;
        }
        ::-webkit-scrollbar-track {
            background: #E8E2D9;
        }
        ::-webkit-scrollbar-thumb {
            background: #C6A43F;
        }
        
        /* Premium Buttons */
        .btn-primary {
            background: #1A1A1A;
            color: #FCF9F5;
            padding: 14px 32px;
            border: none;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 3px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            display: inline-block;
            cursor: pointer;
        }
        .btn-primary:hover {
            background: #C6A43F;
            transform: translateY(-2px);
        }
        
        .btn-outline {
            background: transparent;
            color: #1A1A1A;
            padding: 14px 32px;
            border: 1px solid #1A1A1A;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 3px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            display: inline-block;
            cursor: pointer;
        }
        .btn-outline:hover {
            background: #1A1A1A;
            color: #FCF9F5;
        }
        
        .section-tag {
            font-size: 10px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #C6A43F;
            font-weight: 600;
            margin-bottom: 16px;
        }
        
        .section-title {
            font-size: 48px;
            font-weight: 500;
            line-height: 1.2;
            letter-spacing: -1px;
        }
        
        @media (max-width: 768px) {
            .section-title {
                font-size: 32px;
            }
        }
        
        .gold-text {
            color: #C6A43F;
        }
        
        .border-gold {
            border-color: #C6A43F;
        }
        
        .bg-cream {
            background: #FCF9F5;
        }
        
        .bg-charcoal {
            background: #1A1A1A;
        }
    </style>
</head>
<body>
    <header class="fixed top-0 left-0 right-0 z-50 bg-[#F5F2ED]/95 backdrop-blur-md">
        <nav class="container mx-auto px-8 py-6 flex justify-between items-center">
            <div class="text-2xl font-serif tracking-tight">
                <a href="/" class="hover:opacity-80 transition">LEVEL ONE</a>
            </div>
            <div class="space-x-10 hidden lg:flex items-center">
                <a href="/" class="hover:text-[#C6A43F] transition text-xs uppercase tracking-wider font-medium">Home</a>
                <a href="/about" class="hover:text-[#C6A43F] transition text-xs uppercase tracking-wider font-medium">About</a>
                <a href="/services" class="hover:text-[#C6A43F] transition text-xs uppercase tracking-wider font-medium">Services</a>
                <a href="/team" class="hover:text-[#C6A43F] transition text-xs uppercase tracking-wider font-medium">Team</a>
                <a href="/properties" class="hover:text-[#C6A43F] transition text-xs uppercase tracking-wider font-medium">Properties</a>
                <a href="/contact" class="px-6 py-2 border border-[#1A1A1A] hover:bg-[#1A1A1A] hover:text-white transition text-xs uppercase tracking-wider font-medium">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[#1A1A1A] text-[#FCF9F5] py-20">
        <div class="container mx-auto px-8">
            <div class="grid md:grid-cols-4 gap-12 mb-16">
                <div>
                    <h3 class="text-2xl font-serif tracking-tight mb-4">LEVEL ONE</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Curating exceptional properties for discerning clients since 2015.</p>
                </div>
                <div>
                    <h4 class="font-medium mb-6 uppercase tracking-wider text-xs">Explore</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li><a href="/" class="hover:text-[#C6A43F] transition">Home</a></li>
                        <li><a href="/about" class="hover:text-[#C6A43F] transition">About</a></li>
                        <li><a href="/services" class="hover:text-[#C6A43F] transition">Services</a></li>
                        <li><a href="/properties" class="hover:text-[#C6A43F] transition">Properties</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-6 uppercase tracking-wider text-xs">Connect</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-[#C6A43F] transition">Instagram</a></li>
                        <li><a href="#" class="hover:text-[#C6A43F] transition">LinkedIn</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-6 uppercase tracking-wider text-xs">Contact</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li>hello@levelone.com</li>
                        <li>+91 22 1234 5678</li>
                        <li>Mumbai, India</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-xs">
                <p>&copy; 2025 Level One Estate. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>