<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Nomor Permohonan</th>
    <th>Nama Pemohon</th>
    <th>Pesan</th>
    <th>Detail Permohonan</th>
    <th class="text-center">Status Pengaduan</th>
    <th class="text-center" style="width: 200px">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($pengaduans as $pengaduan)
  	<tr>
  	  <td>{{ $no }}.</td>
      <td>{{ $pengaduan->no_pengaduan }}</td>
      <td>{{ $pengaduan->nama }} <br>
          {{ $pengaduan->email }}
      </td>
      <td>{{ $pengaduan->pesan }}</td>
  	  <td>
        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalDetail" data-no_pengaduan="{{ $pengaduan->no_pengaduan }}" data-nama="{{ $pengaduan->nama }}" data-jenis_id="{{ $pengaduan->jenis_id }}" data-nomor_id="{{ $pengaduan->nomor_id }}" data-email="{{ $pengaduan->email }}" data-instansi="{{ $pengaduan->instansi }}" data-alamat="{{ $pengaduan->alamat }}" data-pesan="{{ $pengaduan->pesan }}" data-balasan="{{ $pengaduan->balasan }}" data-attachment= "{{ url($pengaduan->namafile ? $pengaduan->namafile : 'empty.jpg') }}" style="width: 150px;"><i class="fa fa-search"></i> Detail Permohonan</button>
      </td>
      @if($pengaduan->status_pengaduan == 1)
        <td align="center"><span class="badge badge-danger badge-sm">Belum Diproses</span></td>
      @else 
    <td align="center"><span class="badge badge-success badge-sm">Sudah Diproses oleh {{ $pengaduan->updater->name }}</span></td>
      @endif
      <td align="center">
        @if($pengaduan->status_pengaduan == 1)
        {!! Form::open(['method' => 'DELETE', 'route' => ['pengaduan.destroy', $pengaduan->id]]) !!}
        <a href="{{ route('pengaduan.edit', $pengaduan->id) }}" class="btn btn-sm btn-primary btn-block" title="Edit">
          <i class="fa fa-comment text-black"></i> Proses
        </a>
        @else 
        <p> - </p>
        @role('superadmin')
          <button onclick="return confirm('Apakah Anda yakin untuk menghapus pengaduan?')" type="submit" class="btn btn-sm btn-danger btn-block" title="Move to Trash">
            <i class="fa fa-trash"></i> Hapus
          </button>
        @endrole
        @endif
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
  @include('backend.pengaduan.modal')
</table>
@include('backend.pengaduan.dashscript')