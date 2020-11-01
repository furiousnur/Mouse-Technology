<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Library\UserInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Keygen\Keygen;

class KeyGenerateController extends Controller
{
    protected $repo;
    public function __construct(UserInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        if (Auth::user()->user_type == 'admin'){
            return view('backend.dashboard.key-generate');
        }else{
            return redirect()->back();
        }
    }

    public function allUser()
    {
        if (Auth::user()->user_type == 'admin'){
            $users = $this->repo->getAll();
            return view('backend.dashboard.all-user',compact('users'));
        }else{
            return redirect()->back();
        }
    }

    public function myProfile()
    {
        return view('backend.dashboard.profile');
    }

    public function getDetails(Request $request){
        $user = User::findOrFail($request->id);
        return $user;
    }

    public function getKeyGenerate(Request $request){
        $user = User::where('id',$request->id)->first();
        if ($user->license_key!=null && $user->expire_date!=null){
            $concatKey =Crypt::decrypt($user->license_key);
            return array($concatKey);
        }else{
            $key = Keygen::numeric(10)->generate(true);
            $user_id = $request->id;
            $expire_date = $request->expire_date;
            $concatKey =$key.$user_id.$expire_date;
            $keyGenerate = Crypt::encrypt($concatKey);
            $user->expire_date = $request->expire_date;
            $user->license_key = $keyGenerate;
            $user->update();
            return $concatKey;
        }
    }

    public function activeLicense(){
        return view('backend.dashboard.active-license');
    }

    public function activeLicenseByKey(Request $request){
        $users = User::all();
        foreach ($users as $user){
            $key = Crypt::decrypt($user->license_key);
            if ($key==$request->license){
                $profile = User::findOrFail($user->id);
                if ($profile->status == 2){
                    return 0;
                }else{
                    $profile->status = 2;
                    $profile->expire_date = Carbon::now()->addMonth($user->expire_date)->format('Y-m-d');
                    $profile->update();
                    return $profile;
                }
//                dump(\Log::info(print_r($profile,true)));
            }
        }
    }
}
