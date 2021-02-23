<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
  /**
   * Display a listing of the resource.
    * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function send(Request $request){
      if ($request->ajax()) {
        $name_user = $request->input('name_user');
        $email_user = $request->input('email_user');
        $name_book = $request->input('name_book');
        $name_author = $request->input('name_author');
        $date = date("F j, Y, g:i a");
        $data = [
          'name_user'  => $name_user,
          'email_user'   => $email_user,
          'name_book' => $name_book,
          'name_author' => $name_author,
          'date' => $date
        ];

        Mail::send('mail',$data, function($message)  use ($data) {
          $message->to($data['email_user'],'')->subject(getenv('MAIL_TITLE'));
          $message->from(getenv('MAIL_USERNAME'),getenv('MAIL_FROM_NAME'));
        });
      }
    }
}
