<?php

namespace App\Http\Controllers;

use App\Models\DailyProduction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;
use Inertia\Inertia;
use Inertia\Response;


class ScreenController extends Controller
{
    public function first_floor(): Response
    {
        $date = Carbon::now()->toDateString();
        // dd($date);
        // $collections = DailyProduction::with('machineType')
        //     ->where('date', $date)
        //     ->get()
        //     ->groupBy('machine_type_id')
        //     ->map(function ($item) {
        //         // dd($item->machineType);
        //         // return $item->machineType();
        //         return $item->sum('item_number');
        //         // $item->orderBy('ASC');
        //         // return $item;
        //     });
        // dd($collections);
        // $data = $collections->map(function ($collection) {

        //     dd($collection->sum('item_number'), $collection->machine_type, 'here');
        // });
        // dd($data);
        // $data = array(
        //     'deviceId' => 'juki-abcd',
        //     'employeeId' => 15,
        //     'quantity' => 200,
        //     'type' => 'shoulder'
        // );
        $data = DailyProduction::with('machineType')
            ->where('date', $date)
            ->orderBy('item_number', 'DESC')
            ->get();
        // dd($data);
        return Inertia::render('Screen', [
            'data' => $data
        ]);
    }
}
