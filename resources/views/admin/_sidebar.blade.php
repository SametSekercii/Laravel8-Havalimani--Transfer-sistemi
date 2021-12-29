<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                @auth
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle"  width="50px" height="50px" src="{{Storage::url( Auth::user()->profile_photo_path)}}"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{ Auth::user()->name }}</span>

                        <span class="text-muted text-xs block">
                        @foreach(Auth::user()->roles as $rl)
                                <i class="fa fa-star"></i> &nbsp;{{ $rl->name }}<br>
                        @endforeach
                        </span>
                    </a>

                </div>
                @endauth
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="{{route("adminhome")}}"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
            </li>
            <li>
                <a href="{{route("admin_category")}}"><i class="fa fa-archive"></i> <span class="nav-label">Category</span></a>
            </li>
            <li>
                <a href="{{route("admin_service")}}"><i class="fa fa-plane"></i> <span class="nav-label">Transfer</span></a>
            </li>
            <li>
                <a href="{{route("admin_location")}}"><i class="fa fa-clock-o"></i> <span class="nav-label">Locations</span></a>
            </li>
            <li>
                <a href="{{route("admin_reservation")}}"><i class="fa fa-first-order"></i> <span class="nav-label">Reservations</span></a>
            </li>
            <li>
                <a href="{{route("admin_message")}}"><i class="fa fa-wechat"></i> <span class="nav-label">Messages</span></a>
            </li>

            <li>
                <a href="{{route("admin_review")}}"><i class="fa fa-comment"></i> <span class="nav-label">Reviews</span></a>
            </li>
            <li>
                <a href="{{route("admin_user")}}"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
            </li>

            <li class="special_link">
                <a href="{{ route("admin_faq") }}"><i class="fa fa-question"></i> <span class="nav-label">Faq</span></a>
            </li>
            <li class="special_link">
                <a href="{{ route("admin_setting") }}"><i class="fa fa-cog"></i> <span class="nav-label">Setting</span></a>
            </li>
        </ul>

    </div>
</nav>
