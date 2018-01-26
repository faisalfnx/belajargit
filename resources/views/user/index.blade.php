@extends('layouts.home')
@section('title')
User
@endsection
@section('content')
<div class="container">
<div class="row">
<h1>List User</h1>
<center>
<a href="{{url('user/add')}}">
<button class="btn btn-success pull-right fa fa-plus-square" style="width: 70px"></button>
<br>
</a>
</center>
<br>

<div class="panel panel-default">
  <table class="table">
  <thread>
  <tr>
  	<th>No</th>
  	<th>Nama</th>
  	<th>Email</th>
  	<th>Alamat</th>
  	<th>Telepon</th>
    <th>Status</th>
    <th>Role</th>
    <th colspan="2">Action</th>
  	</tr>
  </thread>
  <tbody>
  <?php
  $i = 1;
  ?>
  	@foreach($user as $key)
  <tr>
  	<td>{{$i++}}</td>
  	<td>{{$key->name}}</td>
  	<td>{{$key->email}}</td>
  	<td>{{$key->alamat}}</td>
    <td>{{$key->telepon}}</td>
    <td>{{$key->status}}</td>
    <td>{{$key->role}}</td>
  	<td>
    <a class="btn btn-success fa fa-pencil-square-o" href="{{url('user/edit/'.$key->id)}}"></a>
  	<a class="btn btn-warning fa fa-trash-o" href="{{url('user/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"></a>
    </td>

  	</tr>
  	@endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection