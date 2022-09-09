<?php

namespace App\Http\Middleware;

use Closure;

use App\Repository\SettingRepository;
class TimeToVoteMiddleware
{
    function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $res = $this->settingRepository->getAll()->toArray();

        $array = [];
        if($res){

            foreach($res as $result){

                $result = $result;
                $name = $result->name;
                $value =  $result->value;  
                $array = array_merge($array,array($name=>$value));
                
    
            }
           $hasil = $array;
    }else{
            $hasil = null;
        }
        if($hasil){
            $time = time();
            if($time>=$hasil['startdate']){
                if($time<=$hasil['enddate']){
                    return response()->view('errors.voteSelesai');
                }else{
                    return $next($request);
                }
            }else{

                return response()->view('errors.voteNotReady',['startdate'=>$hasil['startdate']."000"]);
            }
        }else{
            abort(500);
        }

    }
}
