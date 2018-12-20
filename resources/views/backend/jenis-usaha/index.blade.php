@extends('layouts.backend.main')
@section('breadcrumb','Jenis Usaha')
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
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Pengaturan Jenis Usaha</a></li>
                            <li class="breadcrumb-item active"> Jenis Usaha</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Daftar Jenis Usaha</div>
                        <div class="card-body">
                        <p><a href="{{ route('jenis-usaha.create') }}" class="btn btn-outline-info"><span><i class="fa fa-plus-circle"></i></span> Tambah Jenis Usaha</a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Jenis Usaha</th>
                                        <th>Jenis Usaha</th>
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
            ajax: '{!! route('jenis-usaha.data') !!}',
            columns: [
                { data: 'kode_jenis_usaha', name: 'kode_jenis_usaha' },
                { data: 'jenis_usaha', name: 'jenis_usaha' },
                { data: 'action', name: 'action', searchable: false, orderable: false }
            ],
        });
    });
</script>
@endsection