@extends('layouts.auth')

@section('title', 'Masuk')

@push('styles')
@endpush

@section('main')
    <!-- Welcome Text -->
    <div class="mb-6">
        <p class="text-primary font-medium text-sm">Selamat datang kembali!</p>
        <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mt-1">Masuk ke Akun Anda</h2>
        <p class="text-slate-500 text-sm mt-2">Silakan masukkan username dan kata sandi untuk melanjutkan.</p>
    </div>

    <!-- Form -->
    <form action="{{ route('auth-login') }}" class="space-y-5" method="POST">
        @csrf
        <!-- Username Field -->
        <div class="relative">
            <label class="sr-only" for="username">Nama pengguna</label>
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </div>
            <input class="block w-full pl-11 pr-4 py-4 border @error('username') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-slate-200 focus:ring-primary focus:border-primary @enderror rounded-xl text-slate-800 placeholder-slate-400" id="username" name="username" placeholder="Nama pengguna" required type="text" value="{{ old('username') }}" autofocus />
        </div>
        @error('username')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <!-- Password Field -->
        <div class="relative">
            <label class="sr-only" for="password">Kata sandi</label>
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </div>
            <input class="block w-full pl-11 pr-12 py-4 border @error('password') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-slate-200 focus:ring-primary focus:border-primary @enderror rounded-xl text-slate-800 placeholder-slate-400" id="password" name="password" placeholder="Kata sandi" required type="password" />
            <button class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600" type="button" onclick="togglePasswordVisibility()">
                <svg id="password-toggle-icon" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </button>
        </div>
        @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <!-- Options Row -->
        <div class="flex items-center justify-between text-sm">
            <div class="flex items-center">
                <input class="h-4 w-4 text-primary focus:ring-primary border-slate-300 rounded" id="remember-me" name="remember" type="checkbox" />
                <label class="ml-2 block text-slate-500" for="remember-me">Ingat saya</label>
            </div>
            <a class="font-medium text-primary hover:text-primary-dark" href="#">Lupa kata sandi?</a>
        </div>

        <!-- Submit Button -->
        <button class="w-full flex justify-center items-center py-4 px-4 border border-transparent rounded-xl shadow-lg text-white font-bold bg-primary hover:bg-primary-dark transition-all transform hover:scale-[1.02] active:scale-[0.98]" type="submit">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            </svg>
            Masuk
        </button>
    </form>

    <!-- Registration Link -->
    <div class="mt-8 text-center text-sm">
        <span class="text-slate-500">Belum punya akun? </span>
        <a class="font-bold text-primary hover:text-primary-dark underline underline-offset-4" href="{{ route('register') }}">Registrasi</a>
    </div>
@endsection

@push('scripts')
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('password-toggle-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.innerHTML = `<path d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88L5.636 5.636m12.728 12.728L12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>`;
            } else {
                passwordInput.type = 'password';
                toggleIcon.innerHTML = `<path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>`;
            }
        }
    </script>
@endpush
