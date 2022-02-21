@extends('template.register')

@section('content')
    @if ($errors->any())
        <div>
            <div>{{ __('Whoops! Something went wrong.') }}</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name"  name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    <label for="inputFirstName">{{ __('Name') }}</label>
                </div>
            </div>
            
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required />
            <label for="inputEmail">{{ __('Email') }}</label>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="password" required autocomplete="new-password" />
                    <label for="inputPassword">{{ __('Password') }}</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password" />
                    <label for="inputPasswordConfirm">{{ __('Confirm Password') }}</label>
                </div>
            </div>
        </div>
        <div class="mt-4 mb-0">
           
            <div class="d-grid">
                <button class="btn btn-primary btn-block" type="submit">
                    {{ __('Register') }}
                </button>

                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </div>
    </form>


@endsection
