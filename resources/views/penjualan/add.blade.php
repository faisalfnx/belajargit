@extends('layouts.penjualan')

@section('content')

<div class="container">
<div class="row">
<form method="POST" action="{{url('penjualan/save')}}">
  
  <label for="id_buku">Nama Buku</label>
  <input type="text" name="buku" class="form-control" value="{{$buku->judul}}" disabled>
  <input type="hidden" name="id_buku" value="{{$buku->id}}">
  <label for="Harga" onchange="calculateTax()">Harga</label>
  <input type="number" name="harga" class="form-control" id="Harga" value="{{$buku->harga_jual}}" disabled>

  <label for="Jumlah" onchange="calculateTax()">Jumlah</label>
  <input type="number" name="jumlah" class="form-control" id="Jumlah">
  <br>
  <button type="button" onclick="calculateTax()" class="btn btn-primary">Jumlahkan</button>
  <br>
  <br>
  <label for="total">Total</label>
  <input class="form-control" type="text" id="Total" name="total" Size=8>


    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <br>
    <center>
    <button style="width: 200px;" type="submit" class="btn btn-primary" onclick="return confirm('are u sure to save ?')">Save</button>
    </center>

</form>
<br>
 </div>
 </div>

<script>
function calculateTax() {

  var Harga = document.getElementById("Harga").value;
  var Jumlah = document.getElementById("Jumlah").value;
  var test = Harga * Jumlah;

document.getElementById("Total").value=test;
}
</script>

@endsection