<?php
namespace App\Http\Controllers;

use App\Models\InsuranceContract;
use App\Models\InsuranceIncident;
use App\Models\InsurancePayout;
use App\Models\InsuranceService;

class ManagerController extends Controller
{
    public function index()
    {
        $services = InsuranceService::with('parentService')->get();
        return view('manager.index', compact('services'));
    }

    public function contracts()
    {
        $contracts = InsuranceContract::with('contractDetails')->get();
        return view('manager.contracts', compact('contracts'));
    }

    public function Incidents()
    {
        $incidents = InsuranceIncident::with('contract', 'status')->get();
        return view('manager.incidents', compact('incidents'));
    }

    public function payouts()
    {
        $payouts = InsurancePayout::with('status', 'incident')->get();
        return view('manager.payouts', compact('payouts'));
    }
}
