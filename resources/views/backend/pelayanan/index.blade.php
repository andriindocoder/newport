@extends('layouts.backend.main')
@section('pageTitle','Pelayanan')
@section('breadcrumb','Pelayanan')

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
	                <h3 class="card-title">List Pelayanan</h3>
	                <div class="card-tools">
	                  
	                </div>
	              </div>
				  	

	              <!-- /.card-header -->
	              <div class="card-body p-1">
	              	<div class="row">
	              		<div class="col-md-12" style="padding-left: 10px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; ">
			                @include('backend.pelayanan.message')
	              		</div>
	              	</div>

	                @if(! $pelayanans->count())
	                  <div class="alert alert-danger">
	                    Data Tidak Ditemukan
	                  </div>
	                @else
	                    @if($onlyTrashed)
	                      @include('backend.pelayanan.table-trash')
	                    @else
	                      @include('backend.pelayanan.table')
	                    @endif
	                @endif
	              </div>
	              <!-- /.card-body -->
	              <div class="card-footer clearfix">
	                <div class="clearfix">
	                    {{ $pelayanans->appends( Request::query() )->render() }}
	                  </div>
	                  <div class="pull-right">
	                    <small>{{ $pelayanansCount }} {{ str_plural('Record', $pelayanansCount)}}</small>
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
@endsection