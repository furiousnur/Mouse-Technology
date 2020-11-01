<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{$user->first_name}} {{$user->last_name}}</p>
        </div>
    </div>
    <ul class="app-menu">
        @if($user->user_type == 'admin')
        <li>
            <a class="app-menu__item active" href="{{route('all.user')}}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">All User</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item active" href="{{route('user-key-generate.index')}}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Key Generate</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item active" href="{{route('active.license')}}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Active License</span>
            </a>
        </li>
        @else
        <li>
            <a class="app-menu__item active" href="{{route('user-key-generate.index')}}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Profile</span>
            </a>
        </li>
        @endif
        <li>
            <a class="app-menu__item active" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</aside>
