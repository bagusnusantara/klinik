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
