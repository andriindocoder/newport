@extends('layouts.backend.main')
@section('breadcrumb','Kategori Berita')
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
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Pengaturan Berita</a></li>
                            <li class="breadcrumb-item active"> Kategori Berita</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Daftar Kategori Berita</div>
                        <div class="card-body">
                        <p><a href="{{ route('admin.kategori-berita.create') }}" class="btn btn-outline-info"><span><i class="fa fa-plus-circle"></i></span> Tambah Kategori Berita</a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
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
            ajax: '{!! route('admin.kategori-berita.data') !!}',
            columns: [
                { data: 'title', name: 'title' },
                { data: 'action', name: 'action', searchable: false, orderable: false }
            ],
        });
    });
</script>
@endsection