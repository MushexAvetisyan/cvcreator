<header class="header active" id="header-menu" data-header>
    <div class="container">
        <a href="{{url('/')}}" class="logo">
            CV Builder
        </a>
        <nav class="navbar active" data-navbar>
            <div class="navbar-top">
                <a href="#" class="logo">
                    CV Builder
                </a>
                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>

            <ul class="navbar-list">
                @guest
                    <li><a href="{{route('login')}}" class="navbar-link hover-1" data-nav-toggler>Login</a></li>
                    <li><a href="{{route('register')}}" class="navbar-link hover-1" data-nav-toggler>Registration</a></li>
                @else
                    @if(auth()->user())
                        <li><a target="_blank" href=" {{route('resume.index')}} ">View My CV</a></li>
                        <li>{{ Auth::user()->name }}</li>
                        <li><a href="{{route('logout')}}" class="navbar-link hover-1" data-nav-toggler
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else

                    @endguest
                @endif
            </ul>
        </nav>
        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>
    </div>
</header>
