<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class MyTestmail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $mailData;
  
   
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }
 
    public function build()
    {
        return $this->subject('Testing E-Mail from Saurav Kumar Laravel CA 2 ')
                    ->view('emails.MyTestmail');
    }
}