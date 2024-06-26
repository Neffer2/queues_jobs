<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Jobs\MyFirstJob;
use Illuminate\Http\RedirectResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dispatch(): RedirectResponse
    {
        $sms = 'Hello World';
        MyFirstJob::dispatch($sms);
        return redirect()->route('home')->with('success', 'Todo bajo control!');
    }
    // ? Push en dev
}
 