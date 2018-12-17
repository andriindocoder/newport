<div class="form-group{{ $errors->has('kode_tampilan') ? ' is-invalid' : '' }}">
{!! Form::label('Kode Tampilan Depan') !!} 
<?php
    if($errors->has('kode_tampilan')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::text('kode_tampilan', null, ['class'=>$invalid, 'placeholder' => '']) !!}
{!! $errors->first('kode_tampilan', '<p class="invalid-feedback">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('konten') ? ' is-invalid' : '' }}">
{!! Form::label('Konten') !!} 
<?php
    if($errors->has('konten')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::textarea('konten', null, ['class'=>$invalid, 'placeholder' => '', 'rows' => 6,'id'=>'konten']) !!}
{!! $errors->first('konten', '<p class="invalid-feedback">:message</p>') !!}
</div>

{!! Form::submit('Simpan', ['class'=>'btn btn-info']) !!}