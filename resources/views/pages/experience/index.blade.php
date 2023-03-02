@extends('layouts.app')

@section('content')
<h2>Work  Summary</h2>
<section class="LanguageSection">
    <div class="container">
        <div class="card-body">
        @if(auth()->user()->detail)
        @foreach($experiences as $e)
                    <h4 class="card-title">
                        <span>Job Title</span>
                        {{$e->job_title}}
                        <span>Date</span>
                        ({{$e->start_date}} to {{$e->end_date}})
                        <span>Employer</span>
                        {{ $e->employer}}
                        <span>City</span>
                        {{ $e->city}}
                        <span>State</span>
                        {{ $e->state}}
                    </h4>
                <div class="action_buttons">
                    <a  class="btn btn-sm btn-primary" href=" {{route('experience.edit', $e)}} " role="button">Edit</a>
                    <form action="{{route('experience.destroy', $e)}}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                    </form>
                    @endforeach
                    <div class="col text-left">
                        <a class="btn btn-sm btn-primary" href=" {{route('education.index')}} " role="button">Back</a>
                    </div>
                    <div class="text-right">
                        <a class=" btn btn-primary" href=" {{route('skill.index')}} " role="button">Skills Section</a>
                    </div>
                    <div class="mt-2">
                        <a href=" {{route('experience.create')}} ">+ Add Experience</a>
                    </div>
                </div>
            @else
        </div>
            <h1>You Don`t Have a Heading Information</h1>
            <p>Fill Heading Information and after that You Can Adding Experience</p>
            <a class="btn btn-sm btn-primary" href="{{route('user-detail.create')}}">Add Main Information</a>
        @endif
    </div>
</section>
@endsection
