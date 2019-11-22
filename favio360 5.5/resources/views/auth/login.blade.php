@extends('layouts.Master')

@section('content')



<div class="grid-container main" style="width: 50%;">

<form method="POST" action="{{ route('login') }}" class="log-in-form">
{{ csrf_field() }}
  <h4 class="text-center">Connecter votre compte</h4>
  <label>Login : {{ __('E-Mail Address') }}
    <input type="email" "form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Entrer votre Login">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
  </label>
  <label>Password : {{ __('Password') }}
    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Entrer votre Password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
  </label>
  <div align="center">
        <button type="submit" class="button btn">{{ __('Login') }}</button>
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Souviens-toi de moi') }}
        
      </div>
</form>


</div>

@endsection
