<div class="form-group{{ $errors->has('kode') ? ' is-invalid' : '' }}">
{!! Form::label('Kode Laporan') !!} 
<?php
    if($errors->has('kode')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::text('kode', null, ['class'=>$invalid, 'placeholder' => 'Kode Laporan']) !!}
{!! $errors->first('kode', '<p class="invalid-feedback">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('nama') ? ' is-invalid' : '' }}">
{!! Form::label('Nama Laporan') !!} 
<?php
    if($errors->has('nama')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::text('nama', null, ['class'=>$invalid, 'placeholder' => 'Nama Laporan']) !!}
{!! $errors->first('nama', '<p class="invalid-feedback">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('keterangan') ? ' is-invalid' : '' }}">
{!! Form::label('Keterangan Laporan') !!} 
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

{!! Form::submit('Simpan', ['class'=>'btn btn-info']) !!}