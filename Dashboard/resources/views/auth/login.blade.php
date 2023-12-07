@extends('layouts.app')

@section('content')
<div class="relative flex flex-col justify-center min-h-screen overflow-hidden bg-gray-100">
    <div class="w-full p-6 m-auto bg-white rounded-md shadow-md lg:max-w-lg">
        <h1 class="text-3xl font-semibold text-center text-purple-700">{{ __('Login') }}</h1>
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email Field -->
            <div>
                <label class="label">
                    <span class="text-base label-text">{{ __('Email Address') }}</span>
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address"
                    class="w-full input input-bordered input-primary @error('email') input-error @enderror">
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label class="label">
                    <span class="text-base label-text">{{ __('Password') }}</span>
                </label>
                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter Password"
                    class="w-full input input-bordered input-primary @error('password') input-error @enderror">
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="checkbox checkbox-primary">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
                </label>

                <!-- Forget Password Link -->
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-xs text-gray-600 hover:underline hover:text-blue-600">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
