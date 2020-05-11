<?php

namespace App\Http\Controllers;

use App\Notifications\SendResultsPdfNotification;
use App\Result;
use App\Mail\ResultMail;

class ResultsController extends Controller
{   
    
    public function show($result_id)
    {
        $result = Result::whereHas('user', function ($query) {
                $query->whereId(auth()->id());
            })->findOrFail($result_id);
        
        return view('client.results', compact('result'));
    }

    public function send($result_id)
    {

         $result = Result::whereHas('user', function ($query) {
                 $query->whereId(auth()->id());
             })->findOrFail($result_id);

        \Mail::to('test@eam.com')->send(new ResultMail($result));

        return redirect()->route('client.results.show', $result->id)->withStatus('Your test result has been sent successfully!');
    }
}
