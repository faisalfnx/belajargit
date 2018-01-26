@extends('layouts.home')
@section('title')
Buku
@endsection
@section('content')
<div class="container">
<div class="row">
<h1>List Buku</h1>
<center>
<a href="{{url('buku/add')}}">
<button class="btn btn-success pull-right fa fa-plus-square" style="width: 70px"></button>
<br>
</a>
</center>
<br>

<div class="panel panel-default">
  <table class="table">
  <thread>
  <tr>
  	<th>Judul</th>
  	<th>No ISBN</th>
  	<th>Penulis</th>
  	<th>Penerbit</th>
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
  	<td>{{$key->penulis}}</td>
  	<td>{{$key->penerbit}}</td>
  	<td>{{$key->tahun}}</td>
  	<td>{{$key->stok}}</td>
  	<td>{{$key->harga_pokok}}</td>
  	<td>{{$key->harga_jual}}</td>
  	<td>{{$key->ppn}}</td>
  	<td>{{$key->diskon}}</td>
  	<td>
    <a class="btn btn-success fa fa-pencil-square-o" href="{{url('buku/edit/'.$key->id)}}"></a>
  	<a class="btn btn-warning fa fa-trash-o" href="{{url('buku/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"></a>
    </td>

  	</tr>
  	@endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection