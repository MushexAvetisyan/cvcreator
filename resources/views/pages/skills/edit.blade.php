@extends('layouts.app')

@section('content')

<div class="container">
    <form class="LanguageSection" action="{{route('skill.update', $skill->id)}}" method='POST'>
        <h2>Edit Skill Detail</h2>
        @csrf
        @method('PUT')

        <div class="form__group field">
            <x-form.text name="name" :value="$skill->name"></x-form.text>
        </div>
        <div class="form__group field">
            <x-form.text name="rating" :value="$skill->rating"></x-form.text>
        </div>
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
