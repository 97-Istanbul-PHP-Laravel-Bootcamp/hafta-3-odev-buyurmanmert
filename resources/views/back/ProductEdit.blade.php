@extends('back.layouts.master')
@section('title','Ürün Düzenleme')
@section('content')
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="{{route('admin.product.update', $product->product_id)}}">
                  @csrf
                  @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Ürünün Adı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="product_title" placeholder="Ürünün Adı Giriniz" value="{{$product->product_title}}">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Açıklaması: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="product_description" placeholder="Ürünün Açıklamasını Giriniz" value="{{$product->product_description}}">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Fiyatı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="product_prc" placeholder="Ürünün Fiyatını Giriniz" value="{{$product->product_prc}}">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Para Birimi: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="product_cid" placeholder="Ürünün Fiyatını Giriniz" value="{{$product->product_cid}}">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Stok Miktarı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="product_unicode" placeholder="Ürünün Stok Miktarını Giriniz" value="{{$product->product_unicode}}" >
                            </div>
                            <div class="col-md-4">
                              <label>Ürünün Aktifliği: </label>
                            </div>
                            <div class="col-md-8 form-group">
                              <fieldset class="form-group">
                                <select class="form-select" name="product_status">
                                  <option value="a" @if ($product->product_status == "a") selected @endif>Aktif</option>
                                    <option value="p" @if ($product->product_status == "p") selected @endif>Pasif</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Sırası: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="product_order" placeholder="Ürünün Statü Durumunu Giriniz" value="{{$product->product_order}}" >
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Slug'ı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="product_slug" placeholder="Ürünün Statü Durumunu Giriniz" value="{{$product->product_slug}}" >
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet</button>
                              <a href="{{route('admin.product.index')}}" class="btn btn-light-secondary me-1 mb-1">Geri</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
