<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Nomor Pelaporan</th>
    <th>Judul Laporan</th>
    <th>Tahun</th>
    <th>Bulan</th>
    <th>Status Laporan</th>
    <th class="text-center" style="width: 200px">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($pelaporans as $pelaporan)
    <tr>
      <td>{{ $no }}</td>
      <td>{{ $pelaporan->no_pelaporan }}</td>
      <td>{{ $pelaporan->judul_laporan }}</td>
      <td>{{ $pelaporan->year->tahun }}</td>
      <td>{{ $pelaporan->month->nama }}</td>
      @if($pelaporan->status_pelaporan == 10)
        <td><span class="badge badge-danger badge-sm">Belum Diproses</span></td>
      @else 
        <td><span class="badge badge-success badge-sm">Sudah Diproses</span></td>
      @endif
      <td align="center">
        @if($pelaporan->status_pelaporan == 10)
        <p> - </p>
        @else 
          {!! Form::open(['method' => 'DELETE', 'route' => ['admin.ppid.destroy', $pelaporan->id]]) !!}
        <a href="#" class="btn btn-outline-success btn-sm"><span>Update | </span><i class="fa fa-pencil"></i></a>
        @endif
        {!! Form::close() !!}
      </td>
    </tr>
    <?php $no++;?>
  @endforeach
  @include('backend.ppid.modal')
</table>
@include('backend.ppid.dashscript')