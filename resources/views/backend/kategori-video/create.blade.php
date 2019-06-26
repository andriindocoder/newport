@extends('layouts.backend.main')
@section('breadcrumb','Tambah Kategori Video')
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/kategori-video') }}">Pengaturan Video</a></li>
                            <li class="breadcrumb-item"> Kategori Video</li>
                            <li class="breadcrumb-item active"> Tambah Kategori Video</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Tambah Kategori Video</div>
                            <div class="card-body">
                                {!! Form::open([
                                    'url'       => route('admin.kategori-video.store'),
                                    'method'    => 'post',
                                    'class'     => 'form-horizontal' 
                                ]) !!}
                                
                                @include('backend.kategori-video._form')
            
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