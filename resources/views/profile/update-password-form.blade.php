<form method="POST" action="{{ route('user-password.update') }}">
    @csrf
    @method('PUT')

    <div>
        <label for="inputName">{{ __('Current Password') }}</label>
        <input class="form-control" id="inputName" type="password" name="current_password" required autocomplete="current-password" />
    </div>

    <div>
        <label for="inputName">{{ __('Password') }}</label>
        <input class="form-control" id="inputName" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div>
        <label for="inputName">{{ __('Confirm Password') }}</label>
        <input class="form-control" id="inputName" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>
<br>
    <div class="form-floating mb-1">
        <button class="btn btn-primary" type="submit">
            {{ __('Save') }}
        </button>
    </div>
</form>

<hr>
