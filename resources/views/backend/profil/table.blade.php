<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Judul</th>
    <th>Konten</th>
    <th class="text-center">Gambar</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($profils as $profil)
  	<tr>
  	  <td>{{ $no }}.</td>
      <td>{{ $profil->title }}</td>
      <td>{!! substr(htmlspecialchars_decode(stripslashes($profil->konten)),0,250) !!} ...</td>
      <td align="center"><img src="{{ url($profil->gambar1) }}" height="70px" /></td>
      <td align="center">
        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.profil.destroy', $profil->id]]) !!}
        <a href="{{ route('admin.profil.edit', $profil->id) }}" class="btn btn-sm btn-warning btn-block" title="Edit">
          <i class="fa fa-edit text-black"></i> Edit
        </a>
        @role('superadmin')
          <button onclick="return confirm('Apakah Anda yakin untuk menghapus data?')" type="submit" class="btn btn-sm btn-danger btn-block" title="Move to Trash">
            <i class="fa fa-trash"></i> Hapus
          </button>
        @endrole
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
</table>