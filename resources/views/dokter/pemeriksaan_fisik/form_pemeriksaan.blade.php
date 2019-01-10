<form method="POST" action="{{ route('ListPasien.store') }}" class="form-horizontal" enctype="multipart/form-data">
@csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID Pasien') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control" value="{{ $list_pasien->id }}" readonly="readonly">
    </div>
</div>
<div class="form-group row">
    <label for="users_id" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
    <div class="col-md-6">
        <input id="users_id" type="text" class="form-control" value="{{ $list_pasien->user->name }}" name="users_id" readonly="readonly">
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID Keluhan') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control" value="{{ $list_pasien->id_keluhan }}" readonly="readonly">
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
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pemeriksaan Selanjutnya') }}</label>
      <div class="col-md-6">
          <input id="datepicker1" type="text" name="tgl_lahir" class="dates form-control">
      </div>
  </div>

  <button type="submit" class="genric-btn primary info">Simpan</button>
</form>
