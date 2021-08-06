@extends('back.layouts.master')
@section('title','Ürün Ekleme')
@section('content')
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="{{route('admin.product.store')}}">
                  @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Ürünün Adı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="product_title" placeholder="Ürünün Adı Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Açıklaması: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="product_description" placeholder="Ürünün Açıklamasını Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Fiyatı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="product_prc" placeholder="Ürünün Fiyatını Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Stok Miktarı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="product_unicode" placeholder="Ürünün Stok Miktarını Giriniz">
                            </div>
                            <div class="col-md-4">
                              <label>Ürünün Aktifliği: </label>
                            </div>
                            <div class="col-md-8 form-group">
                              <fieldset class="form-group">
                                <select class="form-select" name="product_status">
                                  <option value="a">Aktif</option>
                                  <option value="p" selected>Pasif</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Kategori Numarası: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="product_category_id" placeholder="Ürünün Kategorisini Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Kullanıcı Numarası: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="product_user_id" placeholder="Ürünün Kategorisini Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Sırası: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="product_order" placeholder="Ürünün Sırasını Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Para Birimi: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="product_cid" placeholder="Ürünün Para Birimini Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Slug'ı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="product_slug" placeholder="Ürünün Slug'ını Giriniz">
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Ürünü Ekle</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
