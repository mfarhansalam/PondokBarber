
<form method="POST" action="{{ route('user-profile-information.update') }}">
    @csrf
    @method('PUT')
    
    <div >
        <label for="inputName">{{ __('Name') }}</label>
        <input  class="form-control" id="inputName" type="text" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
    </div>

    <div >
        <label for="inputName">{{ __('Email') }}</label>
        <input class="form-control" id="inputName" type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
    </div>
<br>
    <div  class="form-floating mb-1">
        <button class="btn btn-primary" type="submit">
            {{ __('Update Profile') }}
        </button>
    </div>
</form>

<hr>
