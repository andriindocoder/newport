<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Link Terkait</th>
    <th>Deskripsi</th>
    <th class="text-center">Logo</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($linkTerkaits as $linkTerkait)
  	<tr>
  	  <td>{{ $no }}.</td>
      <td>{{ $linkTerkait->nama_instansi }}</td>
      <td>{{ $linkTerkait->deskripsi }}</td>
      <td align="center"><img src="{{ url($linkTerkait->logo_instansi) }}" height="70px" /></td>
      <td align="center">
        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.link-terkait.destroy', $linkTerkait->id]]) !!}
        <a href="{{ route('admin.link-terkait.edit', $linkTerkait->id) }}" class="btn btn-sm btn-warning btn-block" title="Edit">
          <i class="fa fa-edit text-black"></i> Edit
        </a>
          <button onclick="return confirm('Apakah Anda yakin untuk menghapus data?')" type="submit" class="btn btn-sm btn-danger btn-block" title="Move to Trash">
            <i class="fa fa-trash"></i> Hapus
          </button>
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
</table>