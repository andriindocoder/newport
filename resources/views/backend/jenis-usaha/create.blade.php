@extends('layouts.backend.main')
@section('breadcrumb','Tambah Jenis Usaha')
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/jenis-usaha') }}">Pengaturan Jenis Usaha</a></li>
                            <li class="breadcrumb-item"> Jenis Usaha</li>
                            <li class="breadcrumb-item active"> Tambah Jenis Usaha</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Tambah Jenis Usaha</div>
                            <div class="card-body">
                                {!! Form::open([
                                    'url'       => route('admin.jenis-usaha.store'),
                                    'method'    => 'post',
                                    'class'     => 'form-horizontal' 
                                ]) !!}
                                
                                @include('backend.jenis-usaha._form')
            
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