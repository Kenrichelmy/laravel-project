<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class NotificationController extends Controller
{
    
    public function sendSmsNotificaition()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('38a27f37', ' efLFjddpa65ELRxK');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '66110120',
            'from' => 'John Doe',
            'text' => 'A simple hello message sent from Vonage SMS API'
        ]);
 
        dd('SMS message has been delivered.');
    }
}
