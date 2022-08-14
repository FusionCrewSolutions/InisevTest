<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendAllMailsController extends Controller
{
    public function sendallMails(Request $request)
    {
        $details = [
            'subject' => 'Notification'
        ];
 
        // send all mail in the queue.
        $job = (new AppJobsSendBulkQueueEmail($details))
            ->delay(
                now()
                ->addSeconds(2)
            ); 
 
        dispatch($job);
 
        echo "Subscribers are notified successfully in the background...";
    }
}
