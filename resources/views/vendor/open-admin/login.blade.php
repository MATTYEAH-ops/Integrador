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

    <link rel="stylesheet" href="{{ AdminFacade::asset('open-admin/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/theme.css') }}">
    <script src="{{ AdminFacade::asset('bootstrap5/bootstrap.bundle.min.js') }}" defer></script>
</head>
<body class="login-page" @if(config('admin.login_background_image')) style="background-image: url({{ config('admin.login_background_image') }});" @endif>
    <div class="login-overlay"></div>
    <div class="login-shell container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-8 col-lg-5">
                <div class="brand-card text-center mb-4">
                    <div class="brand-icon">{{ config('admin.logo-mini', 'LA') }}</div>
                    <div class="brand-meta">
                        <span class="subtitle">{{ __('Bienvenido') }}</span>
                        <h1 class="title">{{ config('admin.name', 'Open Admin') }}</h1>
                    </div>
                </div>

                <div class="auth-card shadow-lg">
                    @if($errors->has('attempts'))
                        <div class="alert alert-danger text-center mb-0">{{ $errors->first('attempts') }}</div>
                    @else
                        <form class="auth-form" action="{{ admin_url('auth/login') }}" method="post">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="{{ __('admin.username') }}" required autofocus>
                                <label for="username">{{ __('admin.username') }}</label>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="{{ __('admin.password') }}" required>
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

                            <button type="submit" class="btn btn-gradient w-100 py-2">{{ __('admin.login') }}</button>
                        </form>
                    @endif
                </div>

                <p class="login-footer text-center mt-4 text-muted">© {{ now()->year }} {{ config('admin.name') }} · {{ __('Todos los derechos reservados') }}</p>
            </div>
        </div>
    </div>
</body>
</html>
