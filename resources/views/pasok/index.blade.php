@extends('layouts.home')
@section('title')
List Pasok
@endsection
@section('content')
<br>
<div class="container">
<div class="row">
<h1>List Pasok</h1>
<div class="panel panel-default">
  <table class="table">
  <thread>
  <tr>
    <th>Judul</th>
    <th>No ISBN</th>
    <th>Tahun</th>
    <th>Stok</th>
    <th>Harga Pokok</th>
    <th>Harga Jual</th>
    <th>PPN</th>
    <th>Diskon</th>
    <th>Action</th>
    </tr>
  </thread>
  <tbody>
    @foreach($buku as $key)
  <tr>
    <td>{{$key->judul}}</td>
    <td>{{$key->noisbn}}</td>
    <td>{{$key->tahun}}</td>
    <td>{{$key->stok}}</td>
    <td>{{$key->harga_pokok}}</td>
    <td>{{$key->harga_jual}}</td>
    <td>{{$key->ppn}}</td>
    <td>{{$key->diskon}}</td>
    <td><a class="btn btn-success fa fa-plus-square" 
    href="{{url('pasok/add/'.$key->id)}}"></a>
    </td>

    </tr>
    @endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection