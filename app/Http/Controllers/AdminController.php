<?php
namespace App\Http\Controllers;

use App\Models\InsuranceContract;
use App\Models\InsuranceIncident;
use App\Models\InsurancePayout;
use App\Models\InsuranceService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $services = InsuranceService::with('parentService')->get();
        return view('admin.index', compact('services'));
    }

    public function contracts()
    {
        $contracts = InsuranceContract::with('contractDetails')->get();
        return view('admin.contracts', compact('contracts'));
    }

    public function Incidents()
    {
        $incidents = InsuranceIncident::with('contract', 'status')->get();
        return view('admin.incidents', compact('incidents'));
    }

    public function payouts()
    {
        $payouts = InsurancePayout::with('status', 'incident')->get();
        return view('admin.payouts', compact('payouts'));
    }

    public function repts(Request $request)
    {
        // Получаем параметры фильтрации
        $reportType = $request->get('report_type', 'contracts');  // Тип отчета
        $dateFrom = $request->get('date_from');
        $dateTo = $request->get('date_to');

        $data = [];

        switch ($reportType) {
            case 'contracts':
                $data = InsuranceContract::with(['service', 'paymentStatus'])
                    ->when($dateFrom && $dateTo, function ($query) use ($dateFrom, $dateTo) {
                        return $query->whereBetween('StartDate', [$dateFrom, $dateTo]);
                    })
                    ->get();
                break;

            case 'incidents':
                $data = InsuranceIncident::with(['contract', 'status'])
                    ->when($dateFrom && $dateTo, function ($query) use ($dateFrom, $dateTo) {
                        return $query->whereBetween('IncidentDate', [$dateFrom, $dateTo]);
                    })
                    ->get();
                break;

            case 'payouts':
                $data = InsurancePayout::with(['incident', 'status'])
                    ->when($dateFrom && $dateTo, function ($query) use ($dateFrom, $dateTo) {
                        return $query->whereBetween('PayoutDate', [$dateFrom, $dateTo]);
                    })
                    ->get();
                break;

            default:
                // Ошибка, если передан неизвестный тип отчета
                return back()->withErrors('Невідомий тип звіту.');
        }

        return view('admin.repts', compact('data', 'reportType', 'dateFrom', 'dateTo'));
    }

    public function create()
    {
        $parentServices = InsuranceService::whereNull('ParentServiceId')->get();
        return view('admin.create', compact('parentServices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'ParentServiceId' => 'nullable|exists:insuranceservices,Id'
        ]);

        InsuranceService::create($request->all());
        return redirect()->route('admin.index')->with('success', 'Послугу додано!');
    }

    public function edit($id){

    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id){
    $service = InsuranceService::findOrFail($id);
    $service->delete();
    return redirect()->route('admin.index')->with('success', 'Послугу видалено!');
    }
}
