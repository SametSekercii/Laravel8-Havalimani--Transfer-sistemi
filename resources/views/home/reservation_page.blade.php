@extends('layouts.home')

@section('title',"Reservation Alma")
@section('keywords',"Reservation Alma")
@section('description',"Reservation Alma")


@section('content')
    <section id="aa-catg-head-banner" style="height: 100px;">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Reservasyom Yapma Alma</li>
        </ol>
    </section>
    <section id="aa-blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route("user_reservation_store") }}" method="post">
                        @csrf
                        <label for="time_id">Hizmet Seç&nbsp;:</label>
                        <select required class="form-control" name="transfer_id">
                            @foreach(\App\Models\Transfer::where('status','true')->get() as $rs)
                                <option value="{{$rs->id}}">{{$rs->title}} - {{$rs->capacity}} kişi</option>
                            @endforeach
                        </select>
                        <hr>
                        <label for="time_id">Alınacak Adres&nbsp;:</label>
                        <select required class="form-control" name="from_location_id">
                            @foreach(\App\Models\Location::where('status','true')->get() as $rs)
                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <label for="time_id">Bırakılacak Adres&nbsp;:</label>
                        <select required class="form-control" name="to_location_id">
                            @foreach(\App\Models\Location::where('status','true')->get() as $rs)
                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <label for="time_id">Uçuş Hattı &nbsp;:</label>
                        <input class="form-control" type="text" name="Airline">
                        <hr>
                        <label for="time_id">Uçuş Numarası &nbsp;:</label>
                        <input class="form-control" type="number" name="flightnumber">
                        <hr>
                        <label for="time_id">Uçuş Tarih &nbsp;:</label>
                        <input class="form-control" type="date" name="flightdate">
                        <hr>
                        <label for="time_id">Uçuş Saat &nbsp;:</label>
                        <input class="form-control" type="time" name="flighttime">
                        <hr>
                        <label for="time_id">Alınacak Saat &nbsp;:</label>
                        <input class="form-control" type="time" name="pickuptime">
                        <hr>
                        <button class="btn btn-primary" type="submit"> Rezervasyon Yap</button>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <script>
        function vericek(a) {
            $.ajax({
                url: a,
                type: 'GET',
                success: function (result) {
                    $('.veriler').html(result);
                }
            });
        }

    </script>


@endsection
