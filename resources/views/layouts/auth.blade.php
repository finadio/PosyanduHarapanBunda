<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>POSYANDU HARAPAN BUNDA | @yield('title', 'Login')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('img/logo.png') }}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">

    <style>
        :root {
            --primary-color: rgb(250, 156, 204);
            --primary-hover: rgb(250, 156, 204);
            --secondary-color: #6b7280;
            --accent-color: #f59e0b;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --text-dark: rgb(69, 52, 98);
            --text-gray:rgb(69, 52, 98);
            --border-color: #e5e7eb;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Geometric Background */
        .bg-pattern {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            opacity: 0.05;
        }

        .bg-pattern svg {
            width: 100%;
            height: 100%;
        }

        /* Main Layout */
        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .auth-container {
            background: var(--bg-white);
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-color);
            overflow: hidden;
            width: 100%;
            max-width: 900px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 500px;
        }

        /* Left Panel - Image */
        .image-panel {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .image-content {
            text-align: center;
            color: white;
            z-index: 2;
            padding: 2rem;
        }

        .image-icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .image-title {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .image-subtitle {
            font-size: 1rem;
            opacity: 0.8;
            line-height: 1.5;
        }

        /* Decorative elements */
        .decoration-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .circle-1 {
            width: 120px;
            height: 120px;
            top: -60px;
            right: -60px;
        }

        .circle-2 {
            width: 80px;
            height: 80px;
            bottom: -40px;
            left: -40px;
        }

        .circle-3 {
            width: 60px;
            height: 60px;
            top: 50%;
            left: 10%;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Right Panel - Form */
        .form-panel {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .brand-section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .brand-logo {
            width: 150px;
            height: 150px;
            border-radius: 8px;
            margin-bottom: 0.75rem;
            object-fit: contain;
        }

        .brand-name {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.25rem;
        }

        .form-title {
            font-size: 1.875rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .form-subtitle {
            color: var(--text-gray);
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1.5px solid var(--border-color);
            border-radius: 8px;
            background-color: var(--bg-white);
            font-size: 1rem;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        .form-control.is-invalid {
            border-color: var(--danger-color);
        }

        .form-control::placeholder {
            color: var(--text-gray);
        }

        .invalid-feedback {
            color: var(--danger-color);
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }

        /* Button */
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            border-radius: 8px;
            padding: 0.875rem 1.5rem;
            font-weight: 600;
            font-size: 1rem;
            color: white;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Links */
        .auth-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .auth-link:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }

        /* Alerts */
        .alert {
            padding: 0.875rem 1rem;
            border-radius: 8px;
            border: none;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .alert-success {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--primary-hover);
            border-left: 4px solid var(--success-color);
        }

        .alert-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: #dc2626;
            border-left: 4px solid var(--danger-color);
        }

        /* Footer */
        .auth-footer {
            grid-column: 1 / -1;
            padding: 1.5rem 2rem;
            background-color: var(--bg-light);
            border-top: 1px solid var(--border-color);
            text-align: center;
            color: var(--text-gray);
            font-size: 0.85rem;
        }

        /* Help Button */
        .help-button {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 56px;
            height: 56px;
            background-color: var(--primary-color);
            border: none;
            border-radius: 50%;
            color: white;
            font-size: 1.25rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-lg);
            z-index: 1000;
        }

        .help-button:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .auth-container {
                grid-template-columns: 1fr;
                max-width: 400px;
            }
            
            .image-panel {
                display: none;
            }
            
            .form-panel {
                padding: 2rem;
            }
            
            .form-title {
                font-size: 1.5rem;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>

<body>
    <!-- Background Pattern -->
    <div class="bg-pattern">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)" />
        </svg>
    </div>

    <div class="auth-wrapper">
        <div class="auth-container">
            <!-- Image Panel -->
            <div class="image-panel">
                <div class="decoration-circle circle-1"></div>
                <div class="decoration-circle circle-2"></div>
                <div class="decoration-circle circle-3"></div>
                
                <div class="image-content">
                    <i class="fas fa-heartbeat image-icon"></i>
                    <h2 class="image-title">Keluarga Sehat Bersama Harapan Bunda</h2>
                    <p class="image-subtitle">
                        Platform digital untuk informasi kesehatan keluarga dengan mudah dan aman.
                    </p>
                </div>
            </div>

            <!-- Form Panel -->
            <div class="form-panel">
                <!-- Brand Section -->
                <div class="brand-section">
                    <img src="{{ asset('img/Posyandu.png') }}" alt="Logo Posyandu" class="brand-logo">
                    <div class="brand-name">POSYANDU HARAPAN BUNDA</div>
                </div>

                <!-- Form Header -->
                <div class="text-center mb-4">
                    <h1 class="form-title">{{ Request::is('register') ? 'Daftar' : 'Masuk' }}</h1>
                    <p class="form-subtitle">
                        {{ Request::is('register') ? 'Buat akun baru untuk mulai menggunakan layanan kami.' : 'Selamat datang kembali! Silakan masuk ke akun Anda.' }}
                    </p>
                </div>

                <!-- Alert Messages -->
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Content -->
                @yield('main')
                <!-- End content -->

            </div>

            <!-- Footer -->
            <div class="auth-footer">
                <span>&copy; {{ date('Y') }} Posyandu Harapan Bunda</span>
                <span class="mx-2">•</span>
                <span>{{ $site->village_name ?? 'Desa Lumbir' }}</span>
            </div>
        </div>
    </div>

    <!-- Help Button -->
    <button class="help-button" title="Pusat Bantuan" data-toggle="modal" data-target="#helpCenterModal">
        <i class="fas fa-comments"></i>
    </button>

    @include('components.help-center-modal')
    
    <!-- General JS Scripts -->
    <script src="{{ asset('modules/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/popper.js') }}"></script>
    <script src="{{ asset('modules/tooltip.js') }}"></script>
    <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('modules/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        // Form validation and interaction
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            if (form) {
                const submitBtn = form.querySelector('.btn-primary');
                const buttonText = form.querySelector('.button-text');
                const loading = form.querySelector('.loading');
                
                // Form submit handler
                form.addEventListener('submit', function(e) {
                    // Show loading state
                    if (buttonText) buttonText.classList.add('d-none');
                    if (loading) loading.classList.remove('d-none');
                    if (submitBtn) submitBtn.disabled = true;
                });
                
                // Input focus effects
                const inputs = document.querySelectorAll('.form-control');
                inputs.forEach(input => {
                    input.addEventListener('focus', function() {
                        this.parentElement.classList.add('focused');
                    });
                    
                    input.addEventListener('blur', function() {
                        this.parentElement.classList.remove('focused');
                    });
                });
            }
        });
    </script>

    @stack('scripts')
</body>

</html>