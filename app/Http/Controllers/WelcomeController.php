<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function root()
    {
        return redirect()
            ->route('dashboard');
    }
}
