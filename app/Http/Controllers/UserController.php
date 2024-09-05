<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register(Request $request) {
        $userData = $request->all();

        $validator = Validator::make($userData,[
            'email' => 'required|unique:users|email:rfc,dns,filter',
            'password' => 'required',
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect(route('register-page'))
                ->withErrors($validator)
                ->withInput();
        }
        $user = new User();
        $user->email = $userData['email'];
        $user->password = $userData['password'];
        $user->name = $userData['name'];
        $user->role_id = 2;
        $user->image = 'alter';
        $user->change_token = '000000';
        $user->save();
        return redirect(route('log-page'));
    }
    public function  log(Request $request){
        $userInfo = $request->only('email', 'password');
        $e = $userInfo['email'];
        $validator = Validator::make($userInfo,[
            'email' => 'required|email:rfc,dns,filter',
            'password' => 'required|confirmed',
        ]);
        if(DB::table('users')->where('email', $e)->value('email') != 0){
            if(DB::table('users')->where('email', $e)->value('password') == $userInfo['password']){
                Auth::loginusingId(DB::table('users')->where('email', $e)->value('id'), True);
                DB::table('progress')->insertorIgnore(['id'=> Auth::id()]);
                return redirect('/');
            }
        }
        return redirect('log')
            ->withErrors($validator)
            ->withInput();
    }
    public function logout(Request $request){

    }

    public function get(){

    }

    public function change(){
        $arr = Array();
        $arr['userid'] = $_POST['userid'];
        $arr['result'] = $_POST['result'];
        $arr['course'] = $_POST['course'];
        $old = DB::table('progress')->where('id', $arr['userid'])->value($arr['course']);
        if($arr['result'] > $old) {
            DB::table('progress')->where('id', $arr['userid'])->update([$arr['course'] => $arr['result']]);
        }
        echo json_encode($arr);
    }
    public function profile(Request $request){
        $id = Auth::id();
        $uploaddir = "../public/photos/" . $id . ".jpg";
        move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir);
        $newname = $request->get('name');
        DB::table('users')->where('id', $id)->update(['name' => $newname, 'image' => $id]);
        return redirect(route('profile-page'));
    }
    public function feedback(Request $request){
        $text = $request->get('text');
        $name = $request->get('name');
        $email = $request->get('email');
        DB::table('feedback')->insert(['message'=>$text,'name'=>$name,'email'=>$email]);
        return redirect(route('main-page'));
    }
}
