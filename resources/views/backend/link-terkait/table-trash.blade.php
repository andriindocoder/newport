<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Nama Instansi</th>
    <th>Deskripsi</th>
    <th>Logo</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($linkTerkaits as $linkTerkait)
  	<tr>
  	  <td>{{ $no }}.</td>
  	  <td align="center">{{ $linkTerkait->nama_instansi }}</td>
  	  <td align="center">{{ $linkTerkait->deskripsi }}</td>
  	  <td align="center">{{ $linkTerkait->logo_instansi }}</td>
      <td align="center" ="center">
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'PUT', 'route' => ['admin.link-terkait.restore', $linkTerkait->id]]) !!}
          <button title="Restore" class="btn btn-warning btn-sm btn-block">
              <i class="fa fa-refresh text-black"></i> Restore
          </button>
        {!! Form::close() !!}
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'DELETE', 'route' => ['admin.link-terkait.force-destroy', $linkTerkait->id]]) !!}
          <button title="Permanent Delete" onclick="return confirm('You are about to delete data permanently. Are you sure?')" type="submit" class="btn btn-danger btn-sm btn-block">
            <i class="fa fa-times-circle"></i> Hapus Permanen
          </button>
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
</table>