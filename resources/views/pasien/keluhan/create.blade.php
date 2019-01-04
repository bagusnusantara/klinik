@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>
	<section class= "form-keluhan">
		<h1> Form Keluhan </h1>
    <form method="POST" action="{{ route('Periksa.store') }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf

		<div class="form-group" name="deskripsi" id="deskripsi">
    		<label for="FormControlTextarea1">Masukan Keluhan Anda :</label>
        <textarea name="deskripsi" class="form-control" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
    		<!-- <textarea class="form-control" id="FormControlTextarea1" rows="4" required></textarea> -->
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</section>

	<section class="rekam-medis">
		<p><h1> Rekam Medis Anda </h1></p>
		<p>
			<thread>
			<table class="table">
			<tr>
				<th scope="col"> No </th>
				<th scope="col"> Keluhan </th>
				<th scope="col"> Tgl. Diagnosa </th>
			</tr>
			</table>
			</thread>
	</section>
</body>
</html>
@stop
