<?php
namespace App\Service;
interface SettingService{
    public function getSetting();
    public function updateSetting($data,$request);

}