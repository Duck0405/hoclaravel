<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function index()
    {

        // dd(Hash::make(123456));
        return view('admin.home.login');
    }

    public function auth_login(Request $request)
    {

        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect(route('dasboard'));
            //  dd(request()->all());
            if (isset($data['remember']) && $data['remember'] == "on") {
                setcookie("email", $data['email'], time() + 3600);
                setcookie("password", $data['password'], time() + 3600);
            } else {
                setcookie("email", "");
                setcookie("password", "");
            }
        } else {
            return redirect()->back()->with('error', 'Thông tin đăng nhập không đúng.');
        }
    }


    function dasboard() {
        return view("admin.home.dasboard");
    }


    public function register()
    {
        return view("admin.home.registration");
    }

    public function auth_register(Request $request)
    {
        //dd($request->all());
        $request->validate([
            "fullname" => "required|string|min:6",
            "email" => "required|email",
            "password" => "required|string|min:1",
            "retypepassword" => "required|same:password",
            "terms" => "accepted",
        ], [
            'fullname.required' => 'Họ và tên là bắt buộc.',
            'fullname.min' => 'Họ và tên phải có ít nhất 6 ký tự.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không đúng định dạng.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu tối thiểu 8 ký tự.',
            'retypepassword.required' => 'Nhập lại mật khẩu là bắt buộc.',
            'retypepassword.same' => 'Nhập lại mật khẩu phải trùng khớp với mật khẩu.',
            'terms.accepted' => 'Bạn cần đồng ý với các điều khoản trước khi đăng ký.',
        ]);

        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return redirect(route("register"))->with("error", "Email đã tồn tại! Vui lòng sử dụng email khác.");
        }


        $user = User::create([
            'name'     => $request->fullname,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return redirect(route("login"))->with("success", "Tạo tài khoản thành công!!!");
        }
        return redirect(route("register"))->with("error", "Tạo tài khoản không thành công!!!");
    }


    public function forgotpass()
    {
        return view("admin.home.forgot");
    }


    public function auth_forgot(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "email" => "required|email|exists:users,email",
        ]);

        if ($validator->fails()) {
            return redirect()->route('login.forgot')
                ->withInput()
                ->withErrors($validator);
        }

        $token = Str::random(60);
        DB::table('password_reset_tokens')->where('email',$request->email)->delete();
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        Mail::send("admin.emails.reset_password", ["token" => $token], function ($message) use ($request){
                $message->to($request->email);
                $message->subject("Reset Password");
        });
        return redirect()->route('login.forgot')->with('success', 'Please check mail your inbox to reset your pass');

        // $mail = new ResetPasswordEmail($formData);
        // dd($mail);  

    }



    public function recoverpass()
    {
        return view("admin.home.recoverpass");
    }

    public function auth_recoverpass(Request $request)
    {
        $request->validate([
            "email" => "required",
            'password' => "required",
        ]);

        $existingUser = User::where('email', $request->email)->first();

        if (!$existingUser) {
            return redirect(route("confirmpass"))->with("error", "Email không tồn tại! Vui lòng sử dụng email khác.");
        }
        User::where('email', $request->email)->update([
            'password' => Hash::make($request->password),
        ]);
    
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();
    
        return redirect()->route('login.login')->with('success', 'Password reset successfully.');
    }
    
};
