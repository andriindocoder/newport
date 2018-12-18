<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Title</th>
    <th class="text-center">Caption</th>
    <th class="text-center">Nama File</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($galeriFotos as $galeriFoto)
  	<tr>
  	  <td>{{ $no }}.</td>
  	  <td>{{ $galeriFoto->title }}</td>
  	  <td align="center">{{ $galeriFoto->caption }}</td>
  	  <td align="center">{{ $galeriFoto->namafile }}</td>
      <td align="center" ="center">
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'PUT', 'route' => ['galeri-foto.restore', $galeriFoto->id]]) !!}
          <button title="Restore" class="btn btn-warning btn-sm btn-block">
              <i class="fa fa-refresh text-black"></i> Restore
          </button>
        {!! Form::close() !!}
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'DELETE', 'route' => ['galeri-foto.force-destroy', $galeriFoto->id]]) !!}
          <button title="Permanent Delete" onclick="return confirm('You are about to delete foto permanently. Are you sure?')" type="submit" class="btn btn-danger btn-sm btn-block">
            <i class="fa fa-times-circle"></i> Hapus Permanen
          </button>
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
</table>