@extends('layouts.backend.main')
@section('breadcrumb','Tambah Jenis Pelayanan')
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/jenis-pelayanan') }}">Pengaturan Jenis Pelayanan</a></li>
                            <li class="breadcrumb-item"> Jenis Pelayanan</li>
                            <li class="breadcrumb-item active"> Tambah Jenis Pelayanan</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Tambah Jenis Pelayanan</div>
                            <div class="card-body">
                                {!! Form::open([
                                    'url'       => route('jenis-pelayanan.store'),
                                    'method'    => 'post',
                                    'class'     => 'form-horizontal' 
                                ]) !!}
                                
                                @include('backend.jenis-pelayanan._form')
            
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
@include('backend.jenis-pelayanan.script')