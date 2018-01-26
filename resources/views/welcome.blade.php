@extends('layouts.home')
@section('title')
Home
@endsection
@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-xs-6 col-md-3">
    <a href="{{ url('/buku') }}" class="thumbnail">
      <img src="http://daftarreseller.danyrudiyan.com/wp-content/uploads/2016/11/icon-buku-edukasi.png" alt="100%x180">
    </a>
      <center><label>BUKU</label></center>
  </div>

  		<div class="col-xs-6 col-md-3">
    <a href="{{ url('/distributor') }}" class="thumbnail">
      <img src="https://leedocabinetry.com/wp-content/uploads/2015/05/distributor-icon.png" alt="100%x180">
    </a>
          <center><label>DISTRIBUTOR</label></center>
  </div>
  		<div class="col-xs-6 col-md-3">
    <a href="{{ url('/pasok') }}" class="thumbnail">
      <img src="http://icons2.iconarchive.com/download/i80210/custom-icon-design/flatastic-1/add.ico" alt="100%x180">
    </a>
          <center><label>PASOK</label></center>
  </div>
  		<div class="col-xs-6 col-md-3">
    <a href="{{ url('/laporan') }}" class="thumbnail">
      <img src="https://icon-icons.com/icons2/1150/PNG/512/1486504829-clipboard-tasks-report-business-checking-verification-list_81387.png" alt="100%x180">
    </a>
          <center><label>LAPORAN</label></center>
  </div>
  		<div class="col-xs-6 col-md-3">
    <a href="{{ url('/user') }}" class="thumbnail">
      <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-group-512.png" alt="100%x180">
    </a>
          <center><label>DATA USER</label></center>
  </div>

	</div>
</div>
@endsection