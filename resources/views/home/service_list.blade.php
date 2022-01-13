@extends('layouts.home')

@section('title',$word)
@section('keywords',$word)
@section('description',$word)



@section('content')
    <section id="aa-catg-head-banner" style="height: 100px;">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li>Service Search</li>
            <li class="active">{{$word}}</li>
        </ol>
    </section>
    <section id="aa-blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-catg-body">
                        <ul class="aa-product-catg">

                        @include("home.flash-message")
                        @foreach($datalist as $rs)
                            <!-- start single product item -->
                                <li style="margin-bottom:100px; ">
                                    <figure>
                                        <a class="aa-product-img" href="#"><img height="200px;" src="{{Storage::url($rs->image)}}" alt="{{ $rs->title }}"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Reservation Ekle</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">{{ $rs->title }}</a></h4>
                                            <span class="aa-product-price">${{ $rs->price }}</span><span class="aa-product-price"><del>/ ${{ $rs->price+20 }}</del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="{{ route('service_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}"  data-placement="top" title="Quick View" ><span class="fa fa-search"></span></a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
