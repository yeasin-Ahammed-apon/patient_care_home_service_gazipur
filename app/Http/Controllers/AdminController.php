<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Message;
use App\Models\PopulerService;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $data;
    public $imagePath;
    public $imageName;

    public function dashboard()
    {
         $Service = Service::count();
         $PopulerService = PopulerService::count();
         $Message = Message::count();
         $Feedback = Feedback::count();
         $UnReadMessageCount = Message::where('seen',0)->count();
         $UnReadMessage = Message::where('seen',0)->get();
        return view('admin.pages.dashboard',[
            "Service"=>$Service,
            "PopulerService"=>$PopulerService,
            "Message"=>$Message,
            "Feedback"=>$Feedback,
            "UnReadMessageCount"=>$UnReadMessageCount,
            "datas"=>$UnReadMessage,
        ]);
    }
    public function profile()
    {
        return view('admin.pages.profile');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }
}
