<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function add(Request $req)
    {
        $data = [
            'msg'  => 'お名前を入力してください',
        ];

        return view('hello.add', $data);
    }

    /**
     * 結果画面
     *
     */
    public function result(Request $req)
    {
        $message = $req->message;
        $data = [
            'msg'  => 'ようこそ、' . $message . ' さん！',
        ];

        return view('hello.result', $data);
    }
}