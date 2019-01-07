@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>
	<section class= "form-keluhan">
		<h1> Form Pemeriksaan</h1>
    <!-- accordion 2 start-->
    <dl class="accordion">
        <dt>
            <a href="">Keluhan</a>
        </dt>
        <dd>
          {{ $list_pasien->deskripsi }}
        </dd>
        <dt>
            <a href="">Pemeriksaan Fisik</a>
        </dt>
        <dd>
          <form method="POST" action="{{ route('ListPasien.store') }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID Pasien') }}</label>
              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" placeholder="{{ $list_pasien->id_user }}" >
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID Keluhan') }}</label>
              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" placeholder="{{ $list_pasien->id_keluhan }}" >
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Riwayat Penyakit') }}</label>
              <div class="col-md-6">
                <textarea name="riwayat_penyakit" class="form-control" rows="3" placeholder="Riwayat Penyakit" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
              </div>
          </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Riwayat Alergi') }}</label>
                <div class="col-md-6">
                  <textarea name="riwayat_alergi" class="form-control" rows="3" placeholder="Riwayat Alergi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tekanan Darah Atas') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('tekanan_darah_atas') ? ' is-invalid' : '' }}" name="tekanan_darah_atas" value="{{ old('tekanan_darah_atas') }}" required autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tekanan Darah Bawah') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('tekanan_darah_bawah') ? ' is-invalid' : '' }}" name="tekanan_darah_bawah" value="{{ old('tekanan_darah_bawah') }}" required autofocus>
                </div>
            </div>
        		<button type="submit" class="genric-btn primary info">Simpan</button>
      	</form>
        </dd>
        <dt>
            <a href="">Tabel Skor Poedji Rochjati</a>
        </dt>
        <dd>
          <form method="POST" action="{{ route('ListPasien.store') }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu muda hamil I ≤ 16 Tahun') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu tua hamil I ≥ 35 Tahun') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu lambat hamil I kawin ≥ 4 Tahun') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu muda hamil I ≤ 16 Tahun') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu lama hamil lagi ≥10 Tahun') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu cepat hamil lagi ≤ 2 Tahun') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu banyak anak, 4 atau lebih') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu tua umur ≥ 35 Tahun') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu pendek ≥ 145 cm') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu muda hamil I ≤ 16 Tahun') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Pernah gagal kehamilan') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Pernah melahirkan dengan terikan tang/vakum') }}</label>
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
          </div>
          <button type="submit" class="genric-btn primary info">Simpan</button>
          </form>
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
