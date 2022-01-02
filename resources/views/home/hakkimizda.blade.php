@extends('layouts.home')

@section('title',"Hakkimizda")
@section('keywords',"Hakkimizda")
@section('description',"Hakkimizda")


@section('content')
    <section id="aa-catg-head-banner" style="height: 100px;">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">About Us</li>
        </ol>
    </section>
    <section id="aa-blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $setting->aboutus !!}




                    <hr>
                </div>
            </div>
        </div>
    </section>


@endsection
