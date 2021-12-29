@php
    $parentCategories=\App\Http\Controllers\HomeController::categorylist();

@endphp
<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav"><li><a href="/">Anasayfa</a></li>
                        <li><a href="#" onclick="return false;">Hizmetlerimiz <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($parentCategories as $rs)
                                    @if(count($rs->children))
                                        <li><a class="drop" href="#" onclick="return false;">{{ $rs->title }} <span class="caret"></span></a>
                                            @include("home.categoryTree",[
                                                    'children'=>$rs->children
                                                ])

                                        </li>
                                    @else
                                        <li><a href="{{ route("category",['id'=>$rs->id,'slug'=>$rs->slug]) }}">{{ $rs->title }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="/aboutus">Hakkımzıda</a></li>
                        <li><a href="/contact">İletişim</a></li>
                        <li><a href="/faq">SSS</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu -->
