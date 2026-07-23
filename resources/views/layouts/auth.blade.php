<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>POSYANDU HARAPAN BUNDA | @yield('title', 'Login')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/Posyandu.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('img/Posyandu.png') }}">

    <!-- Load Tailwind CSS v3 with plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">
    
    <!-- Bootstrap CSS solely for Modals styling -->
    <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        primary: '#f49ac1', // Main pink color from Design System
                        'primary-dark': '#e089af',
                        'surface': '#f8f9fa',
                        'surface-container': '#ffffff',
                    }
                }
            }
        }
    </script>
    <style data-purpose="custom-backgrounds">
        /* Subtle background patterns to mimic the dots/shapes in the original image */
        .bg-pattern-dots {
            background-image: radial-gradient(#f49ac1 0.5px, transparent 0.5px);
            background-size: 20px 20px;
            opacity: 0.2;
        }

        /* Custom gradient for the hero section background */
        .hero-gradient {
            background: linear-gradient(135deg, #fef2f2 0%, #fce7f3 100%);
        }

        /* Floating illustration container */
        .illustration-wrapper {
            position: relative;
            overflow: hidden;
        }

        .floating-heart {
            position: absolute;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Bootstrap modal customization override to match Tailwind */
        .modal-content {
            border-radius: 1.5rem !important;
            border: none !important;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-slate-50 font-sans min-h-screen flex flex-col justify-center items-center p-4">
    <!-- BEGIN: MainContainer -->
    <main class="w-full max-w-6xl bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row min-h-[700px]" data-purpose="auth-container">
        <!-- BEGIN: HeroSection -->
        <section class="w-full md:w-1/2 hero-gradient p-8 md:p-12 flex flex-col justify-between relative overflow-hidden" data-purpose="info-section">
            <!-- Decorative background dots -->
            <div class="absolute top-0 left-0 w-32 h-32 bg-pattern-dots pointer-events-none"></div>
            <div class="relative z-10">
                <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 leading-tight">
                    Keluarga Sehat,<br />
                    <span class="text-primary">Masa Depan Hebat</span>
                </h1>
                <p class="mt-4 text-slate-600 text-sm md:text-base max-w-sm leading-relaxed">
                    Posyandu <span class="font-bold">Harapan Bunda</span> hadir untuk mendukung kesehatan ibu dan anak dengan pelayanan terbaik.
                </p>
            </div>
            <!-- Main Illustration -->
            <div class="relative flex justify-center items-center py-8 illustration-wrapper">
                <!-- Pink heart floating decoration -->
                <div class="floating-heart absolute top-10 right-1/4 text-primary opacity-40">
                    <svg fill="currentColor" height="40" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                    </svg>
                </div>
                <img alt="Keluarga Posyandu" class="w-full h-64 md:h-80 object-cover rounded-3xl drop-shadow-xl z-10 border-4 border-white" src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=800&q=80" />
            </div>
            <!-- Stats Cards -->
            <div class="grid grid-cols-3 gap-3 md:gap-4 z-10">
                <!-- Card 1 -->
                <div class="bg-white/80 backdrop-blur-sm p-3 md:p-4 rounded-2xl flex flex-col items-center text-center shadow-sm border border-white">
                    <div class="bg-rose-100 p-2 rounded-full mb-2">
                        <i class="fas fa-child text-rose-500 w-5 h-5 flex items-center justify-center"></i>
                    </div>
                    <span class="text-sm md:text-lg font-bold text-slate-800">{{ \App\Models\FamilyChildren::count() }}+</span>
                    <span class="text-[10px] md:text-xs text-slate-500">Balita Terdata</span>
                </div>
                <!-- Card 2 -->
                <div class="bg-white/80 backdrop-blur-sm p-3 md:p-4 rounded-2xl flex flex-col items-center text-center shadow-sm border border-white">
                    <div class="bg-pink-100 p-2 rounded-full mb-2">
                        <i class="fas fa-heart text-pink-500 w-5 h-5 flex items-center justify-center"></i>
                    </div>
                    <span class="text-sm md:text-lg font-bold text-slate-800">{{ \App\Models\FamilyParent::where('is_pregnant', 'Hamil')->count() }}+</span>
                    <span class="text-[10px] md:text-xs text-slate-500">Ibu Hamil</span>
                </div>
                <!-- Card 3 -->
                <div class="bg-white/80 backdrop-blur-sm p-3 md:p-4 rounded-2xl flex flex-col items-center text-center shadow-sm border border-white">
                    <div class="bg-blue-100 p-2 rounded-full mb-2">
                        <i class="fas fa-calendar-alt text-blue-500 w-5 h-5 flex items-center justify-center"></i>
                    </div>
                    <span class="text-[10px] md:text-xs font-bold text-slate-800 leading-tight">Pelayanan</span>
                    <span class="text-[10px] md:text-xs text-slate-500">Setiap Bulan</span>
                </div>
            </div>
        </section>
        <!-- END: HeroSection -->

        <!-- BEGIN: LoginSection -->
        <section class="w-full md:w-1/2 p-8 md:p-16 flex flex-col justify-center" data-purpose="login-form-container">
            <!-- Brand Logo -->
            <div class="flex items-center gap-3 mb-12">
                <div class="w-12 h-12 bg-white rounded-xl shadow-lg flex items-center justify-center p-2">
                    <img src="{{ asset('img/Posyandu.png') }}" alt="Logo Posyandu" class="w-full h-full object-contain" />
                </div>
                <div>
                    <span class="block text-xl font-extrabold text-indigo-900 tracking-tight leading-none">POSYANDU</span>
                    <span class="block text-xl font-extrabold text-indigo-900 tracking-tight leading-none uppercase">Harapan Bunda</span>
                </div>
            </div>

            <!-- Alert Messages -->
            @if (session()->has('success'))
                <div class="mb-6 bg-green-50 border border-green-100 text-green-700 px-4 py-3 rounded-lg flex items-center justify-between text-sm" role="alert">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="mb-6 bg-red-50 border border-red-100 text-red-700 px-4 py-3 rounded-lg flex items-center justify-between text-sm" role="alert">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                </div>
            @endif

            <!-- Main Content -->
            @yield('main')
            <!-- End content -->
        </section>
        <!-- END: LoginSection -->
    </main>
    <!-- END: MainContainer -->

    <!-- BEGIN: Footer -->
    <footer class="mt-8 text-slate-400 text-xs md:text-sm flex items-center gap-1" data-purpose="page-footer">
        <span>© {{ date('Y') }} Posyandu Harapan Bunda</span>
        <span class="mx-1">•</span>
        <span>{{ $site->village_name ?? 'Desa Lumbir' }}</span>
        <svg class="w-3 h-3 text-primary ml-1" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
        </svg>
    </footer>
    <!-- END: Footer -->

    <!-- Floating Chat/Help Button -->
    <div class="fixed bottom-6 right-6 flex flex-col items-end gap-3" data-purpose="help-widget">
        <div class="bg-white px-4 py-2 rounded-xl shadow-lg text-xs font-medium text-slate-600 border border-slate-100 hidden md:block">
            Butuh bantuan?
        </div>
        <button class="w-14 h-14 bg-primary text-white rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition-transform" data-toggle="modal" data-target="#helpCenterModal">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17L4 17.17V4h16v12z"></path>
                <circle cx="8" cy="10" r="1.5"></circle>
                <circle cx="12" cy="10" r="1.5"></circle>
                <circle cx="16" cy="10" r="1.5"></circle>
            </svg>
        </button>
    </div>

    @include('components.help-center-modal')

    <!-- General JS Scripts -->
    <script src="{{ asset('modules/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/popper.js') }}"></script>
    <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('modules/moment.min.js') }}"></script>

    @stack('scripts')
</body>

</html>