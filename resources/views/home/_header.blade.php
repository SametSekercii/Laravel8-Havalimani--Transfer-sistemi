@php
    $setting=\App\Http\Controllers\HomeController::settinglist();

@endphp
<!-- Start header section -->
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">

                            <!-- start cellphone -->
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-phone"></span><a href="tel:0-62-658-658">{{$setting->phone}}</a></p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                @auth
                                <li><a href="{{ route("profile.show") }}">{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ route("user_logout") }}">Logout</a></li>
                                @endauth
                                @guest
                                <li class="hidden-xs"><a href="/register">Register</a></li>
                                <li class="hidden-xs"><a href="/login">Login</a></li>
                                    @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="/">
                                <span class="fa fa-plane" style="float: left;"></span>
                                <p style="float: left;">SMT<strong>TRANSFER</strong> <span>Hızlı ve gübenli</span></p>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="{{ asset("assets/home") }}/img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link" href="{{route('reservation_alma')}}">
                                <span class="fa fa-clock-o"></span>
                                <span class="aa-cart-title">Randevu Al</span>
                            </a>

                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="{{ route('getproduct') }}" method="post">
                                @csrf
                                @livewire('search')
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                            @livewireScripts
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<!-- / header section -->
