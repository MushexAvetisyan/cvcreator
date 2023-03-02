@extends('layouts.app')

@section('content')

<div class="container">
    <form class="LanguageSection" action="{{route('education.update', $education->id)}}" method='POST'>
        <h2>Edit Education</h2>
        @csrf
        @method('PUT')
        <div class="form__group field">
            <x-form.text name="school_name" :value="$education->school_name"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="school_location" :value="$education->school_location"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="degree" :value="$education->degree"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="field_of_study" :value="$education->field_of_study"></x-form.text>
        </div>
        <input type="date" name='start_date' value="{{$education->graduation_start_date}}">
        <input type="date" name='end_date' value="{{$education->graduation_end_date}}">

        <button class="btn btn-primary" type="submit">Save</button>
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
