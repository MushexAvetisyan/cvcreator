@extends('layouts.app')

@section('content')
<h2>User Education</h2>
    <section class="LanguageSection">
        <div class="container">
            <div class="card-body">
            @if(auth()->user()->detail)
            @foreach($education as $e)
                        <h4 class="card-title">
                            <span>Degree</span>
                            {{$e->degree}}
                            <span>Degree</span>
                            {{$e->field_of_study}}
                            <span>School Name</span>
                            {{$e->school_name}}
                            <span>School Location</span>
                            {{$e->school_location}}
                            <span>Graduation Start-End Dates</span>
                            ({{$e->graduation_start_date}} -
                            {{$e->graduation_end_date}})
                        </h4>

                        <div class="action_buttons">
                            <a class="btn btn-sm btn-primary" href=" {{route('education.edit', $e)}} " role="button">Edit</a>
                            <form action="{{route('education.destroy', $e)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-primary" type="submit">Delete</button>
                            </form>
                            @endforeach
                                <div class="col text-left">
                                    <a class="btn btn-sm btn-primary" href=" {{route('user-detail.index')}} " role="button">Back</a>
                                </div>
                                <div class="col text-right">
                                    <a class="btn btn-sm btn-primary" href=" {{route('experience.index')}} " role="button">Experience Section</a>
                                </div>
                            <a  href=" {{route('education.create')}} " role="button">+ Add Education</a>
                        </div>
            @else
            </div>
                <h1>You Don`t Have a Heading Information</h1>
            <p>After Added this information You Cant Add Education</p>
                <a class="btn btn-sm btn-primary" href="{{route('user-detail.create')}}">Add Heading Information</a>
            @endif
        </div>
    </section>
@endsection
