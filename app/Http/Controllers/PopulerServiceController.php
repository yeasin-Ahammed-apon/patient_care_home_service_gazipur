<?php

namespace App\Http\Controllers;

use App\Models\PopulerService;
use App\Models\Service;
use Illuminate\Http\Request;

class PopulerServiceController extends Controller
{
    private $data;
    public function populer_service_list(){
        $this->data = PopulerService::with('service')->paginate(10);
        return view('admin.pages.populerService.populerService_list',[
            'datas'=> $this->data
        ]);
    }
    public function populer_service_add(){
        $this->data = Service::all();
        return view('admin.pages.populerService.populerService_add',[
            'datas'=> $this->data
        ]);
    }
    public function populer_service_create(Request $request){
        $this->data =new PopulerService();
        $this->data->service_id = $request->service_id;
        $this->data->save();
        return redirect()->back()->with('alert',[
            'title' => 'Success!',
            'text' => 'Populer Service created successfully.',
            'icon' => 'success',
        ]);
    }
    public function populer_service_edit($id){
        $this->data = Service::all();
        $PopulerService = PopulerService::findOrFail($id);
        return view('admin.pages.populerService.populerService_edit', [
            'datas' => $this->data,
            'PopulerService'=>$PopulerService
        ]);
    }
    public function populer_service_update(Request $request){
        $id = $request->id;
        $this->data = PopulerService::findOrFail($id);
        $this->data->service_id = $request->service_id;
        $this->data->save();
        return redirect()->back()->with('alert',[
            'title' => 'Success!',
            'text' => 'Populer Service Updated successfully.',
            'icon' => 'success',
        ]);
    }
    public function populer_service_delete($id){
        $this->data = PopulerService::findOrFail($id);
        $this->data->delete();
        return redirect()->route('populer_service_list')->with('alert',[
            'title' => 'Success!',
            'text' => 'Populer Service created successfully.',
            'icon' => 'success',
        ]);
    }
}
