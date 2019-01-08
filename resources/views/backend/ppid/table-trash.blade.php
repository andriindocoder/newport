<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Nama File</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($ppids as $ppid)
  	<tr>
  	  <td>{{ $no }}.</td>
  	  <td align="center">{{ $ppid->nama_lengkap }}</td>
      <td align="center" ="center">
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'PUT', 'route' => ['admin.ppid.restore', $ppid->id]]) !!}
          <button title="Restore" class="btn btn-warning btn-sm btn-block">
              <i class="fa fa-refresh text-black"></i> Restore
          </button>
        {!! Form::close() !!}
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'DELETE', 'route' => ['admin.ppid.force-destroy', $ppid->id]]) !!}
          <button title="Permanent Delete" onclick="return confirm('You are about to delete ppid permanently. Are you sure?')" type="submit" class="btn btn-danger btn-sm btn-block">
            <i class="fa fa-times-circle"></i> Hapus Permanen
          </button>
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
</table>