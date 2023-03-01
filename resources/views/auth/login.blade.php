@extends('layouts.app')

@section('content')
<div class="w-[400px] mx-auto shadow rounded p-5 mt-10 border">
    <h2 class="text-2xl font-bold text-center py-2">Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="">{{ __('Email Address') }}</label>

            <div class="">
                <input id="email" type="email" class="w-full px-3 py-2 rounded border @error('email') border-red-500 @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="w-full px-3 py-2 rounded border @error('password') border-red-500 @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="w-full py-3 rounded bg-purple-500 text-white">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="text-sm mt-3 inline-block.." href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                        @endif
                    </a>
            </div>
        </div>
    </form>
</div>
@endsection
