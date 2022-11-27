<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\MyTestMail;


class MailController extends Controller
{

    public function send(Request $request)
    {
        $details = [
            'name'=>'Mesajı gönderen:    '. $request->name,
            'email'=>' Mail adresi:   ' .$request->email,
            'subject'=>'Konu:   ' .$request->subject,
            'message'=>'Mesaj:   ' .$request->message,
        ];

        \Mail::to($request->email)->send(new MyTestMail($details));

        dd ("mesajınız iletildi");
    }

}
