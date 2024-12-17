<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\aCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationSuccessMail;


class AregisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpg,png,jpeg,gif',
        ]);

        // Xử lý upload ảnh nếu có
        $picturePath = null;
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/pictures');
        }

        // Tạo khách hàng mới
        $acustomer = aCustomer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'picture' => $picturePath,
            'status' => 'active',
        ]);

        // Gửi email thông báo đăng ký thành công
        Mail::to($acustomer->email)->send(new RegistrationSuccessMail($acustomer));

        return redirect()->route('register')->with('success', 'Đăng ký thành công! Kiểm tra email để xác nhận.');
    }
}
