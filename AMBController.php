<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AMBController extends Controller
{
    // Hiển thị form đăng ký
    public function showForm()
    {
        return view('login');
    }

    // Xử lý dữ liệu khi người dùng submit form
    public function handlelogin(Request $request)
    {
        // Lấy thông tin từ form
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirmPassword = $request->input('confirm_password');
        $gender = $request->input('gender');

        $githubLink = "https://github.com/AN-MBANK/K23CNT1_MaiBinhAn_Projectlab1.git";
        // Hiển thị thông tin người dùng đã đăng ký
        return view('login')->with([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'confirmPassword' => $confirmPassword,
            'gender' => $gender,
            'githubLink' => $githubLink ,
        ]);
    }
}
