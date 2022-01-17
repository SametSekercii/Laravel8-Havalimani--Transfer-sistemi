<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Transfer;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view("home.user_profile");
    }

    public function myreview(){
        $datalist=Review::where('user_id','=',Auth::id())->get();
        return view("home.user_review",[
            'datalist'=>$datalist
        ]);
    }
    public function reservation_alma(){
        $datalist=Location::where("Status","Boş")->get();
        $service_list=Transfer::where("status","True")->get();
        return view("home.reservation_page",[
            'datalist'=>$datalist,
            'service_list'=>$service_list
        ]);
    }
    public function locationgetir($id){
        if($id!=0){
            $datalist=Location::where("date",$id)->where("status","true")->get();
            return view("home.reservation_location",[
                'location'=>$datalist
            ]);
        }
    }

    public function deletereview(Review $review,$id)
    {
        Review::destroy($id);
        return redirect()->route("myreview");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
