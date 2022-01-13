@extends('layouts.home')

@section('title',"Referanslar")
@section('keywords',"Referanslar")
@section('description',"Referanslar")


@section('content')
    <section id="aa-catg-head-banner" style="height: 100px;">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Referances</li>
        </ol>
    </section>
    <section id="aa-blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $setting->referances !!}




                    <hr>
                </div>
            </div>
        </div>
    </section>


@endsection
