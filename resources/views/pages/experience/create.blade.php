@extends('layouts.app')

@section('content')
<section class="container">
        <form class="LanguageSection" action="/experience" enctype="multipart/form-data" method='POST'>
            <h2>Add Experience Information</h2>
            @csrf
            <div class="form__group field">
                <x-form.text name="job_title"></x-form.text>
            </div>
            <div class="form__group field">
                <x-form.text name="employer"></x-form.text>
            </div>
            <div class="form__group field">
                <x-form.text name="city"></x-form.text>
            </div>
            <div class="form__group field">
                <x-form.text name="state"></x-form.text>
            </div>
            <div class="form__group field">
                <label class="form__label" for="start_date">Start Date</label>
                <input value="{{old('start_date')}}" class="form__label" type="date" id="start_date" name='start_date'>
            </div>
            <div class="form__group field">
                <label class="form__label" for="end_date">Start Date</label>
                <input value="{{old('end_date')}}" type="date" id="end_date" name='end_date'>
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
