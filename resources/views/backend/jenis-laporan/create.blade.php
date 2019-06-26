@extends('layouts.backend.main')
@section('breadcrumb','Tambah Jenis Laporan')
@section('content')
        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @include('layouts.backend.breadcrumb')
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/jenis-laporan') }}">Pengaturan Jenis Laporan</a></li>
                            <li class="breadcrumb-item"> Jenis Laporan</li>
                            <li class="breadcrumb-item active"> Tambah Jenis Laporan</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Tambah Jenis Laporan</div>
                            <div class="card-body">
                                {!! Form::open([
                                    'url'       => route('admin.jenis-laporan.store'),
                                    'method'    => 'post',
                                    'class'     => 'form-horizontal' 
                                ]) !!}
                                
                                @include('backend.jenis-laporan._form')
            
                                {!! Form::close() !!}
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