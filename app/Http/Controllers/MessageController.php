<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $data;
    public function message_list(){
        $this->data =  Message::orderByDesc('id')->paginate(10);
        $count = count($this->data);
        // return dd($count);
        return view('admin.pages.message.message_list',[
            'datas'=>$this->data,
            'count'=>$count
        ]);
    }
    public function message_view($id){
        $this->data = Message::findOrFail($id);
        // return dd($count);
        return view('admin.pages.message.message_view',[
            'data'=>$this->data,
        ]);
    }
    public function message_delete($id){
        $this->data = Message::findOrFail($id);
        $this->data->delete();
        $alert = [
            'title' => 'Success!',
            'text' => 'Message delete successfully.',
            'icon' => 'success',
        ];
        return redirect()->route('message_list')->with(['alert'=>$alert]);
    }
    public function message_mark_as_read($id){
        $this->data = Message::findOrFail($id);
        if ($this->data->seen===0) {
            $this->data->seen = 1;
        } else {
            $this->data->seen = 0;
        }
        $this->data->save();
        $alert = [
            'title' => 'Success!',
            'text' => 'Message Status updated successfully.',
            'icon' => 'success',
        ];
        return redirect()->back()->with(['alert'=>$alert]);
    }
}
