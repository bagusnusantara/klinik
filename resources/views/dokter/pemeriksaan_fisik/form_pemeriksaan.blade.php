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
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Riwayat Penyakit') }}</label>
    <div class="col-md-6">
      <textarea name="riwayat_penyakit" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
    </div>
</div>

  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Riwayat Alergi') }}</label>
      <div class="col-md-6">
        <textarea name="riwayat_alergi" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Subjective') }}</label>
      <div class="col-md-6">
        <textarea name="riwayat_alergi" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Objective') }}</label>
      <div class="col-md-6">
        <textarea name="riwayat_alergi" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Diagnosa') }}</label>
      <div class="col-md-6">
        <textarea name="riwayat_alergi" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Planning') }}</label>
      <div class="col-md-6">
        <textarea name="riwayat_alergi" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>

  <button type="submit" class="genric-btn primary info">Simpan</button>
</form>
