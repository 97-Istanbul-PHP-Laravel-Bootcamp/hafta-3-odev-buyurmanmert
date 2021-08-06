@extends('back.layouts.master')
@section('title','Kategori Ekle')
@section('content')
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="{{route('admin.category.store')}}">
                  @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Kategori Adı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="category_title" class="form-control" name="category_title" placeholder="Kategori Adı">
                            </div>
                            <div class="col-md-4">
                                <label>Kategori Açıklama: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="category_description" class="form-control" name="category_description" placeholder="Kategori Açıklama">
                            </div>
                            <div class="col-md-4">
                              <label>Kategori Url Adresi: </label>
                            </div>
                            <div class="col-md-8 form-group">
                              <input type="text" class="form-control" name="category_slug" placeholder="URL Adresi">
                            </div>
                            <div class="col-md-4">
                              <label>Kategori Aktif: </label>
                            </div>
                            <div class="col-md-8 form-group">
                              <fieldset class="form-group">
                                <select class="form-select" name="category_status">
                                  <option value="a">Aktif</option>
                                  <option value="p" selected>Pasif</option>
                                </select>
                              </fieldset>
                            </div>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Kategoriyi Ekle</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
