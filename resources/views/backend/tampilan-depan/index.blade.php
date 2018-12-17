@extends('layouts.backend.main')
@section('breadcrumb','Tampilan Depan')
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
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Pengaturan Tampilan Depan</a></li>
                            <li class="breadcrumb-item active"> Tampilan Depan</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Daftar Tampilan Depan</div>
                        <div class="card-body">
                        <p><a href="{{ route('tampilan-depan.create') }}" class="btn btn-outline-info"><span><i class="fa fa-plus-circle"></i></span> Tambah Tampilan Depan</a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Tampilan</th>
                                        <th>Konten</th>
                                        <th id="tampilkan">Tampilkan</th>
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
            ajax: '{!! route('tampilan-depan.data') !!}',
            columns: [
                { data: 'kode_tampilan', name: 'kode_tampilan' },
                { data: 'konten', name: 'konten' },
                { data: 'tampilkan', name: 'tampilkan' },
                { data: 'action', name: 'action', searchable: false, orderable: false }
            ],
            rowCallback: function( row, data, index ) {
                if ( data.tampilkan == 1 ) {
                    $('td:eq(2)', row).html('Ya');
                } else {
                    $('td:eq(2)', row).html('Tidak');
                }
            }
        });
    });
</script>
@endsection