<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PasswordController extends controller
{
    public function forgot(Request $request){
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $email = $request->get('email');
        if(DB::table('users')->where('email', $email)->value('email') != 0){
            $change = substr(str_shuffle($permitted_chars), 0, 6);
            DB::table('users')->where('email', $email)->update(['change_token' => $change]);
            mail("$email", "Код восстановления", "Здравствуйте!\n\n Код для смены пароля: $change", 'From: poznavaikabox@mail.ru');
            return view('/forgotcode');
        }
        return redirect(route('forgot-page'));
    }
    public function forgotcode(Request $request){
        $userChange = $request->only('email','password','token'); // считываем данные
        if(DB::table('users')->where('email', $userChange['email'])->value('email') != 0){
            if(DB::table('users')->where('email', $userChange['email'])->value('change_token') == $userChange['token'] && $userChange['token'] != '000000'){
                DB::table('users')->where('email', $userChange['email'])->update(['change_token' => '000000', 'password' => $userChange['password']]);
                return redirect(route('log-page'));
            }
        }
        return redirect(route('forgot'));
    }
}
