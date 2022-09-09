<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Service\UserService;
class UserController extends Controller
{
    protected $userService;

    function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        return redirect("/voting");
    }
    public function votinglogin()
    {
        $this->userService->cekSession();
        return view('user.votinglogin');
    }

    public function cektoken(Request $request)
    {
        $data = $request->validate(['usertoken'=>'required|max:8','userpassword'=>'required']);
        return $this->userService->login($data,$request);
 
        
    }
    public function setPasswordPage(Request $request)
    {
        $this->userService->cekSession();

        return view('user.setPassword');
    }  
    public function setPassword(Request $request)
    {
        $this->userService->cekSession();

        $data = $request->validate(['usertoken'=>'required|max:8','userpassword'=>'required']);

        return $this->userService->setPassword($data);
            
    }  
}
