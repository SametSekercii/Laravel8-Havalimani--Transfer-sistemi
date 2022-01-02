<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Review;
use App\Models\Message;
use App\Models\Transfer;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    public static function countview($id){
        return Review::where("service_id",$id)->count();
    }
    public static function averageview($id){
        return Review::where("service_id",$id)->average('rate');
    }

    public static function categorylist(){
        return Category::where('parent_id','=',0)->with("children")->get();
    }
    public static function settinglist(){
        return Setting::first();
    }
    public function index(){
        $setting=Setting::first();
        $slider=Transfer::select('title','id','slug','image','price','category_id')->limit(4)->get();
        $popular=Transfer::limit(8)->inRandomOrder()->get();
        $picked=Transfer::limit(16)->inRandomOrder()->get();
        return view("home.index",[
            'setting'=>$setting,
            'slider'=>$slider,
            'populer'=>$popular,
            'picked'=>$picked,
        ]);
    }
    public function contact(){
        $setting=Setting::first();
        return view("home.iletisim",[
            'setting'=>$setting
        ]);
    }
    public function sendmessage(Request $request){
        $data= new Message();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->ip=$_SERVER["REMOTE_ADDR"];
        $data->save();
        return redirect()->route("contact")->with("success","Mesajiniz Basariyla Gonderilmisdir.");
    }

    public function aboutus(){
        $setting=Setting::first();
        return view("home.hakkimizda",[
            'setting'=>$setting
        ]);
    }
    public function faq(){
        $data=Faq::where("status",'=','True')->get();
        return view("home.faq",[
            'data'=>$data
        ]);
    }
    public function referance(){
        $setting=Setting::first();
        return view("home.referans",[
            'setting'=>$setting
        ]);
    }
    public function category_service($id){
        $datalist=Transfer::where("category_id",$id)->get();
        $data=Category::find($id);
        return view("home.category_service",[
            'data'=>$data,
            'datalist'=>$datalist
        ]);
    }
    public function service_detail($id){
        $data=Transfer::find($id);
        $galery=Image::where("product_id",$id)->get();
        $review=Review::where("service_id",$id)->where("status","True")->get();
        return view("home.service_detail",[
            'data'=>$data,
            'galery'=>$galery,
            'review'=>$review,
        ]);
    }
    public function getproduct(Request $request){
        $search=$request->search;
        $data=Transfer::where("title",'like','%'.$search.'%')->get()->count();
        if($data==1){
            $data=Transfer::where("title",'like','%'.$search.'%')->first();
            return redirect()->route("service_detail",[$data->id,$data->slug]);
        }
        else{
            return redirect()->route('productlist',[$search]);
        }
    }
    public function productlist($search){
        $datalist=Transfer::where("title",'like','%'.$search.'%')->get();
        if(isEmpty($datalist)){
            return view('home.service_list',[
                'datalist'=>$datalist,
                'word'=>$search
            ])->with("warning","Aramaniza uygun sonuc bulunamadi");
        }
        else{
            return view('home.service_list',[
                'datalist'=>$datalist,
                'word'=>$search
            ]);
        }
    }

    public function login(){
        if(Auth::guest()){
            return view("admin.login");
        }
        else{
            return redirect()->route("profile.show")->with("error","Your have not permission to enter Admin-Panel");
        }
    }
    public function login_check(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('adminhome');
        }

        return back()->withErrors([
            'email' => 'Email ve ya şifre yanlış.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
