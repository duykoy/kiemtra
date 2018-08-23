<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function dangnhap(Request $request)
    {
        $user = User::where('username', '=', $request->get('username'))->first();
        if ($user != null) {
            if ($user->password == $request->get('password')) {
                return view('dn');
            } else {
                return view('dk');
            }
        } else {
            return view('dk');
        }
    }

    public function store(Request $request)
    {

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
    public function destroy($id)
    {
        //
    }

    public function postDangnhap(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:3|max:23',
            'password' => 'required',
        ], [
                'username.required' => 'Bạn chưa nhập email',
                'password.required' => 'Bạn chưa nhập password',
                'username.min' => 'Username nhỏ hơn 3 kí tự',
                'username.max' => 'Username lớn hơn 23 kí tự'
            ]
        );
        if (Auth::attemtp(['email' => $request->username, 'password' => $request->password])) {
            return redirect('admin/danhsach');
        } else {
            return redirect('admin/dangnhap')->with('thongbao', 'Đăng nhập ko thành công');
        }

    }
}