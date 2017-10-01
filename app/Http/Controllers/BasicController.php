<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;
use Auth;

class BasicController extends Controller
{
    public function index(){
          if(Auth::check()){
              return view('base.member');
          }else{
              return view('base.home');
          }
    }

    public function services(){
          return view('base.services');
    }

    public function contact(){
          return view('base.contact');
    }

    public function processContact(Request $request){
          $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
           ]);
           $mailable = new ContactUs($request);
           $mailable->replyTo($request->email, $request->name);
           Mail::to('contact@nereusdesign.com')->send($mailable);
           Session::flash('status', "Thanks for contacting us. Someone will respond to you shortyly.");
           return view('base.contact');
    }


    public function estimate(){
           return view('base.estimate');
    }

    public function processEstimate(Request $request){
          $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'goals' => 'required'
           ]);
           $mailable = new FreeEstimate($request);
           $mailable->replyTo($request->email, $request->name);
           Mail::to('contact@nereusdesign.com')->send($mailable);
           Session::flash('status', "Thanks for contacting us. Someone will review your request and be in touch.");
           return view('base.estimate');
    }


}
