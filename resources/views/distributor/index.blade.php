@extends('layouts.home')
@section('title')
Distributor
@endsection
@section('content')
<div class="container">
<div class="row">
<h1>List Distributor</h1>
<center>
<a href="{{url('distributor/add')}}">
<button class="btn btn-success pull-right fa fa-plus-square" style="width: 70px"></button>
<br>
</a>
</center>
<br>

<div class="panel panel-default">
  <table class="table">
  <thread>
  <tr>
  	<th>ID Distributor</th>
  	<th>Nama Distributor</th>
  	<th>Alamat</th>
  	<th>Telepon</th>
  	<th>Action</th>
  	</tr>
  </thread>
  <tbody>
  	@foreach($dist as $key)
  <tr>
  	<td>{{$key->id}}</td>
  	<td>{{$key->nama_distributor}}</td>
  	<td>{{$key->alamat}}</td>
  	<td>{{$key->telepon}}</td>
  	<td>
    <a class="btn btn-success fa fa-pencil-square-o" href="{{url('distributor/edit/'.$key->id)}}"></a>
  	<a class="btn btn-warning fa fa-trash-o" href="{{url('distributor/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"></a>
    </td>

  	</tr>
  	@endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection