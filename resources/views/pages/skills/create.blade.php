@extends('layouts.app')

@section('content')
    <section class="container">
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
            <form class="LanguageSection" action="/skill" enctype="multipart/form-data" method='POST'>
                <h2>Add Skills</h2>
                @csrf
                <div class="form__group field">
                    <x-form.text name="name"></x-form.text>
                </div>
                <div class="form__group field">
                    <label for="rating">Rating</label>
                    <select class="form-control" name="rating" id="rating">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit">Add Skill</button>
            </form>
    </section>
@endsection
