@extends('layouts.backend.main')
@section('pageTitle','List Pengaduan')
@section('breadcrumbTitle','Pengaduan')
@section('breadcrumbParent','Pengaturan')

@section('content')
	<div class="content-wrapper">
	@include('layouts.backend.breadcrumb')
	    <!-- Main content --> 
	    <section class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-md-12">
	            <div class="card card-info">
	              <!-- /.card-header -->
	              <div class="card-header">
	                <h3 class="card-title">List Pengaduan</h3>
	                <div class="card-tools">
										<button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
										</button>
									</div>
	              </div>

	              <!-- /.card-header -->
	              <div class="card-body p-1">
	              	<div class="row">
	              		<div class="col-md-12" style="padding-left: 10px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; ">
			                @include('backend.pengaduan.message')

	              		</div>
	              	</div>

	                @if(! $pengaduans->count())
	                  <div class="alert alert-danger">
	                    Data Tidak Ditemukan
	                  </div>
	                @else
	                    @if($onlyTrashed)
	                      @include('backend.pengaduan.table-trash')
	                    @else
	                      @include('backend.pengaduan.table')
	                    @endif
	                @endif
	              </div>
	              <!-- /.card-body -->
	              <div class="card-footer clearfix">
	                <div class="clearfix">
	                    {{ $pengaduans->appends( Request::query() )->render() }}
	                  </div>
	                  <div class="pull-right">
	                    <small>{{ $pengaduansCount }} {{ str_plural('Record', $pengaduansCount)}}</small>
	                  </div>
	              </div>

	            </div>
	            <!-- /.card -->
	          </div>

	        </div>
	        <!-- /.row -->
	      </div><!-- /.container-fluid -->
	    </section>
	    <!-- /.content -->
	  </div>
	  @include('layouts.backend.footer')
@endsection