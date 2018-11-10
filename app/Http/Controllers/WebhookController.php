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

        if ($response['transaction']['page']['id'] == 73) {
            if ($response['transaction']['status'] == 'success') {
                //Compose Email of successful registration with reference as ticket ID
                $title = 'Event Registration Successful';
                $content = 'Dear '.$response['transaction']['customer']['name']. ', you have successfully registered for Demo Event. 
                    Your Ticket ID:'. $response['transaction']['reference'] .'. Kindly show this email at the entrace of the gate.';
            } else {
                //Compose registration failure Email
                $title = 'Event Registration Failed';
                $content = 'Dear '.$response['transaction']['customer']['name']. ', we are sorry you were not able to register for this event.
                We hope you retry again as we investigate the cause of the failure. Thank you for showing interest in our event and we would love to have you attend.';
            }

            //Get Customer Email
            $email = $response['transaction']['customer']['email'];

            //Send Email
            Mail::send('emails.event', ['title' => $title, 'content' => $content], function ($message) use ($email) {
                $message->from('demo@epaygh.com', 'Epay Demo');
                $message->to($email);
                //Add a subject
                $message->subject("Demo Event Registration");
            });
        }
    }
}
