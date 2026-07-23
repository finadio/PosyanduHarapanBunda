@extends('layouts.auth')

@section('title', 'Registrasi')

@push('styles')
@endpush

@section('main')
    <!-- Welcome Text -->
    <div class="mb-6">
        <p class="text-primary font-medium text-sm">Registrasi Akun Baru</p>
        <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mt-1">Buat Akun Anda</h2>
        <p class="text-slate-500 text-sm mt-2">Silakan lengkapi formulir di bawah ini untuk mendaftar.</p>
    </div>

    <!-- Form -->
    <form method="POST" action="{{ route('auth-register') }}" class="space-y-4">
        @csrf

        <!-- NIK Field -->
        <div class="relative">
            <label class="sr-only" for="nik">Nomor Induk Keluarga (NIK) Ibu</label>
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <i class="fas fa-id-card text-slate-400"></i>
            </div>
            <input class="block w-full pl-11 pr-4 py-4 border @error('nik') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-slate-200 focus:ring-primary focus:border-primary @enderror rounded-xl text-slate-800 placeholder-slate-400" id="nik" name="nik" placeholder="NIK Ibu (16 Digit) *" required type="number" value="{{ old('nik') }}" autofocus />
        </div>
        <div class="text-red-500 text-xs" id="nik-error"></div>
        @error('nik')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <!-- Nama Lengkap Ibu -->
        <div class="relative">
            <label class="sr-only" for="fullname">Nama Lengkap Ibu</label>
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <i class="fas fa-user text-slate-400"></i>
            </div>
            <input class="block w-full pl-11 pr-4 py-4 border @error('fullname') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-slate-200 focus:ring-primary focus:border-primary @enderror rounded-xl text-slate-800 placeholder-slate-400" id="fullname" name="fullname" placeholder="Nama Lengkap Ibu *" required type="text" value="{{ old('fullname') }}" />
        </div>
        @error('fullname')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <!-- Nomor HP/WA -->
        <div class="relative">
            <label class="sr-only" for="phone_number">Nomor HP/WA (AKTIF)</label>
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <i class="fab fa-whatsapp text-slate-400 text-lg"></i>
            </div>
            <input class="block w-full pl-11 pr-4 py-4 border @error('phone_number') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-slate-200 focus:ring-primary focus:border-primary @enderror rounded-xl text-slate-800 placeholder-slate-400" id="phone_number" name="phone_number" placeholder="Nomor HP/WA Aktif *" required type="tel" value="{{ old('phone_number') }}" />
        </div>
        @error('phone_number')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <!-- Nama Pengguna -->
        <div class="relative">
            <label class="sr-only" for="username">Nama Pengguna</label>
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <i class="fas fa-at text-slate-400"></i>
            </div>
            <input class="block w-full pl-11 pr-4 py-4 border @error('username') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-slate-200 focus:ring-primary focus:border-primary @enderror rounded-xl text-slate-800 placeholder-slate-400" id="username" name="username" placeholder="Nama pengguna *" required type="text" value="{{ old('username') }}" />
        </div>
        @error('username')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <!-- Kata Sandi -->
        <div class="relative">
            <label class="sr-only" for="password">Kata Sandi</label>
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <i class="fas fa-lock text-slate-400"></i>
            </div>
            <input class="block w-full pl-11 pr-4 py-4 border @error('password') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-slate-200 focus:ring-primary focus:border-primary @enderror rounded-xl text-slate-800 placeholder-slate-400" id="password" name="password" placeholder="Kata sandi (Min. 8 karakter) *" required type="password" />
        </div>
        <div class="text-red-500 text-xs" id="password-error"></div>
        @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <!-- Konfirmasi Kata Sandi -->
        <div class="relative">
            <label class="sr-only" for="password_confirmation">Konfirmasi Kata Sandi</label>
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <i class="fas fa-shield-alt text-slate-400"></i>
            </div>
            <input class="block w-full pl-11 pr-4 py-4 border @error('password_confirmation') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-slate-200 focus:ring-primary focus:border-primary @enderror rounded-xl text-slate-800 placeholder-slate-400" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi kata sandi *" required type="password" />
        </div>
        <div class="text-red-500 text-xs" id="password-confirmation-error"></div>
        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <!-- Submit Button -->
        <button class="w-full flex justify-center items-center py-4 px-4 border border-transparent rounded-xl shadow-lg text-white font-bold bg-primary hover:bg-primary-dark transition-all transform hover:scale-[1.02] active:scale-[0.98]" type="submit">
            Registrasi
        </button>

        <!-- Redirect to Login -->
        <div class="text-center text-sm mt-4">
            <span class="text-slate-500">Sudah punya akun? </span>
            <a class="font-bold text-primary hover:text-primary-dark underline underline-offset-4" href="{{ route('login') }}">Masuk</a>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Validasi NIK
            var nikInput = document.getElementById('nik');
            var nikError = document.getElementById('nik-error');
            nikInput.addEventListener('input', function() {
                if (this.value.trim().length !== 16) {
                    nikInput.classList.add('border-red-500');
                    nikInput.classList.remove('border-slate-200');
                    nikError.textContent = "NIK harus memiliki 16 karakter.";
                } else {
                    nikInput.classList.remove('border-red-500');
                    nikInput.classList.add('border-slate-200');
                    nikError.textContent = "";
                }
            });

            // Validasi Password
            var passwordInput = document.getElementById('password');
            var passwordError = document.getElementById('password-error');
            passwordInput.addEventListener('input', function() {
                if (this.value.length < 8) {
                    passwordInput.classList.add('border-red-500');
                    passwordInput.classList.remove('border-slate-200');
                    passwordError.textContent = "Kata sandi minimal 8 karakter.";
                } else {
                    passwordInput.classList.remove('border-red-500');
                    passwordInput.classList.add('border-slate-200');
                    passwordError.textContent = "";
                }
            });

            // Validasi Konfirmasi Password
            var passwordConfirmationInput = document.getElementById('password_confirmation');
            var passwordConfirmationError = document.getElementById('password-confirmation-error');

            if (passwordConfirmationInput && passwordConfirmationError) {
                passwordConfirmationInput.addEventListener('input', function() {
                    if (this.value !== passwordInput.value) {
                        passwordConfirmationInput.classList.add('border-red-500');
                        passwordConfirmationInput.classList.remove('border-slate-200');
                        passwordConfirmationError.textContent = "Konfirmasi kata sandi tidak sesuai.";
                    } else {
                        passwordConfirmationInput.classList.remove('border-red-500');
                        passwordConfirmationInput.classList.add('border-slate-200');
                        passwordConfirmationError.textContent = "";
                    }
                });
            }
        });
    </script>
@endpush
