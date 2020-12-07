@extends('layouts.tweets')

@section('content')
<div class="contents row">
  <div class="container">
    <h2>Sign up</h2>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="field">
        <label for="name">{{ __('Nickname') }}</label><br>
        <input class="form-input" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      </div>
      <div class="field">
        <label for="email">{{ __('E-Mail Address') }}</label><br>
        <input class="form-input" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
      </div>
      <div class="field">
        <label for="password">{{ __('Password') }}</label><br>
        <input class="form-input" id="password" type="password" name="password" required autocomplete="new-password">
      </div>

      <div class="field">
        <label for="password-confirm">{{ __('Confirm Password') }}</label><br>
        <input class="form-input" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
      </div>

      <div class="actions">
        <input type="submit" value="Sign up" class="submit-button-new">
      </div>
    </form>
  </div>
</div>
@endsection
