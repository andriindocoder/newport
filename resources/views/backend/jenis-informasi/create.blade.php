@extends('layouts.backend.main')
@section('breadcrumb','Tambah Jenis Informasi')
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/jenis-informasi') }}">Pengaturan Jenis Informasi</a></li>
                            <li class="breadcrumb-item"> Jenis Informasi</li>
                            <li class="breadcrumb-item active"> Tambah Jenis Informasi</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Tambah Jenis Informasi</div>
                            <div class="card-body">
                                {!! Form::open([
                                    'url'       => route('admin.jenis-informasi.store'),
                                    'method'    => 'post',
                                    'class'     => 'form-horizontal' 
                                ]) !!}
                                
                                @include('backend.jenis-informasi._form')
            
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