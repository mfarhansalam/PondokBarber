@extends('template.login')

@section('content')
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

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

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-floating mb-3">
            <label for="inputEmail">{{ __('Email') }}</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail"  placeholder="name@example.com" required autofocus />
        </div>

        <div class="form-floating mb-3">
            <label for="inputPassword">{{ __('Password') }}</label>
            <input type="password" name="password" class="form-control" id="inputPassword"  placeholder="Password" required autocomplete="current-password" />
        </div>

        <div class="form-check mb-3">
            <label class="form-check-label" for="inputRememberPassword">{{ __('Remember me') }}</label>
            <input type="checkbox" name="remember" class="form-check-input" id="inputRememberPassword"  value="">
        </div>

        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            
            @if (Route::has('password.request'))
            <a lass="small" href="password.html" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
            

            <button class="btn btn-primary" type="submit">
                {{ __('Login') }}
             </button>
        </div>
        

        
        
    </form>

  

    
@endsection
