<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // ユーザー一覧を表示する処理
        return view('user');
    }

    public function show($id)
    {
        // 特定のユーザーを表示する処理
        return view('users.show', ['id' => $id]);
    }
    //
}
