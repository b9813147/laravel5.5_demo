<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $credentials = $request->validate([
            'email'    => 'required|email|max:255',
            'password' => 'required',
        ]);
//        $credentials = $this->validate($request, [
//            'email'    => 'required|email|max:255',
//            'passwords' => 'required'
//        ]);
//        echo $request->has('member');
//        dd($request->all());
        if (Auth::attempt($credentials, $request->has('member'))) {
            if(Auth::user()->activated) {
                session()->flash('success', '登入成功！');
                return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
                Auth::logout();
                session()->flash('warning', '你得帳號未激活，請檢查信箱是否激活。');
                return redirect('/');
            }
//            session()->flash('success', '登入成功');
//            /*[Auth::user()] 傳入使用者資訊*/
//            return redirect()->intended(route('users.show', [Auth::user()]));
        } else {
            session()->flash('danger', '帳號密碼不正確');
            /*返回*/
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '成功登出');
        return redirect('login');
    }
}
