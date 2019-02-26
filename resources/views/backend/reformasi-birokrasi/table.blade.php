<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Judul Menu</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($subMenus as $subMenu)
  	<tr>
  	  <td>{{ $no }}.</td>
      <td>{{ $subMenu->judul_menu }}</td>
      <td align="center">
        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.reformasi-birokrasi.destroy', $subMenu->id]]) !!}
        <a href="{{ route('admin.reformasi-birokrasi.edit', $subMenu->id) }}" class="btn btn-sm btn-warning btn-block" title="Edit">
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