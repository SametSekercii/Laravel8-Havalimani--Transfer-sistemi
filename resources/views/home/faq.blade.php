@extends('layouts.home')

@section('title',"Sıkça Sorulan Sorular")
@section('keywords',"Sıkça Sorulan Sorular")
@section('description',"Sıkça Sorulan Sorular")
@section("head")
    <style>
        .accordionn {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .activee, .accordionn:hover {
            background-color: lightskyblue;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>
@endsection


@section('content')
    <section id="aa-catg-head-banner" style="height: 100px;">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Sıkça Sorulan Sorular</li>
        </ol>
    </section>
    <section id="aa-blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($data as $rs)
                    <button class="accordionn">{{$rs->question}}</button>
                    <div class="panel">
                        <p>
                            {{$rs->answer}}
                        </p>
                    </div>
                    @endforeach



                    <script>
                        var acc = document.getElementsByClassName("accordionn");
                        var i;

                        for (i = 0; i < acc.length; i++) {
                            acc[i].addEventListener("click", function() {
                                this.classList.toggle("activee");
                                var panel = this.nextElementSibling;
                                if (panel.style.display === "block") {
                                    panel.style.display = "none";
                                } else {
                                    panel.style.display = "block";
                                }
                            });
                        }
                    </script>



                    <hr>
                </div>
            </div>
        </div>
    </section>


@endsection
