<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public  static $message;
    public static function newMassage($request){
        self::$message = new Message();
        self::$message->name = $request->name;
        self::$message->email = $request->email;
        self::$message->number = $request->number;
        self::$message->subject = $request->subject;
        self::$message->message = $request->message;
        self::$message->save();
    }
}

