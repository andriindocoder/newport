{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]) !!}
<a href="{{ $edit_url }}" class="btn btn-warning btn-sm btn-block">Edit</a>
@role('superadmin')
{!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger btn-block']) !!}
@endrole
{!! Form::close()!!}