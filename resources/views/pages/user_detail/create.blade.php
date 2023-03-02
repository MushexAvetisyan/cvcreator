@extends('layouts.app')

@section('content')
    <section class="container">
        <form class="LanguageSection" action="/user-detail" enctype="multipart/form-data" method='POST'>
            <h2>Add Main Information</h2>
            @csrf
            <div class="form__group field">
                <input type="file" id="profile_image" name="profile_image" placeholder="logo" value="{{old('profile_image')}}" />
            </div>
            <div class="form__group field">
                <x-form.text name="fullname"></x-form.text>
            </div>
            <div class="form__group field">
                <x-form.text name="email" type="email"></x-form.text>
            </div>
            <div class="form__group field">
                <x-form.text name="phone"></x-form.text>
            </div>
            <div class="form__group field">
                <x-form.text name="address"></x-form.text>
            </div>
            <div class="form__group field">
                <x-form.textarea name="summary"></x-form.textarea>
            </div>

            <button class="btn btn-primary" type="submit">Create</button>
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
    </section>
@endsection
