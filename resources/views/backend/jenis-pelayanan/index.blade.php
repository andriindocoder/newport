@extends('layouts.backend.main')
@section('breadcrumb','Jenis Pelayanan')
@section('content')
        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @include('layouts.backend.breadcrumb')
        @include('layouts._flash')
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Pengaturan Jenis Pelayanan</a></li>
                            <li class="breadcrumb-item active"> Jenis Pelayanan</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Daftar Jenis Pelayanan</div>
                        <div class="card-body">
                        <p><a href="{{ route('admin.jenis-pelayanan.create') }}" class="btn btn-outline-info"><span><i class="fa fa-plus-circle"></i></span> Tambah Jenis Pelayanan</a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Jenis Pelayanan</th>
                                        <th>Nama Pelayanan</th>
                                        <th>Keterangan</th>
                                        <th>Tipe Form</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        </div>
                </div>
            </div>
    
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection
@section('script')
<script>
    $(function(){
        $('table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.jenis-pelayanan.data') !!}',
            columns: [
                { data: 'kode_pelayanan', name: 'kode_pelayanan' },
                { data: 'nama_pelayanan', name: 'nama_pelayanan' },
                { data: 'keterangan', name: 'keterangan' },
                { data: 'tipe_form', name: 'tipe_form' },
                { data: 'action', name: 'action', searchable: false, orderable: false }
            ],
        });
    });
</script>
@endsection