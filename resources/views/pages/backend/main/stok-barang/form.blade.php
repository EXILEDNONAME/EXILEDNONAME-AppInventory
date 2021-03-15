<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Supplier </label>
    <div class="col-lg-9">
      {!! Form::select('id_supplier', data_suppliers(), (isset($data->id_supplier) ? $data->id_supplier : NULL), ['placeholder' => '- Pilih Supplier -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_supplier') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Jenis </label>
    <div class="col-lg-9">
      {!! Form::select('id_jenis', jenis_barangs(), (isset($data->id_jenis) ? $data->id_jenis : NULL), ['placeholder' => '- Pilih Jenis Barang -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_jenis') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Merk </label>
    <div class="col-lg-9">
      {!! Form::select('id_merk', merk_barangs(), (isset($data->id_merk) ? $data->id_merk : NULL), ['placeholder' => '- Pilih Merk Barang -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_merk') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Name </label>
    <div class="col-lg-9">
      {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Quantity </label>
    <div class="col-lg-9">
      {!! Form::number('quantity', (isset($data->quantity) ? $data->quantity : ''), ['class' => $errors->has('quantity') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('quantity') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Description </label>
    <div class="col-lg-9">
      {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  @include('includes.datatable.page-form.main')

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> </label>
    <div class="col-lg-9">
      <input class="btn btn-primary pull-right" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
  </div>

</div>
