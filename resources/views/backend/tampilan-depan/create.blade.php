@extends('layouts.backend.main')
@section('breadcrumb','Tambah Tampilan Depan')
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/tampilan-depan') }}">Pengaturan</a></li>
                            <li class="breadcrumb-item"> Tampilan Depan</li>
                            <li class="breadcrumb-item active"> Tambah Tampilan Depan</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Tambah Tampilan Depan</div>
                            <div class="card-body">
                                {!! Form::open([
                                    'url'       => route('admin.tampilan-depan.store'),
                                    'method'    => 'post',
                                    'class'     => 'form-horizontal',
                                    'files'     => true, 
                                ]) !!}
                                
                                @include('backend.tampilan-depan._form')
            
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
      @include('backend.tampilan-depan.script')
@endsection