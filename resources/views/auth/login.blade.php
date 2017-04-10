@extends('layouts.login')

@section('content')
    <form role="form" method="POST" action="{{ route('login') }}" autocomplete="off">
        {{ csrf_field() }}

        <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">E-Mail Address</label>

            <p class="control">
                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span>
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </p>
        </div>

        <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password</label>

            <p class="control">
                <input id="password" type="password" class="input" name="password" required>

                @if ($errors->has('password'))
                    <span>
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </p>
        </div>

        <div class="field">
            <p class="control">
                <label class="checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </p>
        </div>

        <button type="submit" class="button">
            Login
        </button>

        <a class="button is-link" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
    </form>
@endsection
