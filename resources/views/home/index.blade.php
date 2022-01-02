@extends('layouts.home')

@section('title',$setting->title)
@section('keywords',$setting->keywords)
@section('description',$setting->description)

@section('slider')
    @include('home._slider')
@endsection

@section('content')

    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#men" data-toggle="tab">Popüler Hizmetler</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active" id="men">
                                        <ul class="aa-product-catg">
                                        @foreach($populer as $rs)
                                            <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img"
                                                           href="{{ route('service_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}">
                                                            <img height="300px" style="width: 100%;object-fit: contain"
                                                                 src="{{Storage::url($rs->image)}}"
                                                                 alt="polo shirt img"></a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                        href="{{ route('service_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}">{{ $rs->title }}</a>
                                                            </h4>
                                                            <span class="aa-product-price">${{ $rs->price }}</span><span
                                                                    class="aa-product-price"><del>${{ $rs->price+30 }}</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="{{ route('service_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}"
                                                           data-toggle2="tooltip" data-placement="top"
                                                           title="Quick View"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale">Popüler</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Products section -->
    <!-- banner section -->
    <section id="aa-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            <a href="#"><img src="{{ asset("assets/home") }}/img/baner_orta.jpg"
                                             alt="fashion banner img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Sizin İçin Önerilenler</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                    @foreach($picked as $rs)
                                        <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img"
                                                       href="{{ route('service_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}">
                                                        <img height="300px" style="width: 130%;object-fit: contain""
                                                             src="{{ Storage::url($rs->image)}}"
                                                             alt="polo shirt img"></a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                    href="{{ route('service_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}">{{$rs->title}}</a>
                                                        </h4>
                                                        <span class="aa-product-price">${{$rs->price}}</span><span
                                                                class="aa-product-price"><del>${{$rs->price+40}}</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="{{ route('service_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}"
                                                       data-toggle2="tooltip" data-placement="top"
                                                       title="Quick View"><span class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">Sizin için</span>
                                            </li>
                                            <!-- start single product item -->
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- / popular product category -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->

    <!-- Client Brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-java.png"
                                                 alt="java img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-jquery.png"
                                                 alt="jquery img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-html5.png"
                                                 alt="html5 img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-css3.png"
                                                 alt="css3 img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-wordpress.png"
                                                 alt="wordPress img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-joomla.png"
                                                 alt="joomla img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-java.png"
                                                 alt="java img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-jquery.png"
                                                 alt="jquery img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-html5.png"
                                                 alt="html5 img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-css3.png"
                                                 alt="css3 img"></a></li>
                            <li><a href="#"><img src="{{ asset("assets/home") }}/img/client-brand-wordpress.png"
                                                 alt="wordPress img"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client Brand -->


@endsection
