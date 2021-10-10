<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\DashboardService;

class DashboardController extends Controller
{
            protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
            $this->middleware('auth');
            $this->dashboardService = $dashboardService;
    }

    public function index()
    {
    	    return view('dashboard/indexnew');
    }

    public function ApiDashboard(Request $request)
    {
            return $this->dashboardService->ApiDashboard($request);
    }

    public function getChart(Request $request)
    {

            return $this->dashboardService->Chart($request);
    }
}
