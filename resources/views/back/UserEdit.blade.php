@extends('back.layouts.master')
@section('title','Kullanıcı Düzenleme')
@section('content')
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="{{route('admin.user.update', $user->user_id)}}">
                  @csrf
                  @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Kullanıcı Adı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="user_uname" placeholder="Kullanıcı Adınızı Giriniz" value="{{$user->user_uname}}">
                            </div>
                            <div class="col-md-4">
                                <label>Kullanıcı Şifre: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="password" class="form-control" name="user_pass" placeholder="Kullanıcı Şifrenizi Giriniz" value="{{$user->user_pass}}">
                            </div>
                            <div class="col-md-4">
                                <label>Kullanıcı Email: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="email" class="form-control" name="user_mail" placeholder="Kullanıcı Email'inizi Giriniz" value="{{$user->user_mail}}">
                            </div>
                            <div class="col-md-4">
                                <label>Kullanıcı Telefon: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="user_mpno" placeholder="Kullanıcı Tel No Giriniz" value="{{$user->user_mpno}}">
                            </div>
                            <div class="col-md-4">
                                <label>Kullanıcı Gerçek Adı: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="user_fname" placeholder="Kullanıcı Gerçek Adınızı Giriniz" value="{{$user->user_fname}}">
                            </div>
                            <div class="col-md-4">
                                <label>Kullanıcı Soyadınız: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="user_lname" placeholder="Kullanıcı Soyadınızı Giriniz" value="{{$user->user_lname}}">
                            </div>
                            <div class="col-md-4">
                              <label>Kullanıcı Aktifliği: </label>
                            </div>
                            <div class="col-md-8 form-group">
                              <fieldset class="form-group">
                                <select class="form-select" name="user_status">
                                  <option value="a" @if ($user->user_status == "a") selected @endif>Aktif</option>
                                    <option value="p" @if ($user->user_status == "p") selected @endif>Pasif</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet</button>
                                <a href="{{route('admin.user.index')}}" class="btn btn-light-secondary me-1 mb-1">Geri</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
