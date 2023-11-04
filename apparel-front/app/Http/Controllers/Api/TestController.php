<?php

namespace App\Http\Controllers\Api;

use App\Events\RealTimeMessage;
use App\Http\Controllers\Controller;
use App\Models\DailyProduction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function testApi(Request $request)
    {
        // Log::info($request->all());
        $date = Carbon::now()->toDateString();
        $checkExist = DailyProduction::where('machine_type_id', $request->deviceId)->where('date', $date)->first();
        if (is_null($checkExist)) {
        } else {
            $checkExist->item_number = $checkExist->item_number + $request->quantity;
            $checkExist->save();
        }
        $data = DailyProduction::with('machineType')
            ->where('date', $date)
            ->orderBy('item_number', 'DESC')
            ->get();
        // dd($data);
        // Log::info($checkExist);
        event(new RealTimeMessage($data));
        // Need to validate API Secret Key
        return Response([
            'status'    => true,
            'message'   => 'Got Mqtt Data',
        ], Response::HTTP_OK);
    }
}
