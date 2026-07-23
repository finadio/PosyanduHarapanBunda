@extends('layouts.dashboard')

@section('title', 'Dashboard')

@push('styles')
    <style>
        .qr-wrapper {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0 auto;
        }

        .qr-code {
            width: 100%;
            height: 100%;
        }

        .qr-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 36px;
            color: #25D366;
            background: white;
            border-radius: 50%;
            padding: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endpush

@section('main')
    @php
        $fullname = '';
        if (Auth::user()) {
            if (Auth::user()->officer_id !== null) {
                $fullname = Auth::user()->officers->fullname ?? Auth::user()->username;
            } elseif (Auth::user()->parent_id !== null) {
                $fullname = Auth::user()->familyParents->mother_fullname ?? Auth::user()->username;
            } else {
                $fullname = Auth::user()->username;
            }
        }
    @endphp
    <div class="space-y-lg">
        <!-- Welcome Header -->
        <div class="relative overflow-hidden bg-gradient-to-r from-primary-fixed to-white p-lg rounded-3xl custom-shadow border border-white/50">
            <div class="relative z-10">
                <h2 class="font-headline-lg text-primary">Selamat datang kembali, <span class="font-extrabold">{{ $fullname }} 👋</span></h2>
                <p class="font-body-lg text-on-surface-variant mt-1 opacity-80">Semoga hari ini penuh semangat untuk melayani masyarakat.</p>
            </div>
            <!-- Decorative element -->
            <div class="absolute right-0 top-0 h-full w-1/3 opacity-10 pointer-events-none"></div>
        </div>

        @if (Auth::user()?->role === 'family_parent')
            <!-- Parent Welcome and Action Bar -->
            <div class="bg-white p-6 rounded-3xl custom-shadow border border-outline-variant/30 flex flex-wrap justify-between items-center gap-4">
                @php $serverTime = \Carbon\Carbon::now()->timestamp * 1000 @endphp
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-2xl animate-pulse">schedule</span>
                    <h6 class="font-label-md text-on-surface-variant mb-0" id="server-time" data-servertime="{{ $serverTime }}">
                        {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y | HH:mm:ss') }}
                    </h6>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <a href="{{ url('/clear-dashboard-cache') }}" class="w-10 h-10 flex items-center justify-center hover:bg-slate-100 rounded-xl transition-all border border-outline-variant/30" title="Muat ulang data">
                        <span class="material-symbols-outlined text-on-surface-variant text-[18px]">sync</span>
                    </a>
                    <button type="button" class="bg-[#25D366] text-white px-4 py-2 rounded-xl font-label-md hover:opacity-90 active:scale-95 transition-all flex items-center gap-2 border-0" data-toggle="modal" data-target="#whatsappGroupModal">
                        <i class="fab fa-whatsapp"></i> WA Grup
                    </button>
                    <a href="{{ url('/parent-profile') }}" class="bg-primary text-white px-4 py-2 rounded-xl font-label-md hover:opacity-90 active:scale-95 transition-all text-decoration-none flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">person</span> Profil
                    </a>
                    <a href="{{ url('/children-data') }}" class="bg-primary text-white px-4 py-2 rounded-xl font-label-md hover:opacity-90 active:scale-95 transition-all text-decoration-none flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">child_care</span> Data Anak
                    </a>
                </div>
            </div>
        @else
            <!-- Stats Grid for Admin / Midwife / Officer -->
            <div class="grid grid-cols-2 lg:grid-cols-6 gap-md">
                <!-- Card: Orang Tua -->
                <div class="bg-white p-4 rounded-2xl custom-shadow border border-outline-variant/30 hover:border-primary/30 transition-all hover:translate-y-[-4px]">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[20px]" style="font-variation-settings: 'FILL' 1;">group</span>
                        </div>
                        <div>
                            <p class="font-label-md text-[12px] text-on-surface-variant leading-none">Orang Tua</p>
                            <p class="font-headline-md text-on-surface leading-none mt-1 font-bold">{{ $familyParentCount }}</p>
                        </div>
                    </div>
                    <div class="h-8 w-full bg-gradient-to-t from-primary/5 to-transparent rounded-lg flex items-end">
                        <div class="w-full h-[2px] bg-primary/20 relative">
                            <div class="absolute inset-0 bg-primary w-[70%] rounded-full shadow-[0_0_10px_rgba(144,70,105,0.4)]"></div>
                        </div>
                    </div>
                    <p class="font-caption text-[10px] text-on-surface-variant mt-2 text-center">Terdaftar</p>
                </div>

                <!-- Card: Anak-Anak -->
                <div class="bg-white p-4 rounded-2xl custom-shadow border border-outline-variant/30 hover:border-primary/30 transition-all hover:translate-y-[-4px]">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-secondary-container/30 rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-secondary text-[20px]" style="font-variation-settings: 'FILL' 1;">child_care</span>
                        </div>
                        <div>
                            <p class="font-label-md text-[12px] text-on-surface-variant leading-none">Anak-Anak</p>
                            <p class="font-headline-md text-on-surface leading-none mt-1 font-bold">{{ $familyChildrenCount }}</p>
                        </div>
                    </div>
                    <div class="h-8 w-full bg-gradient-to-t from-secondary/5 to-transparent rounded-lg flex items-end">
                        <div class="w-full h-[2px] bg-secondary/20 relative">
                            <div class="absolute inset-0 bg-secondary w-[85%] rounded-full"></div>
                        </div>
                    </div>
                    <p class="font-caption text-[10px] text-on-surface-variant mt-2 text-center">Terdaftar</p>
                </div>

                <!-- Card: Lansia -->
                @if (Auth::user()?->officers?->position !== 'Bidan')
                    <div class="bg-white p-4 rounded-2xl custom-shadow border border-outline-variant/30 hover:border-primary/30 transition-all hover:translate-y-[-4px]">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center">
                                <span class="material-symbols-outlined text-yellow-600 text-[20px]" style="font-variation-settings: 'FILL' 1;">elderly</span>
                            </div>
                            <div>
                                <p class="font-label-md text-[12px] text-on-surface-variant leading-none">Lanjut Usia</p>
                                <p class="font-headline-md text-on-surface leading-none mt-1 font-bold">{{ $elderlyCount }}</p>
                            </div>
                        </div>
                        <div class="h-8 w-full bg-gradient-to-t from-yellow-500/5 to-transparent rounded-lg flex items-end">
                            <div class="w-full h-[2px] bg-yellow-500/20 relative">
                                <div class="absolute inset-0 bg-yellow-500 w-[40%] rounded-full"></div>
                            </div>
                        </div>
                        <p class="font-caption text-[10px] text-on-surface-variant mt-2 text-center">Terdaftar</p>
                    </div>
                @endif

                <!-- Card: Admin -->
                @if (in_array(Auth::user()?->role, ['admin', 'village_head']))
                    <div class="bg-white p-4 rounded-2xl custom-shadow border border-outline-variant/30 hover:border-primary/30 transition-all hover:translate-y-[-4px]">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center">
                                <span class="material-symbols-outlined text-blue-600 text-[20px]" style="font-variation-settings: 'FILL' 1;">admin_panel_settings</span>
                            </div>
                            <div>
                                <p class="font-label-md text-[12px] text-on-surface-variant leading-none">Admin</p>
                                <p class="font-headline-md text-on-surface leading-none mt-1 font-bold">{{ $adminCount }}</p>
                            </div>
                        </div>
                        <div class="h-8 w-full bg-gradient-to-t from-blue-600/5 to-transparent rounded-lg flex items-end">
                            <div class="w-full h-[2px] bg-blue-600/20 relative">
                                <div class="absolute inset-0 bg-blue-600 w-[100%] rounded-full"></div>
                            </div>
                        </div>
                        <p class="font-caption text-[10px] text-on-surface-variant mt-2 text-center">Akun Aktif</p>
                    </div>
                @endif

                <!-- Card: Petugas -->
                @if (in_array(Auth::user()?->role, ['admin', 'village_head', 'officer']) && Auth::user()?->officers?->position !== 'Bidan')
                    <div class="bg-white p-4 rounded-2xl custom-shadow border border-outline-variant/30 hover:border-primary/30 transition-all hover:translate-y-[-4px]">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">
                                <span class="material-symbols-outlined text-green-600 text-[20px]" style="font-variation-settings: 'FILL' 1;">badge</span>
                            </div>
                            <div>
                                <p class="font-label-md text-[12px] text-on-surface-variant leading-none">Petugas</p>
                                <p class="font-headline-md text-on-surface leading-none mt-1 font-bold">{{ $officerCount }}</p>
                            </div>
                        </div>
                        <div class="h-8 w-full bg-gradient-to-t from-green-600/5 to-transparent rounded-lg flex items-end">
                            <div class="w-full h-[2px] bg-green-600/20 relative">
                                <div class="absolute inset-0 bg-green-600 w-[90%] rounded-full"></div>
                            </div>
                        </div>
                        <p class="font-caption text-[10px] text-on-surface-variant mt-2 text-center">Orang Aktif</p>
                    </div>
                @endif

                <!-- Card: Bidan -->
                @if (in_array(Auth::user()?->role, ['admin', 'village_head']) || Auth::user()?->officers?->position === 'Bidan')
                    <div class="bg-white p-4 rounded-2xl custom-shadow border border-outline-variant/30 hover:border-primary/30 transition-all hover:translate-y-[-4px]">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-rose-100 rounded-xl flex items-center justify-center">
                                <span class="material-symbols-outlined text-rose-600 text-[20px]" style="font-variation-settings: 'FILL' 1;">medical_services</span>
                            </div>
                            <div>
                                <p class="font-label-md text-[12px] text-on-surface-variant leading-none">Bidan</p>
                                <p class="font-headline-md text-on-surface leading-none mt-1 font-bold">{{ $midwifeCount }}</p>
                            </div>
                        </div>
                        <div class="h-8 w-full bg-gradient-to-t from-rose-600/5 to-transparent rounded-lg flex items-end">
                            <div class="w-full h-[2px] bg-rose-600/20 relative">
                                <div class="absolute inset-0 bg-rose-600 w-[100%] rounded-full"></div>
                            </div>
                        </div>
                        <p class="font-caption text-[10px] text-on-surface-variant mt-2 text-center">Orang Aktif</p>
                    </div>
                @endif
            </div>
        @endif

        <!-- Main Dashboard Layout Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-lg">
            <!-- Left: Schedule & Reminders -->
            <div class="lg:col-span-4 space-y-md">
                <!-- Schedule Card -->
                @php
                    $nearest = $todaySchedules->first();
                    $hasSchedule = !empty($nearest);
                @endphp
                @if ($hasSchedule)
                    @php
                        $dateObj = \Carbon\Carbon::parse($nearest->event_date);
                        $dayNum = $dateObj->format('d');
                        $monthYear = $dateObj->locale('id')->isoFormat('MMMM YYYY');
                        $dayName = $dateObj->locale('id')->isoFormat('dddd');
                        $startTime = \Carbon\Carbon::parse($nearest->start_time)->format('H.i');
                        $endTime = \Carbon\Carbon::parse($nearest->end_time)->format('H.i');
                        $location = $nearest->event_location;
                        $title = $nearest->title;
                    @endphp
                    <div class="bg-[#5C4291] text-white p-md rounded-3xl glow-shadow relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-md opacity-20 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[64px]">calendar_month</span>
                        </div>
                        <div class="relative z-10">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="font-label-md uppercase tracking-widest text-white/80 text-[11px]">Jadwal Terdekat</h3>
                                <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">event</span>
                                </div>
                            </div>
                            <div class="flex items-baseline gap-2 mb-4">
                                <span class="text-[56px] font-extrabold leading-none">{{ $dayNum }}</span>
                                <div class="flex flex-col">
                                    <span class="font-label-md font-bold text-lg leading-tight">{{ $monthYear }}</span>
                                    <span class="font-caption text-white/70">{{ $dayName }}</span>
                                </div>
                            </div>
                            <div class="font-bold text-md mb-2 truncate" title="{{ $title }}">{{ $title }}</div>
                            <div class="space-y-3 pt-4 border-t border-white/10">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-white/60">schedule</span>
                                    <p class="font-body-md mb-0">{{ $startTime }} - {{ $endTime }} WIB</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-white/60">location_on</span>
                                    <p class="font-body-md truncate mb-0" title="{{ $location }}">{{ $location }}</p>
                                </div>
                            </div>
                            <a href="{{ url('/schedule') }}" class="w-full mt-6 py-3 bg-white/10 hover:bg-white/20 transition-colors rounded-xl border border-white/20 flex items-center justify-center gap-2 font-label-md text-white text-decoration-none">
                                Lihat Detail Jadwal
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="bg-[#5C4291] text-white p-md rounded-3xl glow-shadow relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-md opacity-20 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[64px]">calendar_month</span>
                        </div>
                        <div class="relative z-10">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="font-label-md uppercase tracking-widest text-white/80 text-[11px]">Jadwal Terdekat</h3>
                                <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">event</span>
                                </div>
                            </div>
                            <div class="py-8 text-center">
                                <span class="material-symbols-outlined text-[48px] text-white/50">event_busy</span>
                                <p class="font-body-md text-white/80 mt-2">Tidak ada kegiatan terdekat.</p>
                            </div>
                            <a href="{{ url('/schedule') }}" class="w-full mt-6 py-3 bg-white/10 hover:bg-white/20 transition-colors rounded-xl border border-white/20 flex items-center justify-center gap-2 font-label-md text-white text-decoration-none">
                                Lihat Detail Jadwal
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                @endif

                <!-- Quick Reminders -->
                <div class="bg-white p-md rounded-3xl custom-shadow border border-outline-variant/30">
                    <div class="flex items-center justify-between mb-md">
                        <h3 class="font-headline-md text-on-surface font-semibold text-lg">Pengingat Cepat</h3>
                        <div class="relative">
                            <span class="material-symbols-outlined text-primary animate-bounce">notifications_active</span>
                        </div>
                    </div>
                    <div class="space-y-sm">
                        @php
                            $unverifiedCount = 0;
                            if (Auth::user()?->role === 'admin') {
                                $unverifiedCount = \App\Models\FamilyParent::whereHas('users', function ($query) {
                                    $query->where('role', 'family_parent')->whereNull('verified_at');
                                })->count();
                            }
                            $lowStockVaccines = \App\Models\Vaccine::where('stock', '<', 10)->get();
                        @endphp

                        @if ($unverifiedCount > 0)
                            <a href="{{ url('/parent-data?status=not-active') }}" class="flex gap-4 p-3 bg-error-container/20 rounded-2xl border border-error/10 hover:bg-error-container/30 transition-all text-decoration-none">
                                <div class="w-10 h-10 bg-error/10 rounded-full flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-error" style="font-variation-settings: 'FILL' 1;">warning</span>
                                </div>
                                <div>
                                    <p class="font-label-md text-on-surface font-bold text-xs mb-0">Verifikasi Akun Orang Tua</p>
                                    <p class="font-caption text-on-surface-variant text-[11px] mb-0">{{ $unverifiedCount }} akun menanti verifikasi.</p>
                                </div>
                            </a>
                        @endif

                        @if ($lowStockVaccines->count() > 0)
                            @foreach ($lowStockVaccines->take(2) as $vaccine)
                                <div class="flex gap-4 p-3 bg-primary-container/10 rounded-2xl border border-primary/10">
                                    <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">inventory_2</span>
                                    </div>
                                    <div>
                                        <p class="font-label-md text-on-surface font-bold text-xs mb-0">Stok Vaksin Menipis</p>
                                        <p class="font-caption text-on-surface-variant text-[11px] mb-0">Vaksin {{ $vaccine->vaccine_name }} sisa {{ $vaccine->stock }} {{ $vaccine->unit }}.</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if ($unverifiedCount == 0 && $lowStockVaccines->count() == 0)
                            <div class="py-6 text-center">
                                <span class="material-symbols-outlined text-[36px] text-slate-300">verified</span>
                                <p class="font-body-md text-slate-500 mt-2 mb-0">Semua aman terkendali!</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Middle: Charts Widget -->
            <div class="lg:col-span-5 flex flex-col">
                <div class="bg-white p-md rounded-3xl custom-shadow border border-outline-variant/30 flex-1 flex flex-col">
                    <div class="flex flex-wrap items-center justify-between gap-2 mb-lg">
                        <h3 class="font-headline-md text-on-surface font-semibold text-lg">Grafik Pemantauan</h3>
                        
                        <!-- Tab Headers -->
                        <div class="flex gap-1 bg-slate-50 p-1 rounded-xl border border-outline-variant/20 overflow-x-auto hide-scrollbar">
                            @if (Auth::user()?->role === 'family_parent')
                                <button class="chart-tab-btn active px-3 py-1.5 rounded-lg font-label-md text-xs transition-all whitespace-nowrap bg-white shadow-sm font-semibold text-primary" data-target="parent-pregnancy-tab">
                                    Ibu Hamil
                                </button>
                                @foreach ($children as $child)
                                    <button class="chart-tab-btn px-3 py-1.5 rounded-lg font-label-md text-xs transition-all whitespace-nowrap text-on-surface-variant hover:text-on-surface" data-target="child-nutrition-tab-{{ $child->id }}">
                                        Gizi: {{ explode(' ', trim($child->fullname))[0] }}
                                    </button>
                                @endforeach
                            @else
                                <button class="chart-tab-btn active px-3 py-1.5 rounded-lg font-label-md text-xs transition-all whitespace-nowrap bg-white shadow-sm font-semibold text-primary" data-target="nutrition-tab">
                                    Status Gizi
                                </button>
                                <button class="chart-tab-btn px-3 py-1.5 rounded-lg font-label-md text-xs transition-all whitespace-nowrap text-on-surface-variant hover:text-on-surface" data-target="immunization-tab">
                                    Imunisasi
                                </button>
                                <button class="chart-tab-btn px-3 py-1.5 rounded-lg font-label-md text-xs transition-all whitespace-nowrap text-on-surface-variant hover:text-on-surface" data-target="weighing-tab">
                                    Penimbangan
                                </button>
                                <button class="chart-tab-btn px-3 py-1.5 rounded-lg font-label-md text-xs transition-all whitespace-nowrap text-on-surface-variant hover:text-on-surface" data-target="pregnancy-tab">
                                    Ibu Hamil
                                </button>
                                @if (Auth::user()?->officers?->position !== 'Bidan')
                                    <button class="chart-tab-btn px-3 py-1.5 rounded-lg font-label-md text-xs transition-all whitespace-nowrap text-on-surface-variant hover:text-on-surface" data-target="elderly-tab">
                                        Lansia
                                    </button>
                                @endif
                            @endif
                        </div>
                    </div>

                    <!-- Tab Contents -->
                    <div class="flex-1 flex flex-col justify-between">
                        @if (Auth::user()?->role === 'family_parent')
                            <!-- Pregnancy Check Tab -->
                            <div id="parent-pregnancy-tab" class="chart-tab-content block">
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-xs font-bold text-slate-800">Tahun Pemeriksaan</span>
                                    <select id="pregnancyCheckYear" class="bg-slate-50 border border-outline-variant/30 rounded-xl font-label-md text-xs px-3 py-1.5 text-on-surface-variant focus:ring-primary/20">
                                        @foreach ($availablePregnancyCheckYears as $year)
                                            <option value="{{ $year }}" {{ $year == $selectedPregnancyCheckYear ? 'selected' : '' }}>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="relative min-h-[260px]">
                                    <canvas id="pregnancyCheckChart" height="260"></canvas>
                                </div>
                                <div class="mt-4 p-3 bg-fuchsia-50 rounded-2xl border border-fuchsia-100 flex justify-between items-center">
                                    <span class="text-xs text-fuchsia-700 font-semibold">Total Pemeriksaan Tahun Ini</span>
                                    <span id="number_of_pregnancy_check" class="text-lg font-bold text-fuchsia-700">0</span>
                                </div>
                            </div>

                            <!-- Children Nutrition Tabs -->
                            @foreach ($children as $child)
                                <div id="child-nutrition-tab-{{ $child->id }}" class="chart-tab-content hidden">
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="text-xs font-bold text-slate-800">Tahun Penimbangan</span>
                                        <select id="weighingYear{{ $child->id }}" class="bg-slate-50 border border-outline-variant/30 rounded-xl font-label-md text-xs px-3 py-1.5 text-on-surface-variant focus:ring-primary/20">
                                            @foreach ($availableWeighingYears as $year)
                                                <option value="{{ $year }}" {{ $year == $selectedWeighingYear ? 'selected' : '' }}>{{ $year }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="relative min-h-[260px]">
                                        <canvas id="nutritionStatusChart{{ $child->id }}" class="nutrition-chart-canvas" height="260"></canvas>
                                    </div>
                                    <div class="mt-4 p-3 rounded-2xl flex justify-between items-center" id="badge_style{{ $child->id }}">
                                        <span class="text-xs font-semibold text-white">Nama Anak</span>
                                        <span id="children_fullname{{ $child->id }}" class="text-sm font-bold text-white"></span>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <!-- Admin / Officer Tabs -->
                            <!-- Nutrition Status -->
                            <div id="nutrition-tab" class="chart-tab-content block">
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-xs font-bold text-slate-800">Tahun Statistik</span>
                                    <select id="nutritionStatusYear" class="bg-slate-50 border border-outline-variant/30 rounded-xl font-label-md text-xs px-3 py-1.5 text-on-surface-variant focus:ring-primary/20">
                                        @foreach ($availableNutritionStatusYears as $year)
                                            <option value="{{ $year }}" {{ $year == $selectedNutritionStatusYear ? 'selected' : '' }}>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="relative min-h-[260px]">
                                    <canvas id="nutritionStatusChart" height="260"></canvas>
                                </div>
                                <div class="grid grid-cols-4 gap-2 mt-4 pt-4 border-t border-outline-variant/20">
                                    <div class="text-center p-2 bg-emerald-50 rounded-xl">
                                        <p class="text-[10px] text-emerald-600 font-semibold mb-0">Baik</p>
                                        <p class="text-sm font-bold text-emerald-700 mt-1 mb-0" id="total_good">0</p>
                                        <p class="text-[9px] text-emerald-500 font-semibold" id="percentage_good">0%</p>
                                    </div>
                                    <div class="text-center p-2 bg-red-50 rounded-xl">
                                        <p class="text-[10px] text-red-600 font-semibold mb-0">Buruk</p>
                                        <p class="text-sm font-bold text-red-700 mt-1 mb-0" id="total_poor">0</p>
                                        <p class="text-[9px] text-red-500 font-semibold" id="percentage_poor">0%</p>
                                    </div>
                                    <div class="text-center p-2 bg-amber-50 rounded-xl">
                                        <p class="text-[10px] text-amber-600 font-semibold mb-0">Kurang</p>
                                        <p class="text-sm font-bold text-amber-700 mt-1 mb-0" id="total_lack">0</p>
                                        <p class="text-[9px] text-amber-500 font-semibold" id="percentage_lack">0%</p>
                                    </div>
                                    <div class="text-center p-2 bg-blue-50 rounded-xl">
                                        <p class="text-[10px] text-blue-600 font-semibold mb-0">Lebih</p>
                                        <p class="text-sm font-bold text-blue-700 mt-1 mb-0" id="total_excess">0</p>
                                        <p class="text-[9px] text-blue-500 font-semibold" id="percentage_excess">0%</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Immunization -->
                            <div id="immunization-tab" class="chart-tab-content hidden">
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-xs font-bold text-slate-800">Tahun Statistik</span>
                                    <select id="immunizationYear" class="bg-slate-50 border border-outline-variant/30 rounded-xl font-label-md text-xs px-3 py-1.5 text-on-surface-variant focus:ring-primary/20">
                                        @foreach ($availableImmunizationYears as $year)
                                            <option value="{{ $year }}" {{ $year == $selectedImmunizationYear ? 'selected' : '' }}>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="relative min-h-[260px]">
                                    <canvas id="immunizationChart" height="260"></canvas>
                                </div>
                                <div class="mt-4 p-3 bg-red-50 rounded-2xl border border-red-100 flex justify-between items-center">
                                    <span class="text-xs text-red-700 font-semibold">Total Anak Diimunisasi</span>
                                    <span id="number_of_child_immunization" class="text-lg font-bold text-red-700">0</span>
                                </div>
                            </div>

                            <!-- Weighing -->
                            <div id="weighing-tab" class="chart-tab-content hidden">
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-xs font-bold text-slate-800">Tahun Statistik</span>
                                    <select id="weighingYear" class="bg-slate-50 border border-outline-variant/30 rounded-xl font-label-md text-xs px-3 py-1.5 text-on-surface-variant focus:ring-primary/20">
                                        @foreach ($availableWeighingYears as $year)
                                            <option value="{{ $year }}" {{ $year == $selectedWeighingYear ? 'selected' : '' }}>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="relative min-h-[260px]">
                                    <canvas id="weighingChart" height="260"></canvas>
                                </div>
                                <div class="mt-4 p-3 bg-pink-50 rounded-2xl border border-pink-100 flex justify-between items-center">
                                    <span class="text-xs text-pink-700 font-semibold">Total Anak Ditimbang</span>
                                    <span id="number_of_child_weighing" class="text-lg font-bold text-pink-700">0</span>
                                </div>
                            </div>

                            <!-- Pregnancy Check -->
                            <div id="pregnancy-tab" class="chart-tab-content hidden">
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-xs font-bold text-slate-800">Tahun Statistik</span>
                                    <select id="pregnancyCheckYear" class="bg-slate-50 border border-outline-variant/30 rounded-xl font-label-md text-xs px-3 py-1.5 text-on-surface-variant focus:ring-primary/20">
                                        @foreach ($availablePregnancyCheckYears as $year)
                                            <option value="{{ $year }}" {{ $year == $selectedPregnancyCheckYear ? 'selected' : '' }}>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="relative min-h-[260px]">
                                    <canvas id="pregnancyCheckChart" height="260"></canvas>
                                </div>
                                <div class="mt-4 p-3 bg-fuchsia-50 rounded-2xl border border-fuchsia-100 flex justify-between items-center">
                                    <span class="text-xs text-fuchsia-700 font-semibold">Total Pemeriksaan Ibu Hamil</span>
                                    <span id="number_of_pregnancy_check" class="text-lg font-bold text-fuchsia-700">0</span>
                                </div>
                            </div>

                            <!-- Elderly Check -->
                            @if (Auth::user()?->officers?->position !== 'Bidan')
                                <div id="elderly-tab" class="chart-tab-content hidden">
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="text-xs font-bold text-slate-800">Tahun Statistik</span>
                                        <select id="elderlyCheckYear" class="bg-slate-50 border border-outline-variant/30 rounded-xl font-label-md text-xs px-3 py-1.5 text-on-surface-variant focus:ring-primary/20">
                                            @foreach ($availableElderlyCheckYears as $year)
                                                <option value="{{ $year }}" {{ $year == $selectedElderlyCheckYear ? 'selected' : '' }}>{{ $year }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="relative min-h-[260px]">
                                        <canvas id="elderlyCheckChart" height="260"></canvas>
                                    </div>
                                    <div class="mt-4 p-3 bg-orange-50 rounded-2xl border border-orange-100 flex justify-between items-center">
                                        <span class="text-xs text-orange-700 font-semibold">Total Pemeriksaan Lansia</span>
                                        <span id="number_of_elderly_check" class="text-lg font-bold text-orange-700">0</span>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>

            <!-- Right: Latest Information Feed -->
            <div class="lg:col-span-3">
                <div class="bg-white p-md rounded-3xl custom-shadow border border-outline-variant/30 h-full flex flex-col">
                    <div class="flex items-center justify-between mb-md">
                        <h3 class="font-headline-md text-on-surface font-semibold text-lg">Informasi Terbaru</h3>
                        <a href="{{ route('articles.index') }}" class="w-8 h-8 rounded-full bg-slate-50 hover:bg-slate-100 flex items-center justify-center transition-colors text-decoration-none">
                            <span class="material-symbols-outlined text-[18px] text-slate-600">more_vert</span>
                        </a>
                    </div>
                    <div class="space-y-6 flex-1">
                        @php
                            $latestArticles = \App\Models\Article::published()->orderBy('created_at', 'desc')->take(3)->get();
                        @endphp

                        @forelse ($latestArticles as $article)
                            <div class="relative pl-6 border-l-2 border-primary-container">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary-container border-2 border-white"></div>
                                <div class="flex justify-between items-start mb-1 gap-2">
                                    <a href="{{ route('articles.show', $article->id) }}" class="font-label-md font-bold text-on-surface hover:text-primary leading-tight text-decoration-none truncate block max-w-[130px] text-xs">{{ $article->title }}</a>
                                    <span class="font-caption text-[10px] text-on-surface-variant whitespace-nowrap">{{ \Carbon\Carbon::parse($article->created_at)->locale('id')->isoFormat('D MMM Y') }}</span>
                                </div>
                                <p class="font-caption text-on-surface-variant line-clamp-2 mb-0 text-[11px] leading-relaxed">{{ strip_tags($article->content) }}</p>
                                <div class="mt-2 flex items-center gap-2">
                                    <div class="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary text-[11px]">campaign</span>
                                    </div>
                                    <span class="font-caption text-[10px] text-primary">Penulis: {{ $article->author ?? 'Admin' }}</span>
                                </div>
                            </div>
                        @empty
                            <div class="py-8 text-center text-slate-500">
                                <span class="material-symbols-outlined text-[36px] text-slate-300">newspaper</span>
                                <p class="font-body-md mt-2 mb-0 text-xs">Belum ada pengumuman terbaru.</p>
                            </div>
                        @endforelse
                    </div>
                    <a class="mt-lg py-3 px-4 bg-primary-container/20 text-primary font-label-md rounded-xl hover:bg-primary-container/30 transition-all flex items-center justify-center gap-2 text-decoration-none" href="{{ route('articles.index') }}">
                        Lihat Semua Informasi
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal WA Grup -->
    <div class="modal fade" id="whatsappGroupModal" tabindex="-1" role="dialog" aria-labelledby="whatsappGroupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="d-flex justify-content-between align-items-center" style="gap: .5rem">
                        <h5 class="modal-title font-bold text-slate-800 text-lg" id="whatsappGroupModalLabel">WhatsApp Grup</h5>
                        <button type="button" class="px-2 py-1 close text-slate-500 hover:text-slate-800" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-xl">&times;</span>
                        </button>
                    </div>

                    <hr class="my-3 border-slate-100">

                    <p class="text-lead text-center text-slate-600 text-sm mb-4">Silakan pindai kode QR atau klik tautan di bawah ini:</p>

                    <div class="row justify-content-center align-items-center g-4">
                        @if (Auth::user()?->role !== 'family_parent')
                            <div class="col-md-6">
                                <div class="p-3 rounded-2xl border border-outline-variant/30 bg-slate-50">
                                    <h6 class="text-center font-bold text-xs text-slate-700 mb-3">Khusus Petugas</h6>

                                    <div class="p-2 my-2 text-center">
                                        <div class="qr-wrapper" data-qr-id="officer_qr">
                                            <div class="qr-code" data-url="{{ $site->officer_wa_group_url }}"></div>
                                            <i class="fab fa-whatsapp qr-icon"></i>
                                        </div>
                                    </div>

                                    <div class="text-center qr-link mt-3">
                                        <a href="{{ $site->officer_wa_group_url }}" target="_blank" class="text-xs text-primary font-semibold hover:underline block truncate">{{ $site->officer_wa_group_url }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-md-6">
                            <div class="p-3 rounded-2xl border border-outline-variant/30 bg-slate-50">
                                <h6 class="text-center font-bold text-xs text-slate-700 mb-3">Umum</h6>

                                <div class="p-2 my-2 text-center">
                                    <div class="qr-wrapper" data-qr-id="user_qr">
                                        <div class="qr-code" data-url="{{ $site->wa_group_url }}"></div>
                                        <i class="fab fa-whatsapp qr-icon"></i>
                                    </div>
                                </div>

                                <div class="text-center qr-link mt-3">
                                    <a href="{{ $site->wa_group_url }}" target="_blank" class="text-xs text-primary font-semibold hover:underline block truncate">{{ $site->wa_group_url }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('modules/chart.min.js') }}"></script>

    <!-- QR Code Generator -->
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>
    <script>
        function generateAllQRCodes() {
            const qrWrappers = document.querySelectorAll('.qr-code');

            qrWrappers.forEach(wrapper => {
                const url = wrapper.getAttribute('data-url');
                wrapper.innerHTML = ""; 

                if (url) {
                    new QRCode(wrapper, {
                        text: url,
                        width: 180,
                        height: 180,
                        colorDark: "#000000",
                        colorLight: "#ffffff",
                        correctLevel: QRCode.CorrectLevel.H
                    });
                }
            });
        }

        $('#whatsappGroupModal').on('shown.bs.modal', function() {
            generateAllQRCodes();
        });

        $('#whatsappGroupModal').on('hidden.bs.modal', function() {
            document.querySelectorAll('.qr-code').forEach(wrapper => {
                wrapper.innerHTML = '';
            });
        });
    </script>

    <!-- Chart Tab Switching Script -->
    <script>
        $(document).ready(function() {
            $('.chart-tab-btn').on('click', function() {
                const target = $(this).data('target');
                
                $('.chart-tab-btn').removeClass('active bg-white shadow-sm font-semibold text-primary').addClass('text-on-surface-variant hover:text-on-surface');
                $(this).addClass('active bg-white shadow-sm font-semibold text-primary').removeClass('text-on-surface-variant hover:text-on-surface');
                
                $('.chart-tab-content').addClass('hidden').removeClass('block');
                
                $('#' + target).removeClass('hidden').addClass('block');
            });
        });
    </script>

    @if (Auth::user()?->role === 'family_parent')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const timeEl = document.getElementById("server-time");
                if (timeEl) {
                    const serverTimestamp = parseInt(timeEl.getAttribute("data-servertime"));
                    const clientTimestamp = new Date().getTime();
                    const timeDiff = serverTimestamp - clientTimestamp;

                    function updateTime() {
                        const now = new Date(new Date().getTime() + timeDiff);
                        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

                        const day = days[now.getDay()];
                        const date = now.getDate();
                        const month = months[now.getMonth()];
                        const year = now.getFullYear();

                        const hours = String(now.getHours()).padStart(2, '0');
                        const minutes = String(now.getMinutes()).padStart(2, '0');
                        const seconds = String(now.getSeconds()).padStart(2, '0');

                        const formatted = `${day}, ${date} ${month} ${year} | ${hours}:${minutes}:${seconds}`;
                        timeEl.textContent = formatted;
                    }

                    updateTime();
                    setInterval(updateTime, 1000);
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                function initChart({
                    selectId,
                    canvasId,
                    endpointUrl,
                    totalElementId,
                    chartLabel,
                    backgroundColor,
                    borderColor,
                    pointBorderColor
                }) {
                    const selectElem = $(`#${selectId}`);
                    const canvas = document.getElementById(canvasId);
                    if (!canvas) return;
                    const ctx = canvas.getContext("2d");

                    const monthLabels = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

                    const chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: monthLabels,
                            datasets: [{
                                label: chartLabel,
                                data: [],
                                borderWidth: 3,
                                borderColor: borderColor,
                                backgroundColor: backgroundColor,
                                pointBackgroundColor: '#fff',
                                pointBorderColor: pointBorderColor,
                                pointRadius: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            legend: { display: false },
                            scales: {
                                yAxes: [{ ticks: { beginAtZero: true, precision: 0, stepSize: 1, min: 0 } }],
                                xAxes: [{ gridLines: { display: false } }]
                            }
                        }
                    });

                    function fetchData(year) {
                        fetch(`${endpointUrl}/${year}`)
                            .then(response => response.json())
                            .then(data => {
                                chart.data.datasets[0].data = [...data.data];
                                chart.update();
                                const totalElem = document.getElementById(totalElementId);
                                if (totalElem) {
                                    totalElem.innerText = data.total || "0";
                                }
                            })
                            .catch(error => { console.error("Gagal memuat data:", error); });
                    }

                    const initialYear = selectElem.val();
                    fetchData(initialYear);

                    selectElem.on('change', function() {
                        const selectedYear = $(this).val();
                        fetchData(selectedYear);
                    });
                }

                initChart({
                    selectId: 'pregnancyCheckYear',
                    canvasId: 'pregnancyCheckChart',
                    endpointUrl: "{{ url('/pregnancy-check-data/ajax') }}",
                    totalElementId: 'number_of_pregnancy_check',
                    chartLabel: 'Jumlah Pemeriksaan',
                    borderColor: 'fuchsia',
                    backgroundColor: 'rgba(255, 0, 255, 0.1)',
                    pointBorderColor: 'fuchsia'
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                const nutritionStatusMap = { 'Buruk': 0, 'Kurang': 1, 'Baik': 2, 'Lebih': 3 };

                function getColorFromId(id) {
                    const colors = ['#e74c3c', '#3498db', '#2ecc71', '#9b59b6', '#f39c12', '#1abc9c', '#34495e'];
                    return colors[id % colors.length];
                }

                $('.nutrition-chart-canvas').each(function() {
                    const canvasId = $(this).attr('id');
                    const childrenId = canvasId.replace('nutritionStatusChart', '');
                    const selectId = 'weighingYear' + childrenId;
                    const randomColor = getColorFromId(parseInt(childrenId));
                    const badge = $(`#badge_style${childrenId}`);
                    badge.css({ 'background-color': randomColor, 'color': '#fff', 'font-weight': '600' });

                    initNutritionStatusChart({
                        selectId: selectId,
                        canvasId: canvasId,
                        endpointUrl: "{{ url('/children-nutrition-status/ajax') }}",
                        borderColor: randomColor,
                        backgroundColor: hexToRGBA(randomColor, 0.1),
                        pointBorderColor: randomColor,
                        childrenId: childrenId
                    });
                });

                function initNutritionStatusChart({ selectId, canvasId, endpointUrl, backgroundColor, borderColor, pointBorderColor, childrenId }) {
                    const selectElem = $(`#${selectId}`);
                    const canvas = document.getElementById(canvasId);
                    if (!canvas) return;
                    const ctx = canvas.getContext("2d");

                    const chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: [],
                            datasets: [{
                                label: 'Status Gizi',
                                data: [],
                                borderWidth: 3,
                                borderColor: borderColor,
                                backgroundColor: backgroundColor,
                                pointBackgroundColor: '#fff',
                                pointBorderColor: pointBorderColor,
                                pointRadius: 5,
                                fill: false,
                                tension: 0.3
                            }]
                        },
                        options: {
                            responsive: true,
                            legend: { display: false },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        const point = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                        return [`Status Gizi: ${point.status}`, `Usia: ${point.age}`];
                                    }
                                }
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true, stepSize: 1, min: 0, max: 3,
                                        callback: function(value) {
                                            const labels = ['Buruk', 'Kurang', 'Baik', 'Lebih'];
                                            return labels[value] !== undefined ? labels[value] : value;
                                        }
                                    }
                                }]
                            }
                        }
                    });

                    function fetchData(year = null) {
                        fetch(`${endpointUrl}/${year}`)
                            .then(response => response.json())
                            .then(data => {
                                const filtered = data.data.filter(item => item.children_id == childrenId);
                                filtered.sort((a, b) => new Date(a.weighing_date) - new Date(b.weighing_date));
                                const chartData = filtered.map(item => {
                                    const date = new Date(item.weighing_date);
                                    const formattedDate = formatIndonesianDate(date);
                                    const yVal = nutritionStatusMap[item.nutrition_status];
                                    const fullnameElem = document.getElementById(`children_fullname${childrenId}`);
                                    if (fullnameElem) fullnameElem.innerText = item.fullname;
                                    return { x: formattedDate, y: yVal, status: item.nutrition_status, age: item.age_in_checks };
                                });
                                chart.data.labels = chartData.map(d => d.x);
                                chart.data.datasets[0].data = chartData;
                                chart.update();
                            })
                            .catch(error => { console.error("Gagal memuat data:", error); });
                    }

                    fetchData(selectElem.val());
                    selectElem.on('change', function() { fetchData($(this).val()); });
                }

                function hexToRGBA(hex, alpha) {
                    const r = parseInt(hex.slice(1, 3), 16), g = parseInt(hex.slice(3, 5), 16), b = parseInt(hex.slice(5, 7), 16);
                    return `rgba(${r}, ${g}, ${b}, ${alpha})`;
                }

                function formatIndonesianDate(date) {
                    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                    return `${date.getDate()} ${monthNames[date.getMonth()]} ${date.getFullYear()}`;
                }
            });
        </script>
    @else
        <script>
            $(document).ready(function() {
                function initChart({ selectId, canvasId, endpointUrl, totalElementId, chartLabel, backgroundColor, borderColor, pointBorderColor }) {
                    const selectElem = $(`#${selectId}`);
                    const canvas = document.getElementById(canvasId);
                    if (!canvas) return;
                    const ctx = canvas.getContext("2d");

                    const chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                            datasets: [{ label: chartLabel, data: [], borderWidth: 3, borderColor: borderColor, backgroundColor: backgroundColor, pointBackgroundColor: '#fff', pointBorderColor: pointBorderColor, pointRadius: 4 }]
                        },
                        options: {
                            responsive: true,
                            legend: { display: false },
                            scales: {
                                yAxes: [{ ticks: { beginAtZero: true, precision: 0, stepSize: 1, min: 0 } }]
                            }
                        }
                    });

                    function fetchData(year) {
                        fetch(`${endpointUrl}/${year}`)
                            .then(response => response.json())
                            .then(data => {
                                chart.data.datasets[0].data = [...data.data];
                                chart.update();
                                const totalElem = document.getElementById(totalElementId);
                                if (totalElem) totalElem.innerText = data.total || "N/A";
                            })
                            .catch(error => { console.error("Gagal memuat data:", error); });
                    }

                    fetchData(selectElem.val());
                    selectElem.on('change', function() { fetchData($(this).val()); });
                }

                function initBarChartMultipleDatasets({ selectId, canvasId, endpointUrl }) {
                    const selectElem = $(`#${selectId}`);
                    const canvas = document.getElementById(canvasId);
                    if (!canvas) return;
                    const ctx = canvas.getContext("2d");

                    const statusLabels = ["Baik", "Buruk", "Kurang", "Lebih"];
                    const colors = { Baik: "rgba(16, 185, 129, 0.6)", Buruk: "rgba(239, 68, 68, 0.6)", Kurang: "rgba(245, 158, 11, 0.6)", Lebih: "rgba(59, 130, 246, 0.6)" };

                    const chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                            datasets: statusLabels.map(label => ({ label: label, data: [], backgroundColor: colors[label] }))
                        },
                        options: {
                            responsive: true,
                            legend: { display: true, position: 'top' },
                            scales: { yAxes: [{ ticks: { beginAtZero: true, stepSize: 1, precision: 0 } }] }
                        }
                    });

                    function calculatePercentage(count, total) {
                        if (total === 0) return "0%";
                        const percentage = (count / total) * 100;
                        return percentage % 1 === 0 ? `${percentage.toFixed(0)}%` : `${percentage.toFixed(1)}%`;
                    }

                    function fetchData(year) {
                        fetch(`${endpointUrl}/${year}`)
                            .then(response => response.json())
                            .then(data => {
                                statusLabels.forEach((status, i) => {
                                    chart.data.datasets[i].data = [];
                                    for (let month = 1; month <= 12; month++) {
                                        chart.data.datasets[i].data.push(parseInt(data.data[month][status]) || 0);
                                    }
                                });
                                chart.update();
                                const totalGood = data.total?.Baik ?? 0, totalPoor = data.total?.Buruk ?? 0, totalLack = data.total?.Kurang ?? 0, totalExcess = data.total?.Lebih ?? 0;
                                const totalChildren = totalGood + totalPoor + totalLack + totalExcess;
                                document.getElementById("total_good").innerText = totalGood;
                                document.getElementById("total_poor").innerText = totalPoor;
                                document.getElementById("total_lack").innerText = totalLack;
                                document.getElementById("total_excess").innerText = totalExcess;
                                document.getElementById("percentage_good").innerText = calculatePercentage(totalGood, totalChildren);
                                document.getElementById("percentage_poor").innerText = calculatePercentage(totalPoor, totalChildren);
                                document.getElementById("percentage_lack").innerText = calculatePercentage(totalLack, totalChildren);
                                document.getElementById("percentage_excess").innerText = calculatePercentage(totalExcess, totalChildren);
                            })
                            .catch(error => { console.error("Gagal memuat data:", error); });
                    }

                    fetchData(selectElem.val());
                    selectElem.on('change', function() { fetchData($(this).val()); });
                }

                initBarChartMultipleDatasets({ selectId: 'nutritionStatusYear', canvasId: 'nutritionStatusChart', endpointUrl: "{{ url('/nutrition-status/ajax') }}" });
                initChart({ selectId: 'immunizationYear', canvasId: 'immunizationChart', endpointUrl: "{{ url('/immunization-data/ajax') }}", totalElementId: 'number_of_child_immunization', chartLabel: 'Jumlah Anak', borderColor: 'tomato', backgroundColor: 'rgba(255, 99, 71, 0.1)', pointBorderColor: 'tomato' });
                initChart({ selectId: 'weighingYear', canvasId: 'weighingChart', endpointUrl: "{{ url('/weighing-data/ajax') }}", totalElementId: 'number_of_child_weighing', chartLabel: 'Jumlah Anak', borderColor: 'rgb(250, 156, 204)', backgroundColor: 'rgba(250, 156, 204, 0.1)', pointBorderColor: 'rgb(250, 156, 204)' });
                initChart({ selectId: 'pregnancyCheckYear', canvasId: 'pregnancyCheckChart', endpointUrl: "{{ url('/pregnancy-check-data/ajax') }}", totalElementId: 'number_of_pregnancy_check', chartLabel: 'Jumlah Ibu Hamil', borderColor: 'fuchsia', backgroundColor: 'rgba(255, 0, 255, 0.1)', pointBorderColor: 'fuchsia' });
                initChart({ selectId: 'elderlyCheckYear', canvasId: 'elderlyCheckChart', endpointUrl: "{{ url('/elderly-check-data/ajax') }}", totalElementId: 'number_of_elderly_check', chartLabel: 'Jumlah Lansia', borderColor: 'darksalmon', backgroundColor: 'rgba(233, 150, 122, 0.1)', pointBorderColor: 'darksalmon' });
            });
        </script>
    @endif
@endpush
