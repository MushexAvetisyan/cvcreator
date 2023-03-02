@extends('layouts.app')

@section('content')
    <div class="registration_form">
        <div class="container">
            <form method="POST" class="form" action="{{ route('login') }}">
                @csrf
                <div class='control'>
                    <h1>
                        Sign In
                    </h1>
                </div>
                <div class='control block-cube block-input'>
                    <label for="email"></label>
                    <input id="email" type="email" name="email" placeholder="Write Your Email" value="{{ old('email') }}"
                           autocomplete="email">
                    <div class='bg-top'>
                        <div class='bg-inner'></div>
                    </div>
                    <div class='bg-right'>
                        <div class='bg-inner'></div>
                    </div>
                    <div class='bg'>
                        <div class='bg-inner'></div>
                    </div>
                </div>

                <div class='control block-cube block-input'>
                    <label for="password"></label>
                    <input id="password" type="password" name="password" placeholder="Write your password" autocomplete="new-password">
                    <div class='bg-top'>
                        <div class='bg-inner'></div>
                    </div>
                    <div class='bg-right'>
                        <div class='bg-inner'></div>
                    </div>
                    <div class='bg'>
                        <div class='bg-inner'></div>
                    </div>
                </div>
                <div class="remember_me">
                    <button class='btn btn-primary reset_password' type='submit'>{{ __('Login') }}</button>
                    <label for="remember">{{ __('Remember Me') }}
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    </label>
                </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-primary reset_password" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
            @if($errors->any())
                <div id="errors" role="alert">
                    <div class="error_modal">
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>There were some problems with your inputs.<br><br>
                            <ul>
                                @foreach($errors->all() as $errors)
                                    <li>{{$errors}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
        </div>
    </div>
@endsection
