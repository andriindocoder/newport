<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Nomor Permohonan</th>
    <th>Nama Pemohon</th>
    <th>Detail Permohonan</th>
    <th>Status PPID</th>
    <th class="text-center" style="width: 200px">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($ppids as $ppid)
  	<tr>
  	  <td>{{ $no }}.</td>
      <td>{{ $ppid->no_ppid }}</td>
      <td>{{ $ppid->nama_lengkap }} <br>
          {{ $ppid->email }}
      </td>
  	  <td>
      <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalDetail" data-no_ppid="{{ $ppid->no_ppid }}" data-fullname="{{ $ppid->nama_lengkap }}" data-alamat="{{ $ppid->alamat }}" data-pekerjaan="{{ $ppid->pekerjaan }}" data-jenis_id="{{ $ppid->jenis_id }}" data-nomor_id="{{ $ppid->nomor_id }}" data-email="{{ $ppid->email }}" data-telepon="{{ $ppid->telepon }}" data-rincian_info="{{ $ppid->rincian_info }}" data-tujuan_info="{{ $ppid->tujuan_info }}" data-cara_info="{{ $ppid->cara_info }}" data-cara_salinan="{{ $ppid->cara_salinan }}" data-file_berkas="{{ $ppid->file_berkas }}" data-balasan="{{ $ppid->balasan }}" style="width: 150px;"><i class="fa fa-search"></i> Detail Permohonan</button>
      </td>
      @if($ppid->status_ppid == 1)
        <td><span class="badge badge-danger badge-sm">Belum Diproses</span></td>
      @else 
        <td><span class="badge badge-success badge-sm">Sudah Diproses</span></td>
      @endif
      <td align="center">
        @if($ppid->status_ppid == 1)
        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.ppid.destroy', $ppid->id]]) !!}
        <a href="{{ route('admin.ppid.edit', $ppid->id) }}" class="btn btn-sm btn-primary btn-block" title="Edit">
          <i class="fa fa-comment text-black"></i> Proses
        </a>
        @else 
        <p> - </p>
        @role('superadmin')
          <button onclick="return confirm('Apakah Anda yakin untuk menghapus ppid?')" type="submit" class="btn btn-sm btn-danger btn-block" title="Move to Trash">
            <i class="fa fa-trash"></i> Hapus
          </button>
        @endrole
        @endif
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
  @include('backend.ppid.modal')
</table>
@include('backend.ppid.dashscript')