@extends('layouts.backend.main')
@section('title','Edit Kategori Berita')
@section('breadcrumb','Edit Kategori Berita')
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/kategori-berita') }}">Pengaturan Berita</a></li>
                            <li class="breadcrumb-item"> Kategori Berita</li>
                            <li class="breadcrumb-item active"> Edit Kategori Berita</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Edit Kategori Berita</div>
                            <div class="card-body">
                                {!! Form::model($kategoriBerita,[
                                    'url'       => route('kategori-berita.update', $kategoriBerita->id),
                                    'method'    => 'put',
                                    'class'     => 'form-horizontal' 
                                ]) !!}
                                
                                @include('backend.kategori-berita._form')
            
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