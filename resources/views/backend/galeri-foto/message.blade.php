@if(session('message'))
  <div class="alert alert-success">
    <span>{{ session('message') }}</span>
  </div>
@elseif(session('error-message'))
    <div class="alert alert-danger">
      {{ session('error-message') }}
    </div>
@elseif(session('trash-message'))
<?php list($message, $postId) = session('trash-message');?>
{!! Form::open(['method'=>'PUT', 'route' => ['admin.galeri-foto.restore',$postId]]) !!}
<div class="alert alert-danger">
  {{ $message }}
    <button type="submit" class="btn btn-sm btn-warning"><i class="fa fa-undo"></i>Undo</button>
</div>
{!! Form::close() !!}
@endif
