<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    private $data;
    public function feedback_list()
    {
        $this->data =  Feedback::orderByDesc('id')->paginate(10);
        return view('admin.pages.feedback.feedback_list', [
            'datas' => $this->data,
        ]);
    }
    public function feedback_view($id)
    {
        $this->data = Feedback::findOrFail($id);
        return view('admin.pages.feedback.feedback_view', [
            'data' => $this->data,
        ]);
    }
    public function feedback_add()
    {
        return view('admin.pages.feedback.feedback_add');
    }
    public function feedback_create(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'feedback' => 'required',

        ]);
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->feedback = $request->feedback;
        $feedback->save();
        return redirect()->back()->with('alert', [
            'title' => 'Success!',
            'text' => 'Feed back created Successfully.',
            'icon' => 'success',
        ]);
    }

    public function feedback_edit($id)
    {
        $this->data = Feedback::findOrFail($id);
        return view('admin.pages.feedback.feedback_edit', ['data' => $this->data]);
    }
    public function feedback_update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'feedback' => 'required',
        ]);
        $id = $request->id;
        $feedback = Feedback::findOrFail($id);
        $feedback->name = $request->name;
        $feedback->feedback = $request->feedback;
        $feedback->save();
        return redirect()->back()->with('alert', [
            'title' => 'Success!',
            'text' => 'Feed back update Successfully.',
            'icon' => 'success',
        ]);
    }
    public function feedback_delete($id)
    {
        $this->data = Feedback::findOrFail($id);
        $this->data->delete();
        $alert = [
            'title' => 'Success!',
            'text' => 'Feed back Delete Successfully.',
            'icon' => 'success',
        ];
        return redirect()->route('feedback_list')->with(['alert' => $alert]);
    }
}
