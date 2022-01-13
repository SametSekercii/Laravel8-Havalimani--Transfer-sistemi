@extends('layouts.home')

@section('title',$data->title)
@section('keywords',$data->keywords)
@section('description',$data->description)



@section('content')
    <section id="aa-catg-head-banner" style="height: 100px;">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li>{{$data->title}}</li>
            <li class="active">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title) }}</li>
        </ol>
    </section>
    <!-- product category -->
    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div id="resim_gorunen"class="resim_gorunen" style="background-image:url('{{Storage::url($data->image)}}');background-size: 100% 100%; ">

                                            </div>
                                            <button onclick="resim_degis(this.id)" id="{{Storage::url($data->image)}}" style="background-image: url('{{Storage::url($data->image)}}');width:90px;height:70px;background-size: 100% 100%;margin-top:10px;" ></button>
                                            @foreach($galery as $gl)
                                            <button onclick="resim_degis(this.id)" id="{{Storage::url($gl->image)}}" style="background-image: url('{{Storage::url($gl->image)}}');width:90px;height:70px;background-size: 100% 100%;margin-top:10px;" ></button>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .resim_gorunen{
                                        border:1px solid #000;
                                        width:100%;
                                        height:250px;
                                    }
                                </style>
                                <script !src="">
                                    function resim_degis(a){
                                        document.getElementById("resim_gorunen").style.backgroundImage="url("+a+")";
                                    }
                                </script>
                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3>{{$data->title}}</h3>
                                        <div class="aa-price-block">
                                            Price : <span class="aa-product-view-price">${{$data->price}}</span>
                                        </div>
                                        <p>{{$data->description}}</p>
                                        <div class="aa-prod-quantity">
                                            <p class="aa-prod-category">
                                                Kategori: <a href="#">{{$data->category->title}}</a>
                                            </p><br>
                                            <p class="aa-prod-category">
                                                @php
                                                $average=\App\Http\Controllers\HomeController::averageview($data->id);
                                                @endphp
                                                Rate:
                                                <span @if($average>0) class="fa fa-star" @else class="fa fa-star-o"  @endif></span>
                                                <span @if($average>1) class="fa fa-star" @else class="fa fa-star-o"@endif></span>
                                                <span @if($average>2) class="fa fa-star" @else class="fa fa-star-o"@endif></span>
                                                <span @if($average>3) class="fa fa-star" @else class="fa fa-star-o"@endif></span>
                                                <span @if($average>4) class="fa fa-star" @else class="fa fa-star-o"@endif></span>

                                            </p>
                                        </div>
                                        <div class="aa-prod-view-bottom">
                                            <a class="aa-add-to-cart-btn" href="{{route("reservation_alma")}}">Rezervasyon Yap</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aa-product-details-bottom">
                            <ul class="nav nav-tabs" id="myTab2">
                                <li><a href="#description" data-toggle="tab">Detay</a></li>
                                <li><a href="#review" data-toggle="tab">Yorum</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content" >
                                <div class="tab-pane fade in active" id="description">
                                    <h1>{{$data->title}}</h1>
                                    {!! $data->detail !!}

                                    <hr>
                                </div>
                                <div class="tab-pane fade " id="review">
                                    <div class="col-lg-6">
                                        <ul class="aa-review-nav">
                                            @foreach($review as $rw)
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img width="50px" class="media-object" src="{{Storage::url($rw->user->profile_photo_path)}}" alt="girl image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><strong>{{$rw->user->name}}</strong> - <span>{{$rw->created_at}}</span></h4>
                                                        <div class="aa-product-rating">
                                                            <span @if($rw->rate>0) class="fa fa-star" @else class="fa fa-star-o"  @endif></span>
                                                            <span @if($rw->rate>1) class="fa fa-star" @else class="fa fa-star-o"@endif></span>
                                                            <span @if($rw->rate>2) class="fa fa-star" @else class="fa fa-star-o"@endif></span>
                                                            <span @if($rw->rate>3) class="fa fa-star" @else class="fa fa-star-o"@endif></span>
                                                            <span @if($rw->rate>4) class="fa fa-star" @else class="fa fa-star-o"@endif></span>
                                                        </div>
                                                        <p>{{$rw->review}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4>Add a review</h4>
                                        <!-- review form -->
                                        @livewire('review',['id'=>$data->id])
                                    </div>

                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- / product category -->






@endsection
