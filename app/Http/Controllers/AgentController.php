<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Requests\AgentRegisterRequest;
use Illuminate\Support\Str;
use App\Mail\MailKichHoatDaiLy;
use Illuminate\Support\Facades\Mail;

class AgentController extends Controller
{
    public function register()
    {
        return view('agent.register');
    }

    public function registerAction(AgentRegisterRequest $request)
    {
        $parts = explode(" ", $request->ho_va_ten);
        if(count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        }
        else
        {
            $firstname = $request->ho_va_ten;
            $lastname = " ";
        }


        $data = $request->all();
        $data['hash']       = Str::uuid();
        $data['ho_lot']     = $firstname;
        $data['ten']        = $lastname;
        $data['thanh_pho']  = "Đà Nẵng";
        $data['password']   = bcrypt($request->password);
        Agent::create($data);

        // Gửi mail
        Mail::to($request->email)->send(new MailKichHoatDaiLy(
            $request->ho_va_ten,
            $data['hash'],
            'Kích Hoạt Tài Khoản Đăng Ký'
        ));
    }
}
