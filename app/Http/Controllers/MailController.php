<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;

class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Alua.Otezhan';
        $objDemo->receiver = 'Alua.Otezhan';
 
        Mail::to("otezhan.alua@gmail.com")->send(new DemoEmail($objDemo));
    }
}
