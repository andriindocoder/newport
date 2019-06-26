@extends('layouts.backend.main')
@section('title','Edit Kategori Foto')
@section('breadcrumb','Edit Kategori Foto')
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/kategori-foto') }}">Pengaturan Foto</a></li>
                            <li class="breadcrumb-item"> Kategori Foto</li>
                            <li class="breadcrumb-item active"> Edit Kategori Foto</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Edit Kategori Foto</div>
                            <div class="card-body">
                                {!! Form::model($kategoriFoto,[
                                    'url'       => route('admin.kategori-foto.update', $kategoriFoto->id),
                                    'method'    => 'put',
                                    'class'     => 'form-horizontal' 
                                ]) !!}
                                
                                @include('backend.kategori-foto._form')
            
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