<?php

namespace App\Http\Controllers;

use App\Models\InsuranceService;

class ServiceController extends Controller
{
    public function showServices()
    {
        $services = InsuranceService::with('parentService')->get();

        return view('services', compact('services'));
    }
}
