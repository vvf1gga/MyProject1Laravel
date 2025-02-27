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
}
