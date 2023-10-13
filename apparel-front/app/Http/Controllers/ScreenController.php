<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;
use Inertia\Inertia;
use Inertia\Response;


class ScreenController extends Controller
{
    public function first_floor(): Response
    {
        MQTT::publish('/some/topic', 'Hello World! Rejohn');
        return Inertia::render('Screen');
    }
}
