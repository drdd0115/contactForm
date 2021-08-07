<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Http\Requests\validateContacts;
use Illuminate\View\View;

class ContactController extends Controller
{

    //問い合わ入力n
    public function index()
    {
        return view('contacts.index');
    }

    // 問い合わせ確認
    public function confirm(Request $Request)
    {

        $familyName = $Request->familyName;
        $givenName = $Request->givenName;

        if ($Request['radio'] == 1) {
            $sex = "男性";
        } else {
            $sex = "女性";
        }

        //データ取得
        $input_data = [
            'name' => $familyName . ' ' . $givenName,
            'sex' => $sex,
            'email' => $Request->email,
            'postal-code' => $Request->postalCode,
            'address' => $Request->address,
            'buildingName' => $Request->buildingName,
            'opinion' => $Request->opinion,
        ];

        return view('contacts.confirm', compact('input_data'));
    }

    // 問い合わせ管理
    public function management()
    {
    }

    // public function test()
    // {
    //     $items = contact::all();
    //     return view('test', ['items' => $items]);
    // }

    public function create(Request $Request)
    {

        //データ取得
        $input_data = [
            'name' => $Request->name,
            'sex' => $Request->sex,
            'email' => $Request->email,
            'postal-code' => $Request->postalCode,
            'address' => $Request->address,
            'buildingName' => $Request->buildingName,
            'opinion' => $Request->opinion,
        ];
        dd($input_data);

        contact::create($Request);
        return View('contacts.complete');
    }

    public function complete()
    {
        //  dd('テスト');
        return view('contacts.complete');
    }
}
