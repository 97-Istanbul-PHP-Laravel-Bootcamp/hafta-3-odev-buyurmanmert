@extends('back.layouts.master')
@section('title','Satış Listeleme')
@section('content')
<table class="table table-striped" id="table1">
  <thead>
    <tr>
      <th>Sipariş Numarası</th>
      <th>Satış Numarası</th>
      <th>Satış Fiyatı</th>
      <th>Satış Kur Bilgisi</th>
      <th>Satış Tarihi</th>
      <th>Satış Düzenle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($carts as $cart)
    <tr>
      <td>{{$cart->cart_orid}}</td>
      <td>{{$cart->cart_code}}</td>
      <td>{{$cart->cart_prc}}</td>
      <td>{{$cart->cart_cid}}</td>
      <td>{{$cart->cart_sale_date}}</td>
      <td>
        <a href="{{route('admin.cart.show', $cart->cart_user_id)}}" class="btn btn-sm btn-outline-success">Görüntüle</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
