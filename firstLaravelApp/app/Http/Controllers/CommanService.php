<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommanService extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        echo "Invokable controller called";
    }
}
