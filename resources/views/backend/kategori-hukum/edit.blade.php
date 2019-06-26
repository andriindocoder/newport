@extends('layouts.backend.main')
@section('title','Edit Kategori Produk Hukum')
@section('breadcrumb','Edit Kategori Produk Hukum')
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/kategori-hukum') }}">Pengaturan Produk Hukum</a></li>
                            <li class="breadcrumb-item"> Kategori Produk Hukum</li>
                            <li class="breadcrumb-item active"> Edit Kategori Produk Hukum</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Edit Kategori Produk Hukum</div>
                            <div class="card-body">
                                {!! Form::model($kategoriHukum,[
                                    'url'       => route('admin.kategori-hukum.update', $kategoriHukum->id),
                                    'method'    => 'put',
                                    'class'     => 'form-horizontal' 
                                ]) !!}
                                
                                @include('backend.kategori-hukum._form')
            
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