<?php
namespace App\Http\Controllers;

use App\Models\InsuranceService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $services = InsuranceService::with('parentService')->get();
        return view('admin.index', compact('services'));
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

    public function edit($id)
    {
        $service = InsuranceService::findOrFail($id);
        $parentServices = InsuranceService::whereNull('ParentServiceId')->where('Id', '!=', $id)->get();
        return view('admin.edit', compact('service', 'parentServices'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'ParentServiceId' => 'nullable|exists:insuranceservices,Id'
        ]);

        $service = InsuranceService::findOrFail($id);
        $service->update($request->all());
        return redirect()->route('admin.index')->with('success', 'Послугу оновлено!');
    }

    public function destroy($id)
    {
        $service = InsuranceService::findOrFail($id);
        $service->delete();
        return redirect()->route('admin.index')->with('success', 'Послугу видалено!');
    }
}
