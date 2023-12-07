@extends('layouts.app')

@section('content')
<div class="relative flex flex-col justify-center min-h-screen overflow-hidden bg-gray-100">
    <div class="w-full p-6 m-auto bg-white rounded-md shadow-md lg:max-w-lg">
        <h1 class="text-3xl font-semibold text-center text-purple-700">{{ __('Register') }}</h1>
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Name Field -->
            <div>
                <label class="label">
                    <span class="text-base label-text">{{ __('Name') }}</span>
                </label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name"
                    class="w-full input input-bordered input-primary @error('name') input-error @enderror">
                @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Field -->
            <div>
                <label class="label">
                    <span class="text-base label-text">{{ __('Email Address') }}</span>
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address"
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
                <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password"
                    class="w-full input input-bordered input-primary @error('password') input-error @enderror">
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password Field -->
            <div>
                <label class="label">
                    <span class="text-base label-text">{{ __('Confirm Password') }}</span>
                </label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"
                    class="w-full input input-bordered input-primary">
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
