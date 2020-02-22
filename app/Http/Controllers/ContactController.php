<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function state()
    {
        return view('others.state');
    }

    public function add_state(Request $request)
    {
        $state = new State;
        $state->State = $request->State;
        $state->save();

        return redirect()->back();
    }
}
