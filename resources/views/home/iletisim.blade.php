@extends('layouts.home')

@section('title',"İletişim")
@section('keywords',"İletişim")
@section('description',"İletişim")



@section('content')
    <section id="aa-catg-head-banner" style="height: 100px;">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Contact</li>
        </ol>
    </section>
    <section id="aa-blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="aa-contact-address">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="aa-contact-address-left">
                                        @include("home.flash-message")
                                        <form class="comments-form contact-form" method="post" action="{{ route("sendmessage") }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name" placeholder="Your Name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="subject" placeholder="Subject" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="phone" placeholder="Phone" class="form-control">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button class="aa-secondary-btn">Send</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="aa-contact-address-right">
                                        <address>

                                            {!! $setting->contact !!}
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>




                    <hr>
                </div>
            </div>
        </div>
    </section>


@endsection
