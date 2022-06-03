<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function contact(){
        return view('admin.mail.contact');
    }

    public function sendMail(Request $request){
        Mail::to("support.BoolPress@gmail.com")->send(new SendNewMail($request->author, $request->authorMail, $request->authorMessage));
        return redirect()->route('admin.sendedContact');
    }

    public function sended(){
        return view('admin.mail.sendedContact');
    }
}
