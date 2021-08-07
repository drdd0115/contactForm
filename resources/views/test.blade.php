@extends('layouts.layout')

@section('content')

@if (@isset($item))
<table>
  <tr>
    <th>Data</th>
  </tr>
  <tr>
    <td>
      {{$item->getDetail()}}
    </td>
  </tr>
</table>
@endif
@endsection
