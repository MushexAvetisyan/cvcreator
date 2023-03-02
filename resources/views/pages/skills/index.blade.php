@extends('layouts.app')

@section('content')
<h2>Skills</h2>
<section class="LanguageSection">
    <div class="container">
        <div class="card-body">
            @if(auth()->user()->detail)
                @foreach($skills as $skill)
                    <h4 class="card-title">
                        <span>Skill Name</span>
                        {{$skill->name}}
                        <span>Skill Rating</span>
                        {{$skill->rating}}
                    </h4>
                    <div class="action_buttons">
                        <a  class="btn btn-sm btn-primary" href=" {{route('skill.edit', $skill->id)}} " role="button">Edit</a>
                        <form action="{{route('skill.destroy', $skill)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                        </form>
                        @endforeach
                        <div class="col text-left">
                            <a class="btn btn-sm btn-primary" href=" {{route('experience.index')}} " role="button">Back</a>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-primary" target="_blank" href=" {{route('resume.index')}} " role="button">Show CV</a>
                        </div>
                        <div class="mt-2">
                            <a href=" {{route('skill.create')}} ">+ Add skill</a>
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
