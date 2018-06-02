<?php

namespace App\Http\Controllers;
use App\Services\UserService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $userService;
    /**
     * AuthController constructor.
     */
    public function __construct(UserService $service)
    {
        $this->userService = $service;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $user = $this->userService->check($request->input('username'), $request->input('password'));
        if (!is_null($user)) {
            \Auth::login($user);
            return redirect()->route('home.index');
        }
        return redirect()->back()->withInput($request->input())->withErrors(['msg' => '無此帳號or 密碼，請輸入正確的帳號密碼！']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        \Auth::logout();
        return redirect()->route('home.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'username' => 'unique:od_users',
            'password' => 'confirmed'
        ],[
            'username.unique' => '帳號已存在',
            'password.confirmed' => '「密碼」與「確認密碼」資料不符'
        ]);

        if($validator->fails()){
            return back()->withInput($request->all())->withErrors($validator->errors());
        } else {
            $user = $this->userService->create($request->except(['_token','password_confirmation']));
            \Auth::login($user);
        }

        return redirect()->route('home.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResetLinkEmail()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showResetForm()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        //
    }

}
