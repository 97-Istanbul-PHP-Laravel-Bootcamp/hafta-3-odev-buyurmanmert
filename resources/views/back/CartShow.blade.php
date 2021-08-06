@extends('back.layouts.master')
@section('title','Satış Görüntüle')
@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-content">
      <!-- table head dark -->
      <div class="table-responsive">
        <table class="table mb-0">
          <thead class="thead-dark">
            <tr>
              <th>Sipariş Kullanıcı Adı</th>
              <th>Sipariş Ürün Adı</th>
              <th>Sipariş Numarası</th>
              <th>Satış Numarası</th>
              <th>Satış Fiyatı</th>
              <th>Satış Kuru Bilgisi</th>
              <th>Satış Tarihi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($carts as $cart)
            <tr>
              <td>...</td>
              <td>...</td>
              <td>{{$cart->cart_orid}}</td>
              <td>{{$cart->cart_code}}</td>
              <td>{{$cart->cart_prc}}</td>
              <td>{{$cart->cart_cid}}</td>
              <td>{{$cart->cart_sale_date}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
