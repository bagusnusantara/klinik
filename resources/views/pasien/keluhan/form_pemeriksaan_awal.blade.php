<form method="POST" action="{{ route('ListPasien.store') }}" class="form-horizontal" enctype="multipart/form-data">
@csrf

<div class="form-group row">
  <label for="terlalu_muda_hamil" class="col-md-6 col-form-label text-md-right">{{ __('Suami ke') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_muda_hamil">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select>
												<option value="1">City</option>
												<option value="1">Dhaka</option>
												<option value="1">Dilli</option>
												<option value="1">Newyork</option>
												<option value="1">Islamabad</option>
											</select>
										</div>
</div>
<div class="form-group row">
  <label for="terlalu_muda_hamil" class="col-md-6 col-form-label text-md-right">{{ __('Anak ke') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_muda_hamil">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="1">5</option>
                <option value="2">6</option>
                <option value="3">7</option>
                <option value="4">8</option>
                <option value="1">9</option>
                <option value="2">10</option>
                <option value="3">11</option>
                <option value="4">12</option>
       </select>
     </div>
</div>

  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Hari Pertama Haid terakhir') }}</label>
      <div class="col-md-6">
          <input id="datepicker1" type="text" name="tgl_lahir" class="dates form-control">
      </div>
  </div>

  <button type="submit" class="genric-btn primary info">Simpan</button>
</form>
