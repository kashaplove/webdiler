<?php

namespace App\Http\Controllers;

use App\Mail\OfferMail;
use App\Models\Good;
use App\Models\User;
use App\Notifications\HelloUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
//        $user = auth()->user();
//        $user->notify(new HelloUser());
//        dd($user);
//        $goods = Good::where('name', 'like', "%блок%")->get();
        $goods = Good::where('name', 'like', '%блок%')->get();
        Mail::send('mails.personal_offer', compact('goods'), function ($message) {
            $message->to(auth()->user()->email,'To myself')->subject('Скидки в WEBDILER! У вас есть персональные скидки на товары, которыми Вы интересовались!');
            $message->from('webdilermail@gmail.com','WEBDILER');
        });

//        Mail::to(auth()->user()->email)->send(new OfferMail($goods));
    }

//    public function email() {
//        return view('email');
//    }
}
