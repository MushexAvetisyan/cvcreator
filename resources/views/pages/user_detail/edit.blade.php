@extends('layouts.app')

@section('content')

<div class="container">
    <form class="LanguageSection" enctype="multipart/form-data" action="{{route('user-detail.update', $userDetail->id)}} " method='POST'>
        <h2>Edit Information</h2>
        @csrf
        @method('PUT')
        <div class="form__group field">
            <input type="file" id="profile_image" name="profile_image" placeholder="logo" value="{{old('profile_image')}}" />
            <img src="/storage/images/{{ $userDetail->profile_image }}" width="50px" />
        </div>
        <div class="form__group field">
            <x-form.text name="fullname" :value="$userDetail->fullname"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="email" type="email" :value="$userDetail->email"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="phone" :value="$userDetail->phone"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="address" :value="$userDetail->address"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.textarea name="summary" :value="$userDetail->summary"></x-form.textarea>
        </div>
        <x-form.submit> </x-form.submit>
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


@endsection
