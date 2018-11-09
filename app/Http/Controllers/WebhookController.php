<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        $body = $request->getContent();
        $response = json_decode($body, true);
        //return $response;
        $pageId = $response['transaction']['page']['id'];

        if ($pageId == 73) {
            $email = $response['transaction']['customer']['email'];
            //Send Email of successful registration with reference as ticket ID
            $title = 'Event Registration Successful';
            $content = 'Dear '.$response['transaction']['customer']['name']. ', you have successfully registered for <b>Demo Event</b>. 
                    Your <b>Ticket ID:'. $response['transaction']['reference'] .'</b>. Kindly Show this at the entrace of the gate.';

            Mail::send('emails.event', ['title' => $title, 'content' => $content], function ($message) use ($email) {
                $message->from('demo@epaygh.com', 'Epay Demo');

                $message->to($email);

                //Add a subject
                $message->subject("Demo Event Registration");
            });
        }
    }
}
