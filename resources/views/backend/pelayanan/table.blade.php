<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Jenis Pelayanan</th>
    <th>Nomor Pelayanan</th>
    <th>Tanggal Permohonan</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($pelayanans as $pelayanan)
    <tr>
      <td>{{ $no }}.</td>
      <td>{{ $pelayanan->jenisPelayanan->nama_pelayanan }}</td>
      <td>{{ $pelayanan->no_pelayanan }}</td>
      <td>{{ $pelayanan->created_at }}</td>
      <td align="center">
        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.pelayanan.destroy', $pelayanan->id]]) !!}
        <a href="{{ route('admin.pelayanan.edit', $pelayanan->id) }}" class="btn btn-sm btn-success btn-block" title="Proses">
          <i class="fa fa-refresh text-black"></i> Proses
        </a>
        {!! Form::close() !!}
      </td>
    </tr>
    <?php $no++;?>
  @endforeach
</table>