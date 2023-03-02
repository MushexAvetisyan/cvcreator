@extends('layouts.app')

@section('content')
    <div class="registration_form">
        <div class="container">
            <form method="POST" enctype="multipart/form-data" class="form" action="{{ route('register') }}">
                @csrf
                <div class='control'>
                    <h1>
                        Sign Up
                    </h1>
                </div>
                <div class='control block-cube block-input'>
                    <label for="name"></label>
                    <input type="text" id="name" placeholder="Write your Name" name="name" value="{{ old('name') }}"
                           autocomplete="name" autofocus>
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
                    <label for="email"></label>
                    <input id="email" type="email" name="email" placeholder="Write Your Email" value="{{ old('email') }}"
                           autocomplete="off">
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
                    <input id="password" type="password" name="password" placeholder="Create password"
                           autocomplete="off">
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
                    <label for="password-confirm"></label>
                    <input id="password-confirm" type="password" class="form-control" placeholder="Repeat your password"
                           name="password_confirmation" autocomplete="off">
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

                <button class='btn btn-primary reset_password' type='submit'>
                    {{ __('Registration') }}
                </button>
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
