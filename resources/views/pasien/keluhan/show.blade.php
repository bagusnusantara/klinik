@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>
	<section class= "form-keluhan">
		<h1> Detail Rekam Medis</h1>
    <!-- accordion 2 start-->
    <dl class="accordion">
				<dt>
            <a href="">Detail Tabel Pemeriksaan</a>
        </dt>
        <dd>
          @include('dokter.pemeriksaan_fisik.show_pemeriksaan')
        </dd>
				<dt>
            <a href="">Detail Tabel Skor Poedji Rochjati</a>
        </dt>
        <dd>
          @include('dokter.pemeriksaan_fisik.show_tp')
        </dd>
    </dl>
    <!-- accordion 2 end-->
		<!-- <div class="form-group" name="deskripsi" id="deskripsi">
    		<label for="FormControlTextarea1">Keluhan </label>
        <textarea name="deskripsi" class="form-control" class "text-muted" rows="5" placeholder="{{ $list_pasien->deskripsi }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
  		</div> -->
	</section>

</body>
</html>
@stop
