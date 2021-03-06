@extends('layouts.backend.main')
@section('title','Edit Tampilan Depan')
@section('breadcrumb','Edit Tampilan Depan')
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/tampilan-depan') }}">Pengaturan Tampilan</a></li>
                            <li class="breadcrumb-item"> Tampilan Depan</li>
                            <li class="breadcrumb-item active"> Edit Tampilan Depan</li>
                        </ol>
                        <div class="card border-primary mb-3 card-info">
                        <div class="card-header">Edit Tampilan Depan</div>
                            <div class="card-body">
                                {!! Form::model($tampilanDepan,[
                                    'url'       => route('admin.tampilan-depan.update', $tampilanDepan->id),
                                    'method'    => 'put',
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