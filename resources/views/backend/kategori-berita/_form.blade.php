<div class="form-group{{ $errors->has('title') ? ' is-invalid' : '' }}">
{!! Form::label('Kategori Berita') !!} 
<?php
    if($errors->has('title')){
        $invalid = 'form-control is-invalid';
    }else{
        $invalid = 'form-control';
    }
?>
{!! Form::text('title', null, ['class'=>$invalid, 'placeholder' => 'Judul Kategori Berita']) !!}
{!! $errors->first('title', '<p class="invalid-feedback">:message</p>') !!}
</div>

{!! Form::submit('Simpan', ['class'=>'btn btn-info']) !!}