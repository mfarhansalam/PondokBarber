@extends('template.layout')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    
    <h1 class="mt-4">Profile Dashboard</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        
    </form>

    <hr>

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
        @include('profile.update-profile-information-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        @include('profile.update-password-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
        @include('profile.two-factor-authentication-form')
    @endif
@endsection
