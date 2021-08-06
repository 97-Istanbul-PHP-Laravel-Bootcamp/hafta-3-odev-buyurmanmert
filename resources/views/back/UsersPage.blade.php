@extends('back.layouts.master')
@section('title','Kullanıcı Listeleme')
@section('content')
<table class="table table-striped" id="table1">
    <thead>
        <tr>
            <th>Kullanıcı Username</th>
            <th>Kullanıcı Şifre</th>
            <th>Kullanıcı Email</th>
            <th>Kullanıcı Telefon Numarası</th>
            <th>Kullanıcı Adı</th>
            <th>Kullanıcı Soyadı</th>
            <th>Kullanıcı Statüsü</th>
            <th>Kullanıcı Düzenle</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
            <td>{{$user->user_uname}}</td>
            <td>{{$user->user_pass}}</td>
            <td>{{$user->user_mail}}</td>
            <td>{{$user->user_mpno}}</td>
            <td>{{$user->user_fname}}</td>
            <td>{{$user->user_lname}}</td>
            <td>
              @if ($user->user_status=="a")
                <span class="badge bg-success">Aktif</span>
              @elseif ($user->user_status=="p")
                <span class="badge bg-secondary">Pasif</span>
              @else
                <span class="badge bg-danger">Çöpte</span>
              @endif
            </td>
            <td>
              <a href="{{route('admin.user.edit', $user->user_id)}}" class="btn btn-sm btn-outline-primary">Düzenle</a>
              <a href="{{route('admin.user.delete', $user->user_id)}}" class="btn btn-sm btn-outline-danger">Sil</a>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>


@endsection
