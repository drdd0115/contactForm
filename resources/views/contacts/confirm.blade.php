@extends('layouts.layout')

@section('content')
    <form method="POST" action="{{ route('contacts.create') }}"></form>
        @csrf
        <h1>内容確認</h1>
        <table>
            <tr class="name">
                <th class="contactTable-header">お名前</th>
                <td class="contactTable-data">{{ $input_data['name'] }}</td>
            </tr>
            <input type="hidden" name="name" value="{{ $input_data['name'] }}">

            <tr class="sex">
                <th class="contactTable-header">性別</th>
                <td class="contactTable-data">{{ $input_data['sex'] }}</td>
            </tr>
            <input type="hidden" name="sex" value="{{ $input_data['sex'] }}">

            <tr class="email">
                <th class="contactTable-header">メールアドレス</th>
                <td class="contactTable-data">{{ $input_data['email'] }}</td>
            </tr>
            <input type="hidden" name="email" value="{{ $input_data['email'] }}">

            <tr class="postal-code">
                <th class="contactTable-header">郵便番号</th>
                <td class="contactTable-data">{{ $input_data['postal-code'] }}</td>
            </tr>
            <input type="hidden" name="postall-code" value="{{ $input_data['postal-code'] }}">

            <tr class="address">
                <th class="contactTable-header">住所</th>
                <td class="contactTable-data">{{ $input_data['address'] }}</td>
            </tr>
            <input type="hidden" name="address" value="{{ $input_data['address'] }}">

            <tr class="buildingName">
                <th class="contactTable-header">建物名</th>
                <td class="contactTable-data">
                    @isset($input_data['buildingName'])
                    {{ $input_data['buildingName'] }}
                    @endisset
                </td>
            </tr>
            <input type="hidden" name="buildingName" value="{{ $input_data['buildingName'] }}">

            <tr class="opinion">
                <th class="contactTable-header">ご意見</th>
                <td class="contactTable-data">
                    {{ $input_data['opinion'] }}
                </td>
            </tr>
            <input type="hidden" name="opinion" value="{{ $input_data['opinion'] }}">
        </table>
        <div class="btn-submit">
            <button onclick="location.href='{{ route('contacts.create') }}'">送信</button>
            {{-- <input type="submit" value="送信"> --}}
            <a href="{{ route('contacts.index') }}">修正する</a>
        </div>
    </form>
@endsection
