@extends('layouts.home')
@section('title')
Laporan
@endsection
@section('content')

<center><h2>LAPORAN</h2></center>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-xs-6 col-md-3">
			<center><div class="thumbnail">
			<caption>LAPORAN DISTRIBUTOR</caption>
			<br>
			<a href="{{url('distributor/pdf')}}"><button class="btn btn-primary">KLIK DISINI</button></a>
		</div>
		</center>
	</div>

		<div class="col-xs-6 col-md-3">
			<center><div class="thumbnail">
			<caption>LAPORAN BUKU</caption>
			<br>
			<a href="{{url('buku/pdf')}}"><button class="btn btn-primary">KLIK DISINI</button></a>
		</div>
		</center>
		</div>

		<div class="col-xs-6 col-md-3">
			<center><div class="thumbnail">
			<caption>LAPORAN PASOK</caption>
			<br>
			<a href="{{url('pasok/pdf')}}"><button class="btn btn-primary">KLIK DISINI</button></a>
		</div>
		</center>
		</div>

		<div class="col-xs-6 col-md-3">
			<center><div class="thumbnail">
			<caption>LAPORAN USER</caption>
			<br>
			<a href="{{url('user/pdf')}}"><button class="btn btn-primary">KLIK DISINI</button></a>
		</div>
		</center>
		</div>

		<!-- <div class="col-xs-6 col-md-3">
			<center><div class="thumbnail">
			<caption>LAPORAN PENJUALAN</caption>
			<br>
			<a href="{{url('penjualan/pdf')}}"><button class="btn btn-primary">KLIK DISINI</button></a>
		</div>
		</center>
		</div> -->

	</div>
</div>

@endsection