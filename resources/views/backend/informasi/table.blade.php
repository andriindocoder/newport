<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Judul Informasi</th>
    <th class="text-center">Gambar</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($informasis as $informasi)
  	<tr>
  	  <td>{{ $no }}.</td>
      <td>{{ $informasi->judul_informasi }}</td>
      @if($informasi->gambar)
        <?php
            $path = $informasi->gambar;
            $ext = pathinfo($path, PATHINFO_EXTENSION);
        ?>
        @if($ext == 'pdf')
        <td align="center">
          <a href='{{ url($path) }}' target="blank">Lihat PDF</a>
        </td>
          @else 
                <td align="center"><a href="{{ url($path) }}" target="_blank"><img src="{{ url($path) }}" height="70px" /></a></td>
        @endif
      @else
        <td align="center"> - </td>
      @endif
      <td align="center">
        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.informasi.destroy', $informasi->id]]) !!}
        <a href="{{ route('admin.informasi.edit', $informasi->id) }}" class="btn btn-sm btn-warning btn-block" title="Edit">
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