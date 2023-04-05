<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $data;
    public $imagePath;
    public $imageName;
    public function service_list()
    {
        $this->data = Service::paginate(10);
        return view('admin.pages.service.service_list', [
            'datas' => $this->data
        ]);
    }
    public function service_view($id){
        $this->data = Service::findOrFail($id);
        return view('admin.pages.service.service_view', ['data' => $this->data]);
    }
    public function service_add()
    {
        return view('admin.pages.service.service_add');
    }
    public function service_create(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'url' => 'required',
            // 'status' => 'required',

        ]);

        $image = $request->file('image');
        $imageName = time() . '-' . $image->getClientOriginalName();
        $imagePath = public_path('/admin/uploads/images/');
        $image->move($imagePath, $imageName);

        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->image = $imageName;
        $service->url = $request->url;
        $service->status = $request->status;
        $service->save();

        if ($service) {

            return redirect()->back()->with('alert', [
                'title' => 'Success!',
                'text' => 'Service created successfully.',
                'icon' => 'success',
            ]);
        } else {
            unlink($imagePath . $imageName);
            return redirect()->back();
        }
    }
    public function service_edit($id)
    {
        $this->data = Service::findOrFail($id);
        return view('admin.pages.service.service_edit', ['data' => $this->data]);
    }
    public function service_update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'required',
            'url' => 'required',
            // 'status' => 'required',

        ]);
        $id = $request->id;
        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->url = $request->url;
        $service->status = $request->status;
        $previous_name = $service->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $this->imageName = time() . '-' . $image->getClientOriginalName();
            $this->imagePath = public_path('/admin/uploads/images/');
            $image->move($this->imagePath, $this->imageName);
            $service->image = $this->imageName;
        }

        $service->save();
        if ($service) {
            if ($request->hasFile('image')) {
                unlink($this->imagePath . $previous_name);
            }
            return redirect()->route('service_list');
        } else {
            if ($request->hasFile('image')) {
                unlink($this->imagePath . $this->imageName);
            }
            return redirect()->route('service_list');
        }
    }
    public function service_delete($id)
    {
        $this->data = Service::findOrFail($id);
        if (file_exists(public_path('/admin/uploads/images/' . $this->data->image))) {
            unlink(public_path('/admin/uploads/images/' . $this->data->image));
        }
        $this->data->delete();
        return redirect()->route('service_list')->with('alert',[
            'title' => 'Success!',
            'text' => 'Service delete successfully.',
            'icon' => 'success',
        ]);
    }

}
