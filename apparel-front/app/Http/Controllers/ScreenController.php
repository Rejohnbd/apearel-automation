<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ScreenController extends Controller
{
    public function first_flood(): Response
    {
        return Inertia::render('Screen');
    }
}
