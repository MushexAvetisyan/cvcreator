<section class="app-content">
    <aside class="sidebar">
        <div class="sidebar-header">
            <a href="{{url('/')}}" class="logo">
                <img src="{{asset('images/Logo.png')}}" width="240" height="90" alt="LearnItLogo">
            </a>
        </div>
        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="{{route('dashboard.index')}}">
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a class="nav-link {{Request::routeIs('users.index') ? 'active' : ''}}"
                   href="{{route('users.index')}}">
                    <span>Users</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a class="nav-link {{Request::routeIs('professions.index') ? 'active' : ''}}"
                   href="{{route('professions.index')}}">
                    <span>Professions</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a class="nav-link {{Request::routeIs('categories.index') ? 'active' : ''}}"
                   href="{{route('categories.index')}}">
                    <span>Categories</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a class="nav-link {{Request::routeIs('languages.index') ? 'active' : ''}}"
                   href="{{route('languages.index')}}">
                    <span>Languages</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a class="nav-link {{Request::routeIs('posts.index') ? 'active' : ''}}"
                   href="{{route('posts.index')}}">
                    <span>Posts</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a class="nav-link {{Request::routeIs('hackings.index') ? 'active' : ''}}"
                   href="{{route('hackings.index')}}">
                    <span>Hacking</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a class="nav-link {{Request::routeIs('resources.index') ? 'active' : ''}}"
                   href="{{route('resources.index')}}">
                    <span>Resources</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a class="nav-link {{Request::routeIs('cheatsheets.index') ? 'active' : ''}}"
                   href="{{route('cheatsheets.index')}}">
                    <span>CheatSheets</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a class="nav-link {{Request::routeIs('books.index') ? 'active' : ''}}"
                   href="{{route('books.index')}}">
                    <span>Books</span>
                </a>
            </li>
        </ul>
    </aside>
</section>
