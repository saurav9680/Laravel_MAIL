<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\MyTestMail;
  
class MailController extends Controller
{

    public function index()
    {
        $mailData = [
            'title' => 'Testing E-Mail from Saurav Kumar Laravel CA 2 using SMTP',
            'body' => 'This Mail is Sent using SMTP from LARAVEL.'
        ];
         
        Mail::to('sauravemulatordevice@gmail.com')->send(new MyTestMail($mailData));
           
        echo ("Email sent successfully.");
    }
}