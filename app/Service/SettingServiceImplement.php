<?php
namespace App\Service;

use App\Repository\SettingRepository;
class SettingServiceImplement implements SettingService {
    protected $settingRepository;
    function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }
    public function getSetting()
    {
        $res = $this->settingRepository->getAll()->toArray();

        if($res){
            $array = [];
            foreach($res as $result){

                $name = $result->name;
                $value =  $result->value;  
                $array = array_merge($array,array($name=>$value));
                
    
            }
           return $array;
    }else{
            abort(500);
        }
    }
    public function updateSetting($data,$request)
    {

        try{
            $startdate = strtotime($data['startdate']);
            $enddate = strtotime($data['enddate']);
    
    
            $array = ['startdate'=>$startdate,'enddate'=>$enddate];
        foreach($array as $keys => $arr)
        {
            $update = $this->settingRepository->updateWhereName($keys,['value'=>$arr]);
 
        }

        $request->session()->flash('alert','Success !');
    }catch(\Exception $e){
        $request->session()->flash('alert',$e->getMessage());
    }
    }
}