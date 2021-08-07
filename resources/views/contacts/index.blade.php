@extends('layouts.layout')

@section('content')
    <form method="POST" action="{{ route('contacts.confirm') }}">
        @csrf
        <h1>お問い合わせ</h1>
        <table>
            <tr class="name">
                <th class="contactTable-header">お名前<span class="required">※</span></th>
                <td class="contactTable-data"><input type="text" name="familyName"></td>
                <td class="contactTable-data"><input type="text" name="givenName"></td>
            </tr>

            <tr class="sex">
                <th class="contactTable-header">性別<span class="required">※</span></th>
                <td class="contactTable-data"><input type="radio" name="radio" value="1" checked="checked"><label>男性</label></td>
                <td class="contactTable-data"><input type="radio" name="radio" value="2"><label>女性</label></td>
            </tr>

            <tr class="email">
                <th class="contactTable-header">メールアドレス<span class="required">※</span></th>
                <td class="contactTable-data"><input type="email" name="email"></td>
            </tr>

            <tr class="postal-code">
                <th class="contactTable-header">郵便番号<span class="required">※</span></th>
                <td class="contactTable-data"><input type="text" name="postalCode"></td>
            </tr>

            <tr class="address">
                <th class="contactTable-header">住所<span class="required">※</span></th>
                <td class="contactTable-data"><input type="text" name="address"></td>
            </tr>

            <tr class="buildingName">
                <th class="contactTable-header">建物名</th>
                <td class="contactTable-data"><input type="text" name="buildingName"></td>
            </tr>

            <tr class="opinion">
                <th class="contactTable-header">ご意見<span class="required">※</span></th>
                <td class="contactTable-data"><input type="textarea" name="opinion"></td>
            </tr>
        </table>
        <div class="btn-submit">
            {{-- <button onclick="location.href='{{ route('contact.confirm') }}'">確認</button> --}}
            <input type="submit" value="確認">
            {{-- <button type="submit">確認</button> --}}
        </div>
    </form>
@endsection
