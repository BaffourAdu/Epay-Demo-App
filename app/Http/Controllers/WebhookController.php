<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        $body = $request->getContent();
        $response = json_decode($body, true);

        $pageId = $response['page']['id'];

        if ($pageId == 73) {
            //Send Email of Success registration with reference as ticket ID
            $title = 'Event Registration Successful';
            $content = 'You have successfully registered for <b>Demo Event</b>. Your <b>Ticket ID:'. $response['transaction']['reference'] .'</b>. Kindly Show this at the entrace of the gate.';

            Mail::send('emails.event', ['title' => $title, 'content' => $content], function ($message) {
                $message->from('demo@epaygh.com', 'Epay Demo');

                $message->to($email);
            });
        }
    }
}
