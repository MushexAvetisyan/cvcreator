@extends('layouts.app')

@section('content')
    <main>
        <article>
            <section class="hero" id="home" aria-label="home">
                <div class="container">
                    @if(auth()->check() && auth()->user()->detail)
                        <h2>Use Nav Menu For Edit Or Create Information For Your CV</h2>
                    @elseif(auth()->check() && !auth()->user()->detail)
                        <h2>Welcome to cv Builder</h2>
                        <a name="" id="" class="btn btn-primary" href=" {{route('user-detail.create')}} " role="button">Build Now</a>
                    @else
                        <h1>Please Login Or Registration To Create Your CV</h1>
                    @endif
                </div>
            </section>
        </article>
    </main>
    <main class="container">
        <section class="LanguageSection">
            @if(auth()->check() && auth()->user()->detail)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item {{ request()->is('user-detail') ? 'active' : '' }}"><a
                                href="{{route('user-detail.index')}}">Heading</a></li>
                        <li class="breadcrumb-item {{ request()->is('education') ? 'active' : '' }}"><a
                                href="{{route('education.index')}}">Education</a></li>
                        <li class="breadcrumb-item {{ request()->is('experience') ? 'active' : '' }}"><a
                                href="{{route('experience.index')}}">Work History</a></li>
                        <li class="breadcrumb-item {{ request()->is('skill') ? 'active' : '' }}"><a
                                href="{{route('skill.index')}}">Skills</a></li>
                    </ol>
                </nav>
            @endif

            {{-- validation error section --}}
            <div>
                @if(session()->has('errors'))
                    <ol class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $e)
                            <li>{{$e}}</li>
                        @endforeach
                    </ol>
                @endif
            </div>
            @yield('content')
        </section>
    </main>
@endsection
