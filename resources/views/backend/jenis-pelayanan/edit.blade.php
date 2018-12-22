@extends('layouts.backend.main')
@section('title','Edit Jenis Pelayanan')
@section('breadcrumb','Edit Jenis Pelayanan')
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
                            <li class="breadcrumb-item active"> Edit Jenis Pelayanan</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Edit Jenis Pelayanan</div>
                            <div class="card-body">
                                {!! Form::model($jenisPelayanan,[
                                    'url'       => route('jenis-pelayanan.update', $jenisPelayanan->id),
                                    'method'    => 'put',
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