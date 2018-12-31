<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Title</th>
    <th class="text-center">Caption</th>
    <th class="text-center">Nama File</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($galeriVideos as $galeriVideo)
  	<tr>
  	  <td>{{ $no }}.</td>
  	  <td>{{ $galeriVideo->title }}</td>
  	  <td align="center">{{ $galeriVideo->caption }}</td>
  	  <td align="center">{{ $galeriVideo->namafile }}</td>
      <td align="center" ="center">
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'PUT', 'route' => ['admin.galeri-video.restore', $galeriVideo->id]]) !!}
          <button title="Restore" class="btn btn-warning btn-sm btn-block">
              <i class="fa fa-refresh text-black"></i> Restore
          </button>
        {!! Form::close() !!}
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'DELETE', 'route' => ['admin.galeri-video.force-destroy', $galeriVideo->id]]) !!}
          <button title="Permanent Delete" onclick="return confirm('You are about to delete data permanently. Are you sure?')" type="submit" class="btn btn-danger btn-sm btn-block">
            <i class="fa fa-times-circle"></i> Hapus Permanen
          </button>
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
</table>