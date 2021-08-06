@extends('back.layouts.master')
@section('title','Kategorileri Listele')
@section('content')
<table class="table table-striped" id="table1">
  <thead>
    <tr>
      <th>Kategori Adı</th>
      <th>Kategori Açıklaması</th>
      <th>Kategori Slug</th>
      <th>Kategori Aktifliği</th>
      <th>Kategori Düzenle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <td>{{$category->category_title}}</td>
      <td>{{$category->category_description}}</td>
      <td>{{$category->category_slug}}</td>
      <td>
        @if ($category->category_status=="a")
        <span class="badge bg-success">Aktif</span>
        @elseif ($category->category_status=="p")
        <span class="badge bg-secondary">Pasif</span>
        @else
        <span class="badge bg-danger">Çöpte</span>
        @endif
      </td>
      <td>
        <a href="{{route('admin.category.edit', $category->category_id)}}" class="btn btn-sm btn-outline-primary">Düzenle</a>
        <a href="{{route('admin.category.delete', $category->category_id)}}" class="btn btn-sm btn-outline-danger">Sil</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
