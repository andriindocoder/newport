<div class="form-group{{ $errors->has('kode_jenis_usaha') ? ' is-invalid' : '' }}">
{!! Form::label('Kode Jenis Usaha') !!} 
<?php
    if($errors->has('kode_jenis_usaha')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::text('kode_jenis_usaha', null, ['class'=>$invalid, 'placeholder' => 'Kode Jenis Usaha']) !!}
{!! $errors->first('kode_jenis_usaha', '<p class="invalid-feedback">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('jenis_usaha') ? ' is-invalid' : '' }}">
{!! Form::label('Jenis Usaha') !!} 
<?php
    if($errors->has('jenis_usaha')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::text('jenis_usaha', null, ['class'=>$invalid, 'placeholder' => 'Jenis Usaha']) !!}
{!! $errors->first('jenis_usaha', '<p class="invalid-feedback">:message</p>') !!}
</div>

{!! Form::submit('Simpan', ['class'=>'btn btn-info']) !!}