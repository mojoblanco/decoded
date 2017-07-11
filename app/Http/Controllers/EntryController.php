<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\EntrySubmitted;
use App\Http\Requests\EntryRequest;


class EntryController extends Controller
{
    public function getEntry(EntryRequest $request) 
    {
        $reciepient = config('app.reciever');
        $rd = $request->all();
        // Send mail
        Mail::to($reciepient)
           ->send(new EntrySubmitted($rd));

        return redirect()->route('success');    
    }
}
