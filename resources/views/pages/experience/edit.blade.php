@extends('layouts.app')

@section('content')

<div class="container">
    <form class="LanguageSection" action="{{route('experience.update', $experience->id)}}" method='POST'>
        <h2>Edit Work Detail</h2>
        @csrf
        @method('PUT')

        <div class="form__group field">
            <x-form.text name="job_title" :value="$experience->job_title"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="employer" :value="$experience->employer"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="city" :value="$experience->city"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="state" :value="$experience->state"></x-form.text>
        </div>
        <input type="date" name='start_date' value="{{$experience->start_date}}">
        <input type="date" name='end_date' value="{{$experience->end_date}}">

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
