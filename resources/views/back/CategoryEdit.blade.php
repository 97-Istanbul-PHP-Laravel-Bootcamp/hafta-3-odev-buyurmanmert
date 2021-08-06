@extends('back.layouts.master')
@section('title','Kategorileri Düzenle')
@section('content')
<form method="post" action="{{route('admin.category.update', $category->category_id)}}">
  @csrf
  @method('PUT')
  <div class="col-md-4">
    <label>Kategori Başlığı: </label>
  </div>
  <div class="col-md-8 form-group">
    <input type="text" class="form-control" name="category_title" placeholder="Kategori Adı" value="{{$category->category_title}}">
  </div>
  <div class="col-md-4">
    <label>Kategori Açıklama: </label>
  </div>
  <div class="col-md-8 form-group">
    <input type="text" class="form-control" name="category_description" placeholder="Kategori Açıklama" value="{{$category->category_description}}">
  </div>
  <div class="col-md-4">
    <label>Kategori Url Adresi: </label>
  </div>
  <div class="col-md-8 form-group">
    <input type="text" class="form-control" name="category_slug" placeholder="URL Adresi" value="{{$category->category_slug}}">
  </div>
  <div class="col-md-4">
    <label>Kategori Aktif: </label>
  </div>
  <div class="col-md-8 form-group">
    <fieldset class="form-group">
      <select class="form-select" name="category_status">
        <option value="a" @if ($category->category_status == "a") selected @endif>Aktif</option>
          <option value="p" @if ($category->category_status == "p") selected @endif>Pasif</option>
      </select>
    </fieldset>
  </div>
  <div class="col-12 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet</button>
    <a href="{{route('admin.category.index')}}" class="btn btn-light-secondary me-1 mb-1">Geri</a>
  </div>
</form>
@endsection
