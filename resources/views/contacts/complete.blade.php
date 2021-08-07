@extends('layouts.layout')

@section('content')
    @csrf
    <p>ご意見いただきありがとうございました</p>
    <a href="{{ route('contacts.index') }}" class="btn-topPage">トップページへ</a>
@endsection
