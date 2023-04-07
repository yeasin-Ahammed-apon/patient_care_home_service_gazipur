<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Message;
use App\Models\PopulerService;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public $data = null;
    public function home(){
        $PopulerServices = PopulerService::with('service')->get();
        $feedbacks = Feedback::all();
        $sliders = Slider::all();
        return view('user.pages.home',[
            'feedbacks'=>$feedbacks,
            'PopulerServices'=>$PopulerServices,
            'sliders'=>$sliders
        ]);
    }
    public function our_services(){
        $this->data = Service::paginate(9);
        return view('user.pages.our_services',[
            "datas" => $this->data
        ]);
    }


    public function service($url){
        $this->data = Service::where('url', '=', $url)->first();
        if ($this->data) {
            return view('user.pages.service',[
                "data" => $this->data
            ]);
        }else{
            abort(404);
        }
    }

    public function login(){
        return view('login.login');
    }
    public function check(Request $request){
        // validate
        //contain in variabel
        $email =  $request->email;
        $password =  $request->password;
        // check if dev or not
        if ($email==="admin@admin.com"&&$password === "112233") {
            session(['email' => 'admin@admin.com']);
            session(['name' => 'Super Admin']);
            session(['role' => '1']);
            return redirect()->route('dashboard');
        }
        return redirect()->back();
        //normal user check and get pass

    }
    public function contact_us(){
        return view('user.pages.contact_us');
    }
    public function message(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'number' => 'required|max:11|min:11',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);
         Message::newMassage($request);
         return redirect()->route('contact_us');
    }
    public function about_us(){
        return view('user.pages.about_us');
    }
}

