<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Service\SettingService;

class SettingController extends Controller
{
    protected $settingService;
    public function __construct(SettingService $settingService)
    {
        $this->middleware('auth');
        $this->settingService = $settingService;
    }
    public function index()
    {
        $hasil = $this->settingService->getSetting();


        return view('dashboard.setting.indexnew',$hasil);

    }
    public function save(Request $request)
    {
        $data = $request->validate([
            'startdate'=>'sometimes|required|date',
            'enddate'=>'sometimes|required|date'
        ]);

        $this->settingService->updateSetting($data,$request);
        return redirect()->route('admin.setting');

    }
}
