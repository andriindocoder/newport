<div class="form-group{{ $errors->has('kode_pelayanan') ? ' is-invalid' : '' }}">
{!! Form::label('Kode Pelayanan') !!} 
<?php
    if($errors->has('kode_pelayanan')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::text('kode_pelayanan', null, ['class'=>$invalid, 'placeholder' => 'Kode Pelayanan']) !!}
{!! $errors->first('kode_pelayanan', '<p class="invalid-feedback">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('nama_pelayanan') ? ' is-invalid' : '' }}">
{!! Form::label('Nama Pelayanan') !!} 
<?php
    if($errors->has('nama_pelayanan')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::text('nama_pelayanan', null, ['class'=>$invalid, 'placeholder' => 'Nama Pelayanan']) !!}
{!! $errors->first('nama_pelayanan', '<p class="invalid-feedback">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('keterangan') ? ' is-invalid' : '' }}">
{!! Form::label('Keterangan Pelayanan') !!} 
<?php
    if($errors->has('keterangan')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::textarea('keterangan', null, ['class'=> 'form-control','rows'=>8, 'placeholder' => '']) !!}
{!! $errors->first('keterangan', '<p class="invalid-feedback">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('tipe_form') ? 'has-error' : ''}} m-input">
    <label>Tipe Form<sup>*</sup></label>

    {!! Form::select('tipe_form', ['1'=>1,'2'=>2], null, ['class'=> 'js-selectize form-control','placeholder' => 'Pilih Tipe Formulir']) !!}

    @if($errors->has('tipe_form'))
    <span class="help-block badge badge-danger">{{ $errors->first('tipe_form') }}</span>
    @endif
</div>

{!! Form::submit('Simpan', ['class'=>'btn btn-info']) !!}