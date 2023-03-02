<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="lorem">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--    <meta name="is-user-logged-in" content="{{ auth()->check() }}">--}}
    <title>{{ config('app.name', 'Mushex Avetisyan') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    @yield('header')
    <script src="{{mix('js/app.js')}}" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
@if(\Illuminate\Support\Facades\Session::has('flash_notification'))
    <div id="toast" class="" role="alert">
        <div class="notification_modal">
            <div style="margin-right: 25px">@if(\Illuminate\Support\Facades\Session::get('flash_notification')->toArray()[0]['level'] == 'success')
                    <img src="{{asset('img/success.svg')}}" width="20" height="20" alt="success">
                @else
                    <img src="{{asset('img/error.svg')}}" width="20" height="20" alt="error">
                @endif
            </div>
            <div class="">
                <div
                    class="">{{\Illuminate\Support\Facades\Session::get('flash_notification')->toArray()[0]['message']}}
                </div>
            </div>
        </div>
    </div>
@endif
@include('layouts.components._header')
@yield('content')
@include('layouts.components._footer')
@yield('scripts')
</body>

</html>
