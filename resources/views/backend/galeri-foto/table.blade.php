<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Title</th>
    <th width="400px">Caption</th>
    <th class="text-center">Foto</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($galeriFotos as $galeriFoto)
  	<tr>
  	  <td>{{ $no }}.</td>
  	  <td>{{ $galeriFoto->title }}</td>
  	  <td>{{ $galeriFoto->caption }}</td>
  	  <td align="center"><img src="{{ url($galeriFoto->namafile) }}" width="250px" height="150px"></td>
      <td align="center">
        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.galeri-foto.destroy', $galeriFoto->id]]) !!}
        <a href="{{ route('admin.galeri-foto.edit', $galeriFoto->id) }}" class="btn btn-sm btn-warning btn-block" title="Edit">
          <i class="fa fa-edit text-black"></i> Edit
        </a>
          <button onclick="return confirm('Apakah Anda yakin untuk menghapus foto?')" type="submit" class="btn btn-sm btn-danger btn-block" title="Move to Trash">
            <i class="fa fa-trash"></i> Hapus
          </button>
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
</table>