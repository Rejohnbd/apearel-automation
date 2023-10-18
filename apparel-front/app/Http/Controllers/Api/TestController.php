<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function testApi(Request $request)
    {
        Log::info($request->all());
        return Response([
            'status'    => true,
            'message'   => 'Got Mqtt Data',
        ], Response::HTTP_OK);
    }
}
