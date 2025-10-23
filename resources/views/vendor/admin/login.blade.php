<!DOCTYPE html>
@php
    use OpenAdmin\Admin\Facades\Admin as AdminFacade;
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{{ config('admin.title') }} | {{ __('admin.login') }}</title>

    @if(!is_null($favicon = AdminFacade::favicon()))
        <link rel="shortcut icon" href="{{ $favicon }}">
    @endif

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ AdminFacade::asset('open-admin/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/theme.css') }}">
    <script src="{{ AdminFacade::asset('bootstrap5/bootstrap.bundle.min.js') }}" defer></script>
</head>
<body class="login-page gradient-shift" @if(config('admin.login_background_image')) style="background-image: url({{ config('admin.login_background_image') }});" @endif>
    <div class="login-overlay"></div>
    <div class="color-swirls">
        <span class="swirl swirl--one"></span>
        <span class="swirl swirl--two"></span>
        <span class="swirl swirl--three"></span>
    </div>
    <div class="login-shell container">
        <div class="row justify-content-center align-items-center min-vh-100 px-3">
            <div class="col-xl-4 col-lg-5 col-md-7">
                <div class="login-card shadow-lg">
                    <div class="login-brand text-center">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Logo SAMAPA" class="brand-logo mb-3">
                        <h1 class="brand-title mb-1">{{ config('admin.name', 'Open Admin') }}</h1>
                        <p class="brand-subtitle mb-0">{{ __('Sistema administrativo') }}</p>
                    </div>

                    @if($errors->has('attempts'))
                        <div class="alert alert-danger text-center mb-4">{{ $errors->first('attempts') }}</div>
                    @endif

                    <form class="auth-form" action="{{ admin_url('auth/login') }}" method="post">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="{{ __('admin.username') }}" required autofocus>
                            <label for="username">{{ __('admin.username') }}</label>
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="{{ __('admin.password') }}" required>
                            <label for="password">{{ __('admin.password') }}</label>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        @if(config('admin.auth.remember'))
                            <div class="form-check form-switch mb-4">
                                <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('admin.remember_me') }}</label>
                            </div>
                        @endif

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-gradient py-2 fw-semibold">{{ __('admin.login') }}</button>
                            <a href="{{ url('/') }}" class="btn btn-ghost py-2 fw-semibold">{{ __('Volver al inicio') }}</a>
                        </div>
                    </form>
                </div>

                <p class="login-footer text-center mt-4">© {{ now()->year }} {{ config('admin.name') }} · {{ __('Todos los derechos reservados') }}</p>
            </div>
        </div>
    </div>

    <script>
        // Permite al usuario pausar/reanudar la animación con doble click
        document.addEventListener('dblclick', () => {
            document.body.classList.toggle('gradient-paused');
        });
    </script>
</body>
</html>
