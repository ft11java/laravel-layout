@extends('layouts.app')
@section('title')
Ana sayfa
@endsection
@section('css')
@endsection

@section('content')
<div class="d-flex justify-content-end">
<button type="button" class="btn btn-success">Ekle</button>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Adı</th>
      <th scope="col">Soyadı</th>
      <th scope="col">Telefonu</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($employes as $employe)
    <tr>
      <td>{{$employe->name}}</td>
      <td>{{$employe->lastname}}</td>
      <td>{{$employe->telefon}}</td>
      <td>{{$employe->email}}</td>
      <td><div class="d-flex justify-content-end">
      <button type="button" class="btn btn-info">Göster</button>
      <button type="button" class="btn btn-warning ms-1">Düzenle</button>
      <button type="button" class="btn btn-danger ms-1">Sil</button>
      </div>
    </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection

@section('js')
@endsection
