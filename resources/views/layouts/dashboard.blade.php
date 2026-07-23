<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>POSYANDU HARAPAN BUNDA | @yield('title', 'Dashboard')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/Posyandu.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('img/Posyandu.png') }}">

    <!-- General CSS (Bootstrap & FontAwesome) -->
    <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">

    <!-- Stisla CSS (for existing sub-pages compatibility) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    <!-- Load Tailwind CSS v3 with plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary": "#ffffff",
                        "on-tertiary-fixed": "#141d23",
                        "on-secondary-fixed-variant": "#00504a",
                        "inverse-on-surface": "#f0f1f2",
                        "on-tertiary-fixed-variant": "#3f484f",
                        "outline": "#847278",
                        "surface-container-high": "#e7e8e9",
                        "on-primary-fixed": "#3d0124",
                        "secondary-fixed": "#8ef4e9",
                        "surface": "#f8f9fa",
                        "surface-bright": "#f8f9fa",
                        "on-tertiary-container": "#3f484f",
                        "tertiary": "#575f67",
                        "surface-container-lowest": "#ffffff",
                        "background": "#f8f9fa",
                        "surface-dim": "#d9dadb",
                        "surface-container-low": "#f3f4f5",
                        "secondary-container": "#8bf1e6",
                        "on-background": "#191c1d",
                        "on-error": "#ffffff",
                        "primary-container": "#f49ac1",
                        "surface-variant": "#e1e3e4",
                        "secondary-fixed-dim": "#71d7cd",
                        "surface-tint": "#904669",
                        "on-primary": "#ffffff",
                        "error": "#ba1a1a",
                        "inverse-primary": "#ffafd0",
                        "primary-fixed": "#ffd8e6",
                        "surface-container-highest": "#e1e3e4",
                        "surface-container": "#edeeef",
                        "on-secondary-container": "#006f67",
                        "on-surface": "#191c1d",
                        "on-primary-fixed-variant": "#732e51",
                        "primary-fixed-dim": "#ffafd0",
                        "on-primary-container": "#732e50",
                        "inverse-surface": "#2e3132",
                        "outline-variant": "#d6c1c8",
                        "tertiary-fixed-dim": "#bfc8d0",
                        "on-tertiary": "#ffffff",
                        "secondary": "#006a63",
                        "primary": "#904669",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed": "#00201d",
                        "on-surface-variant": "#524348",
                        "on-error-container": "#93000a",
                        "tertiary-fixed": "#dbe4ed",
                        "tertiary-container": "#adb6bf"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "xs": "4px",
                        "xl": "80px",
                        "lg": "48px",
                        "sm": "12px",
                        "margin-desktop": "64px",
                        "base": "8px",
                        "margin-mobile": "16px",
                        "md": "24px",
                        "gutter": "24px"
                    },
                    fontFamily: {
                        "display-lg": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "caption": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "fontWeight": "700" }],
                        "caption": ["12px", { "lineHeight": "16px", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9fa;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .custom-shadow {
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.04);
        }

        .glow-shadow {
            box-shadow: 0px 8px 30px rgba(244, 154, 193, 0.15);
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Stisla overrides to stay integrated */
        .dropdown-toggle-custom:after {
            display: none !important;
        }

        /* Sub-pages layout overrides to fit inside the new canvas */
        body.text-on-surface .main-content {
            padding-left: 0 !important;
            padding-right: 0 !important;
            padding-top: 0 !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        body.text-on-surface .section {
            margin-top: 0 !important;
        }

        body.text-on-surface .dropdown-menu {
            border: none;
        }
    </style>

    @stack('styles')
</head>

<body class="text-on-surface bg-background">
    @php
        $fullname = '';
        $profile_url = '#';
        $role_name = '';

        if (Auth::user()) {
            if (Auth::user()->officer_id !== null) {
                $fullname = Auth::user()->officers->fullname ?? Auth::user()->username;
                $profile_url = url('/officer-profile');
                $role_name = Auth::user()->officers->position ?? 'Petugas';
            } elseif (Auth::user()->parent_id !== null) {
                $fullname = Auth::user()->familyParents->mother_fullname ?? Auth::user()->username;
                $profile_url = url('/parent-profile');
                $role_name = 'Orang Tua';
            } else {
                $fullname = Auth::user()->username;
                $profile_url = '#';
                $role_name = ucfirst(Auth::user()->role);
            }
        }
    @endphp

    <!-- Sidebar Navigation -->
    <aside class="h-full w-64 fixed left-0 top-0 overflow-y-auto bg-surface-container-lowest border-r border-outline-variant hide-scrollbar z-50">
        <div class="flex flex-col h-full py-md space-y-xs">
            <!-- Brand Logo -->
            <div class="px-md pb-lg">
                <div class="flex items-center gap-xs">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center p-1 shadow-sm border border-outline-variant/30">
                        <img src="{{ asset('img/Posyandu.png') }}" alt="Logo" class="w-full h-full object-contain" />
                    </div>
                    <div>
                        <h1 class="font-display-lg text-headline-md font-bold text-primary leading-tight">POSYANDU</h1>
                        <p class="font-label-md text-caption text-on-surface-variant uppercase tracking-widest">HARAPAN BUNDA</p>
                    </div>
                </div>
            </div>

            <!-- Nav Groups -->
            <nav class="flex-1 space-y-sm px-2">
                <!-- Group: Menu Utama -->
                <div>
                    <span class="px-4 py-2 font-label-md text-on-surface-variant/60 uppercase text-[10px] tracking-widest">Menu Utama</span>
                    <a class="{{ Request::is('dashboard') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} rounded-lg flex items-center px-4 py-3 mx-2 mt-2 transition-all" href="{{ url('/dashboard') }}">
                        <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('dashboard') ? 1 : 0 }};">dashboard</span>
                        <span class="font-label-md">Dashboard</span>
                    </a>
                </div>

                @if (auth()->check())
                    @php
                        $role = auth()->user()->role;
                        $isAdminOrVillageHead = in_array($role, ['admin', 'village_head']);
                        $isAdminOrMidwifeOrVillageHead = in_array($role, ['admin', 'midwife', 'village_head']);
                        $isAdminOrOfficerOrVillageHead = in_array($role, ['admin', 'officer', 'village_head']);
                    @endphp

                    <!-- Group: Master Data -->
                    <div class="pt-4">
                        <span class="px-4 py-2 font-label-md text-on-surface-variant/60 uppercase text-[10px] tracking-widest">Master Data</span>
                        <div class="space-y-1 mt-2">
                            @if ($role !== 'family_parent')
                                <a class="{{ Request::is('parent-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/parent-data') }}">
                                    <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('parent-data*') ? 1 : 0 }};">group</span>
                                    <span class="font-label-md">Data Orang Tua</span>
                                </a>
                            @endif

                            <a class="{{ Request::is('children-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/children-data') }}">
                                <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('children-data*') ? 1 : 0 }};">child_care</span>
                                <span class="font-label-md">Data Anak</span>
                            </a>

                            @if ($isAdminOrOfficerOrVillageHead)
                                <a class="{{ Request::is('elderly-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/elderly-data') }}">
                                    <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('elderly-data*') ? 1 : 0 }};">elderly</span>
                                    <span class="font-label-md">Data Lansia</span>
                                </a>
                            @endif

                            @if ($isAdminOrVillageHead)
                                <a class="{{ Request::is('admin/officer-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/admin/officer-data') }}">
                                    <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('admin/officer-data*') ? 1 : 0 }};">admin_panel_settings</span>
                                    <span class="font-label-md">Data Admin</span>
                                </a>
                            @endif

                            @if ($isAdminOrOfficerOrVillageHead)
                                <a class="{{ Request::is('officer/officer-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/officer/officer-data') }}">
                                    <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('officer/officer-data*') ? 1 : 0 }};">badge</span>
                                    <span class="font-label-md">Data Petugas</span>
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Group: Layanan -->
                    <div class="pt-4">
                        <span class="px-4 py-2 font-label-md text-on-surface-variant/60 uppercase text-[10px] tracking-widest">Layanan</span>
                        <div class="space-y-1 mt-2">
                            <a class="{{ Request::is('immunization-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/immunization-data') }}">
                                <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('immunization-data*') ? 1 : 0 }};">vaccines</span>
                                <span class="font-label-md">Imunisasi</span>
                            </a>
                            <a class="{{ Request::is('weighing-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/weighing-data') }}">
                                <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('weighing-data*') ? 1 : 0 }};">monitor_weight</span>
                                <span class="font-label-md">Penimbangan</span>
                            </a>
                            <a class="{{ Request::is('pregnancy-check-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/pregnancy-check-data') }}">
                                <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('pregnancy-check-data*') ? 1 : 0 }};">pregnant_woman</span>
                                <span class="font-label-md">Pemeriksaan Ibu Hamil</span>
                            </a>
                            @if ($role !== 'family_parent' && $isAdminOrOfficerOrVillageHead)
                                <a class="{{ Request::is('elderly-check-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/elderly-check-data') }}">
                                    <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('elderly-check-data*') ? 1 : 0 }};">medical_services</span>
                                    <span class="font-label-md">Pemeriksaan Lansia</span>
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Group: Persediaan -->
                    @if ($role !== 'family_parent')
                        @if (Auth::user()->officer_id !== null && (Auth::user()->officers->position !== 'Lurah' && Auth::user()->officers->position !== 'Kepala Lingkungan') || $role === 'admin' || $role === 'midwife')
                            <div class="pt-4">
                                <span class="px-4 py-2 font-label-md text-on-surface-variant/60 uppercase text-[10px] tracking-widest">Persediaan</span>
                                <div class="space-y-1 mt-2">
                                    <a class="{{ Request::is('vaccine-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/vaccine-data') }}">
                                        <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('vaccine-data*') ? 1 : 0 }};">inventory_2</span>
                                        <span class="font-label-md">Vaksin</span>
                                    </a>
                                    <a class="{{ Request::is('medicine-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/medicine-data') }}">
                                        <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('medicine-data*') ? 1 : 0 }};">medical_services</span>
                                        <span class="font-label-md">Obat</span>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endif

                    <!-- Group: Informasi -->
                    <div class="pt-4">
                        <span class="px-4 py-2 font-label-md text-on-surface-variant/60 uppercase text-[10px] tracking-widest">Informasi</span>
                        <div class="space-y-1 mt-2">
                            <a class="{{ Request::is('schedule*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/schedule') }}">
                                <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('schedule*') ? 1 : 0 }};">calendar_month</span>
                                <span class="font-label-md">Jadwal</span>
                            </a>
                            <a class="{{ Request::is('articles*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ route('articles.index') }}">
                                <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('articles*') ? 1 : 0 }};">newspaper</span>
                                <span class="font-label-md">Artikel</span>
                            </a>
                        </div>
                    </div>

                    <!-- Group: Pengaturan -->
                    @if ($role !== 'family_parent')
                        <div class="pt-4">
                            <span class="px-4 py-2 font-label-md text-on-surface-variant/60 uppercase text-[10px] tracking-widest">Pengaturan</span>
                            <div class="space-y-1 mt-2">
                                <a class="{{ Request::is('article-data*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ route('article-data.index') }}">
                                    <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('article-data*') ? 1 : 0 }};">edit</span>
                                    <span class="font-label-md">Manajemen Artikel</span>
                                </a>
                                @if ($role === 'admin')
                                    <a class="{{ Request::is('site-identity*') ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }} flex items-center px-4 py-3 mx-2 transition-all rounded-lg" href="{{ url('/site-identity') }}">
                                        <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' {{ Request::is('site-identity*') ? 1 : 0 }};">settings</span>
                                        <span class="font-label-md">Identitas Situs</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endif
                @endif
            </nav>

            <!-- Sidebar CTA -->
            <div class="px-md pt-lg pb-4">
                <div class="bg-primary/5 rounded-xl p-4 border border-primary/10">
                    <img class="w-full h-24 object-cover rounded-lg mb-3" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaf86g6QWn59rtsXN68vUI0f-96hPkUhHgMePfo0KEnfCQ134LOl9RjrZq3KMBerBTXPhJaLNTwK5LaeKMEZGErZqPIuUGsFwgksO8-8pRmyTHHYAe_Hl01cFdklwW-9rEiEBVvMNo9O6YT5-HZZ0Wy1YCfhA__ElDOFYC37yTuGfi22Quu6skObKs3RliXo9vVPgdG1LyZqkGAjkYKAUZn061gFKvtEY6SPas9yIK4NnCV-BhII24" />
                    <p class="font-label-md text-[13px] text-primary font-bold leading-snug">Kesehatan Keluarga, Kebahagiaan Bersama</p>
                    <p class="font-caption text-on-surface-variant mt-1">Posyandu hadir untuk keluarga yang lebih sehat.</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Canvas -->
    <main class="ml-64 min-h-screen flex flex-col">
        <!-- Top App Bar -->
        <header class="sticky top-0 z-40 bg-white/80 backdrop-blur-md px-md py-sm w-full border-b border-outline-variant/30">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <!-- Brand / Page Title (placeholder search bar style) -->
                <div class="flex items-center flex-1 max-w-xl">
                    <div class="relative w-full">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                        <input class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-outline-variant/40 rounded-full font-body-md focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Cari data, menu, atau informasi..." type="text" />
                    </div>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center gap-md ml-lg">
                    <!-- Notifications -->
                    @if (Auth::user() && Auth::user()->role === 'admin')
                        <div class="relative dropdown">
                            <button id="notif-bell" class="relative w-10 h-10 flex items-center justify-center hover:bg-surface-container-low rounded-full transition-colors dropdown-toggle dropdown-toggle-custom" data-toggle="dropdown">
                                <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                                <span id="notif-badge" class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full hidden"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0 shadow-lg border border-outline-variant/30 rounded-2xl mt-2 overflow-hidden" style="width: 320px;">
                                <div class="px-4 py-3 bg-slate-50 border-b border-outline-variant/30 font-bold text-slate-800 text-sm">
                                    Notifikasi
                                </div>
                                <div id="notif-list-tailwind" class="divide-y divide-outline-variant/20 max-h-80 overflow-y-auto">
                                    <!-- AJAX notifications loaded here -->
                                </div>
                                <div class="p-3 text-center border-t border-outline-variant/30 bg-slate-50">
                                    <a href="{{ url('/parent-data?status=not-active') }}" class="text-xs text-primary font-semibold hover:underline">
                                        Lihat Semua Orang Tua Belum Diverifikasi
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- WhatsApp Group Link -->
                    @if ($site && $site->wa_group_url)
                        <a class="flex items-center gap-2 bg-[#673AB7] text-white px-4 py-2 rounded-lg font-label-md hover:opacity-90 active:scale-95 transition-all text-decoration-none" href="{{ Auth::user() && Auth::user()->role !== 'family_parent' ? ($site->officer_wa_group_url ?? $site->wa_group_url) : $site->wa_group_url }}" target="_blank">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            WhatsApp Grup
                        </a>
                    @endif

                    <div class="h-8 w-[1px] bg-outline-variant"></div>

                    <!-- Profile Dropdown -->
                    <div class="flex items-center gap-sm cursor-pointer group dropdown">
                        <div class="text-right" data-toggle="dropdown">
                            <p class="font-label-md text-on-surface font-bold leading-none mb-1">{{ $fullname }}</p>
                            <p class="font-caption text-on-surface-variant text-[11px] leading-none">{{ $role_name }}</p>
                        </div>
                        <div class="w-10 h-10 rounded-full border-2 border-primary/20 overflow-hidden" data-toggle="dropdown">
                            <img class="w-full h-full object-cover" src="{{ asset('img/avatar/avatar-1.png') }}" />
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant group-hover:translate-y-0.5 transition-transform" data-toggle="dropdown">keyboard_arrow_down</span>

                        <div class="dropdown-menu dropdown-menu-right shadow-lg border border-outline-variant/30 rounded-xl mt-2 p-1">
                            <a href="{{ $profile_url }}" class="dropdown-item flex items-center px-4 py-2 hover:bg-slate-50 rounded-lg text-slate-700 font-medium text-sm text-decoration-none">
                                <i class="far fa-user mr-2 text-primary"></i> Profil
                            </a>
                            <div class="dropdown-divider border-t border-outline-variant/10 my-1"></div>
                            <a href="#" class="dropdown-item flex items-center px-4 py-2 text-red-500 hover:bg-red-50 rounded-lg font-medium text-sm text-decoration-none" onclick="handleLogout(event)">
                                <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content Canvas -->
        <div class="p-md max-w-7xl mx-auto w-full space-y-lg flex-1">
            @yield('main')
        </div>

        <!-- Footer -->
        <footer class="border-t border-outline-variant/30 py-md px-md bg-white mt-auto">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-sm">
                <div class="flex items-center gap-2 font-caption text-on-surface-variant">
                    <span>© {{ date('Y') }} Posyandu Harapan Bunda. {{ $site->village_name ?? 'Desa Lumbir' }}</span>
                    <span class="text-primary mx-1">❤</span>
                    <span>Melayani dengan Sepenuh Hati</span>
                </div>
                <div class="flex gap-lg items-center">
                    <a class="font-caption text-on-surface-variant hover:text-primary transition-colors text-decoration-none" href="#" data-toggle="modal" data-target="#helpCenterModal">Bantuan & FAQ</a>
                    <p class="font-caption text-primary font-bold mb-0">Dibuat oleh TIM TRIPLE N</p>
                </div>
            </div>
        </footer>
    </main>

    @include('components.help-center-modal')

    <!-- General JS Scripts -->
    <script src="{{ asset('modules/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/popper.js') }}"></script>
    <script src="{{ asset('modules/tooltip.js') }}"></script>
    <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('modules/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>

    <!-- General Libraries -->
    <script src="{{ asset('modules/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @stack('scripts')

    <script>
        // Handle logout
        function handleLogout(event) {
            event.preventDefault();
            swal({
                title: 'Konfirmasi Keluar',
                text: 'Apakah Anda ingin mengakhiri sesi ini?',
                icon: 'warning',
                buttons: {
                    cancel: 'Batal',
                    confirm: {
                        text: 'Ya, keluar!',
                        value: true,
                    }
                }
            }).then((result) => {
                if (result) {
                    document.getElementById('logout-form').submit();
                }
            });
        }

        // Handle messages
        document.addEventListener('DOMContentLoaded', function() {
            let title = '';
            let htmlContent = '';
            let icon = '';

            @if (session('success'))
                title = 'Berhasil!';
                htmlContent = `{!! session('success') !!}`;
                icon = 'success';
            @elseif (session('error'))
                title = 'Gagal!';
                htmlContent = `{!! session('error') !!}`;
                icon = 'error';
            @elseif (session('warning'))
                title = 'Peringatan!';
                htmlContent = `{!! session('warning') !!}`;
                icon = 'warning';
            @endif

            if (title && htmlContent && icon) {
                const content = document.createElement('div');
                content.innerHTML = htmlContent;
                swal({
                    title: title,
                    content: content,
                    icon: icon,
                    button: "OK",
                    timer: 5000
                });
            }
        });
    </script>

    @if (Auth::user() && Auth::user()->role === 'admin')
        <script>
            let pollingInterval;

            function updateNotifUI(response) {
                let total = response.count;
                let displayCount = total > 3 ? '3+' : total;

                if (total === 0) {
                    $('#notif-badge').addClass('hidden');
                    $('#notif-list-tailwind').html(`
                        <div class="px-4 py-3 text-center text-sm text-slate-500">
                            Tidak ada notifikasi.
                        </div>
                    `);
                } else {
                    $('#notif-badge').removeClass('hidden');
                    let html = '';
                    response.data.forEach(function(item) {
                        html += `
                        <a href="{{ url('/parent-data?status=not-active') }}" class="block px-4 py-3 hover:bg-slate-50 transition-colors text-decoration-none">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-warning/20 flex items-center justify-center shrink-0">
                                    <i class="fas fa-exclamation-triangle text-warning"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-bold text-slate-800 mb-0">${item.name}</p>
                                    <p class="text-xs text-slate-500 mb-0">${item.time} <span class="bullet"></span> Belum Diverifikasi</p>
                                </div>
                            </div>
                        </a>`;
                    });
                    $('#notif-list-tailwind').html(html);
                }
            }

            function getNotification() {
                $.ajax({
                    url: '{{ route('get.unverified.parents') }}',
                    method: 'GET',
                    success: function(response) {
                        const lastCount = localStorage.getItem('lastNotifCount');

                        // Update only if the count has changed or not yet stored
                        if (lastCount != response.count) {
                            localStorage.setItem('lastNotifCount', response.count);
                            updateNotifUI(response);
                        }
                    },
                    error: function() {
                        console.error('Gagal mengambil notifikasi.');
                    }
                });
            }

            function startPolling() {
                pollingInterval = setInterval(() => {
                    if (!document.hidden) {
                        getNotification();
                    }
                }, 60000); // 60 detik
            }

            document.addEventListener('visibilitychange', function() {
                if (document.hidden) {
                    clearInterval(pollingInterval);
                } else {
                    startPolling();
                }
            });

            $(document).ready(function() {
                getNotification();
                startPolling();
            });
        </script>
    @endif
</body>

</html>
