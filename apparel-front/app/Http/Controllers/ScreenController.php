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
        // $data = array(
        //     'deviceId' => 'juki-abcd',
        //     'employeeId' => 15,
        //     'quantity' => 200,
        //     'type' => 'shoulder'
        // );
        // MQTT::publish('first-floor', json_encode($data));
        return Inertia::render('Screen');
    }
}
