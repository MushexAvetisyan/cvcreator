@extends('layouts.app')

@section('content')
<h2>User Detail</h2>
<section class="LanguageSection">
    <div class="container">
        <div class="card-body">
            @if(auth()->user()->detail)
            <h4 class="card-title">
                <span>Image</span>
                <img src="/storage/images/{{ $detail->profile_image }}" width="50px" />
                <span>Full Name</span>
                {{$detail->fullname}}
                <span>Email</span>
                {{$detail->email}}
                <span>Phone</span>
                {{$detail->phone}}
                <span>Summary</span>
                {{$detail->summary}}
                <span>Address</span>
                {{$detail->address}}
            </h4>
                <div class="action_buttons">
                    <a class="btn btn-sm btn-primary" href=" {{route('user-detail.edit', $detail)}} " role="button">Edit</a>
                    <form action="{{route('user-detail.destroy', $detail)}}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                    </form>
                    <div class="text-right mt-3">
                        <a class="btn btn-primary" href=" {{route('education.index')}} " role="button">Education Section</a>
                    </div>
                </div>
            @else
                You Dont Have a Any Added information
                <a class="btn btn-primary" href="{{route('user-detail.create')}}">Add Information</a>
            @endif
            </div>
    </div>
</section>

@endsection
