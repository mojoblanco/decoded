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
        $rd = $request->all();
        // Send mail
        Mail::to('mojoblanco@gmail.com')
           ->send(new EntrySubmitted($rd));

        return redirect()->route('success');    
    }
}
