<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;

class EmailController extends Controller
{
    //
    public function index()
    {
    	return view('admin.emailing.index');
    }

    public function sendEmial(){
    	//dd('ok');
    	$data = request()->all();
    	//dd($data);
    	Mail::to($data['mail'])->send(new ContactMail());
    	return redirect()->route('emailing');
    }
}
