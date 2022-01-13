<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Location;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Reservation::where('user_id',Auth::id())->get();
        return view("home.user_reservation",[
            'datalist'=>$datalist
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transfer=Transfer::find($request->transfer_id);
        $fromLoc=Location::find($request->from_location_id);
        $toLoc=Location::find($request->to_location_id);
        $lat_a=$fromLoc->lat;
        $lat_b=$toLoc->lat;
        $long_a=$toLoc->long;
        $long_b=$toLoc->long;
        $km=$this->DistAB($lat_a,$lat_b,$long_a,$long_b);
        $price=$km*$transfer->km_price;
        $data=new Reservation();
        $data->user_id=Auth::id();
        $data->transfer_id=$request->transfer_id;
        $data->from_location_id=$request->from_location_id;
        $data->to_location_id=$request->to_location_id;
        $data->Airline=$request->Airline;
        $data->flightnumber=$request->flightnumber;
        $data->flightdate=$request->flightdate;
        $data->flighttime=$request->flighttime;
        $data->pickuptime=$request->pickuptime;
        $data->note=$request->note;
        $data->price=round($price, 2);
        $data->IP=$request->ip();
        $data->save();
        return redirect()->route("user_reservation")->with("success","Randevunuz başarıyla alınmıştır");
    }



    public function DistAB($lat_a,$lat_b,$lon_a,$lon_b)

    {
        $delta_lat = $lat_b - $lat_a ;
        $delta_lon = $lon_b - $lon_a ;

        $earth_radius = 6372.795477598;

        $alpha    = $delta_lat/2;
        $beta     = $delta_lon/2;
        $a        = sin(deg2rad($alpha)) * sin(deg2rad($alpha)) + cos(deg2rad($lat_a)) * cos(deg2rad($lat_b)) * sin(deg2rad($beta)) * sin(deg2rad($beta)) ;
        $c        = asin(min(1, sqrt($a)));
        $distance = 2*$earth_radius * $c;
        $distance = round($distance, 4);

        return $distance;

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation, $id)
    {
        Reservation::destroy($id);
        return back()->with("success","Randevunuz Başarıyla İptal edildi.");
    }
}
