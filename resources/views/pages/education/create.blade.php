@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Education details</h2>


    <form class="LanguageSection" action="/education" method='POST'>
        <h2>Add Education Information</h2>
        @csrf
        <div class="form__group field">
            <label for="school_name" class="form__label">School_name</label>
            <input type="text" value="{{old('school_name')}}" class="form__field" placeholder="school_name" name="school_name" id='school_name' />
        </div>
        <div class="form__group field">
            <label for="school_location" class="form__label">School_location</label>
            <input type="text" value="{{old('school_location')}}" class="form__field" placeholder="school_location" name="school_location" id='school_location' />
        </div>
        <div class="form__group field">
            <label for="degree" class="form__label">Degree</label>
            <input type="text" value="{{old('degree')}}" class="form__field" placeholder="degree" name="degree" id='degree' />
        </div>
        <div class="form__group field">
            <label for="field_of_study" class="form__label">Field of study</label>
            <input type="text" value="{{old('field_of_study')}}" class="form__field" placeholder="field_of_study" name="field_of_study" id='field_of_study' />
        </div>
        <div class="form__group field">
            <label class="form__label" for="graduation_start_date">Start Date</label>
            <input value="{{old('graduation_start_date')}}" class="form__label" type="date" id="graduation_start_date" name='graduation_start_date'>
        </div>
        <div class="form__group field">
            <label class="form__label" for="graduation_end_date">Start Date</label>
            <input value="{{old('graduation_end_date')}}" type="date" id="graduation_end_date" name='graduation_end_date'>
        </div>


        <button type="submit" class="btn btn-primary">Create</button>

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
