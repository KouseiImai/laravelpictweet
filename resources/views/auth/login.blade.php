@extends('layouts.tweets')

@section('content')
    <div class="contents row">
        <div class="container">
            <h2>Log in</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <label for="email">{{ __('E-Mail Address') }}</label><br>
                    <input class="form-input" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="field">
                    <label for="password" >{{ __('Password') }}</label><br>
                    <input class="form-input" id="password" type="password" name="password" required autocomplete="current-password">
                </div>
                <div class="field">
                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label  for="remember">{{ __('Remember Me') }}</label>
                </div>
                <div class="actions">
                    <input type="submit" value="Log in" class="submit-button-new">
                </div>
                <!-- <div class="actions">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </div> -->
            </form>
        </div>
    </div>
@endsection
