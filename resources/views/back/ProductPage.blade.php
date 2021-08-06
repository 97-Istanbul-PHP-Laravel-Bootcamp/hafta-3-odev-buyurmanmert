@extends('back.layouts.master')
@section('title','Ürün Listeleme')
@section('content')
<table class="table table-striped" id="table1">
    <thead>
        <tr>
            <th>Ürün Adı</th>
            <th>Ürün Açıklaması</th>
            <th>Ürün Fiyatı</th>
            <th>Ürün Kur Bilgisi</th>
            <th>Ürün Sırası</th>
            <th>Ürün Stok Numarası</th>
            <th>Ürün Aktifliği</th>
            <th>Ürün Düzenle</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
            <td>{{$product->product_title}}</td>
            <td>{{$product->product_description}}</td>
            <td>{{$product->product_prc}} TL</td>
            <td>{{$product->product_cid}}</td>
            <td>{{$product->product_order}}</td>
            <td>{{$product->product_unicode}}</td>
            <td>
              @if ($product->product_status=="a")
                <span class="badge bg-success">Aktif</span>
              @elseif ($product->product_status=="p")
                <span class="badge bg-secondary">Pasif</span>
              @else
                <span class="badge bg-danger">Çöpte</span>
              @endif
            </td>
            <td>
              <a href="{{route('admin.product.edit', $product->product_id)}}" class="btn btn-sm btn-outline-primary">Düzenle</a>
              <a href="{{route('admin.product.delete', $product->product_id)}}" class="btn btn-sm btn-outline-danger">Sil</a>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>

@endsection
