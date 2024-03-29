<?php
namespace App\Service;
use Illuminate\Support\Facades\Cache;
use App\Repository\PemilihRepository;
class UserServiceImplement implements UserService {
    protected $pemilihRepository;
    function __construct(PemilihRepository $pemilihRepository)
    {
        $this->pemilihRepository = $pemilihRepository;
    }
    public function cekSession()
    {
        if(!empty(\Session::get('token'))){
            return redirect('/voting');
        }
    }
    public function login($data,$request)
    {
        
        $token = $data['usertoken'];
        
        $cek = Cache::remember("checkLogin_".$token.$data['userpassword'],now()->addSeconds(3),function() use($token,$data){
            return $this->pemilihRepository->whereArray(['username' => $token,'Password' => $data['userpassword']])->first();
        });
        $status = Cache::remember("checkStatusLogin_".$token.$data['userpassword'],now()->addSeconds(3),function() use($token,$data){
            return $this->pemilihRepository->whereArray(['username' => $token,
                                                'status_osis' => 2 ,'Password' => $data['userpassword']])->orWhere('status_mpk',2)->first();
        });
        if (!$cek) {
            \Session::flash('Gagal','Gagal Login');
            return redirect('/voting/login');
        } else {
            if(!$status){
                \Session::flash('Gagal','Token Yang Di Input Telah Digunakan');
                return redirect('/voting/login');   
            }else{
            $request->session()->put('token',$token);
            return redirect('/voting');
            }
        }
    }
    public function setPassword($data){
        $token = $data['usertoken'];
        $password = $data['userpassword'];
        
        $res =  Cache::remember("cekPassword_".$token,now()->addSeconds(3),function() use($token){
            return $this->pemilihRepository->whereArray(['username'=>$token])->whereNull('Password')->first();
        });
        if($res){
            try{
                $res->Password = $password;
                $res->save();
                return redirect('/voting/setPassword')->with('Success','Berhasil');
            }catch(Throwable $e){
                return redirect('/voting/setPassword')->with('Gagal','Gagal Set Password');
            }

        }else{
            return redirect('/voting/setPassword')->with('Gagal','Token Not Found / Password is Set');
        }
    }
}