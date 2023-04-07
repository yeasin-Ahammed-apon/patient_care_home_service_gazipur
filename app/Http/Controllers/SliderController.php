<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $data;
    public $imagePath;
    public $imageName;
    public function slider_list()
    {
        $this->data = Slider::paginate(10);
        return view('admin.pages.slider.slider_list', [
            'datas' => $this->data
        ]);
    }
    public function slider_view($id){
        $this->data = Slider::findOrFail($id);
        return view('admin.pages.slider.slider_view', ['data' => $this->data]);
    }
    public function slider_add()
    {
        return view('admin.pages.slider.slider_add');
    }
    public function slider_create(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '-' . $image->getClientOriginalName();
        $imagePath = public_path('/admin/uploads/images/');
        $image->move($imagePath, $imageName);

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->image = $imageName;
        $slider->save();

        if ($slider) {

            return redirect()->back()->with('alert', [
                'title' => 'Success!',
                'text' => 'slider created successfully.',
                'icon' => 'success',
            ]);
        } else {
            unlink($imagePath . $imageName);
            return redirect()->back();
        }
    }
    public function slider_edit($id)
    {
        $this->data = Slider::findOrFail($id);
        return view('admin.pages.slider.slider_edit', ['data' => $this->data]);
    }
    public function slider_update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $id = $request->id;
        $slider = Slider::findOrFail($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        $previous_name = $slider->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $this->imageName = time() . '-' . $image->getClientOriginalName();
            $this->imagePath = public_path('/admin/uploads/images/');
            $image->move($this->imagePath, $this->imageName);
            $slider->image = $this->imageName;
        }

        $slider->save();
        if ($slider) {
            if ($request->hasFile('image')) {
                unlink($this->imagePath . $previous_name);
            }
            return redirect()->route('slider_list');
        } else {
            if ($request->hasFile('image')) {
                unlink($this->imagePath . $this->imageName);
            }
            return redirect()->route('slider_list');
        }
    }
    public function slider_delete($id)
    {
        $this->data = Slider::findOrFail($id);
        if (file_exists(public_path('/admin/uploads/images/' . $this->data->image))) {
            unlink(public_path('/admin/uploads/images/' . $this->data->image));
        }
        $this->data->delete();
        return redirect()->route('slider_list')->with('alert',[
            'title' => 'Success!',
            'text' => 'slider delete successfully.',
            'icon' => 'success',
        ]);
    }

}
