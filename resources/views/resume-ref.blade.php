<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Resume</title>
    <style>
        body {
            font-size: 17px;
        }
        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }
        .container {
            width: 70%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
@if(auth()->user()->detail)
<a name="" id="" class="btn btn-primary" href="{{url('user-detail')}}">Go Back And Change Information</a>
<a name="" id="" class="btn btn-primary" href="{{route('resume.download')}}">Download CV</a>
<div class="container">
    <section class="heading">
        <img src="http://cvcreator/storage/images/{{ $user->detail->profile_image }}" width="100px" />
        <h2>{{ucfirst($user->detail->fullname)}}</h2>
        <h4>Email: {{$user->detail->email}}</h4>
        <h4>Phone: {{$user->detail->phone}}</h4>
        <h4>Address: {{$user->detail->address}}</h4>
        <h3>{{$user->detail->summary}}</h3>
    </section>
    <section class="education">
        <h2>Education</h2>
        @foreach($user->education as $e)
            <h4> Degree: {{$e->degree}}</h4>
            <h4> Study: {{$e->field_of_study}}</h4>
            <p>School Name: {{$e->school_name}} </p>
            <p>School Location: {{$e->school_location}} </p>
            <p>Start Date: {{$e->graduation_start_date}} </p>
            <p>Graduation Date: {{$e->graduation_end_date}} </p>
        @endforeach
    </section>

    <section class="work">
        <h2>Work History</h2>
        @foreach($user->experiences as $work)
            <h3>Job Title: {{$work->job_title}}</h3>
            <p>Employer: {{$work->employer}} </p>
            <p>City: {{$work->city}} </p>
            <p>State: {{$work->state}} </p>
            <p>Start Date: {{$work->start_date}} </p>
            <p>End Date: {{$work->end_date}} </p>
        @endforeach
    </section>
    <section class="skills">
        <h2>Skills</h2>
        @foreach($user->skills as $skill)<h4> {{$skill->name}} ({{$skill->rating}} out of 5)</h4>@endforeach
    </section>
</div>
    @else
    <h2>You Don`t Create Your CV</h2>
@endif
</body>
</html>
