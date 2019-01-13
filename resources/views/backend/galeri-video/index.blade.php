@extends('layouts.backend.main')
@section('pageTitle','Pengaturan Galeri Video')
@section('breadcrumb','Galeri Video')

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
	                <h3 class="card-title">Pengaturan Galeri Video</h3>
	                <div class="card-tools">

	                </div>
	              </div>
				  	

	              <!-- /.card-header -->
	              <div class="card-body p-1">
	              	<div class="row">
	              		<div class="col-md-12" style="padding-left: 10px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; ">
			                @include('backend.galeri-video.message')
	              			<a href="{{ route('admin.galeri-video.create') }}" class="btn btn-info float-left">
	              			  <span>
	              			    <i class="fa fa-plus-circle"></i>
	              			    <span>
	              			      Tambah Video
	              			    </span>
	              			  </span>
	              			</a>

	              		</div>
	              	</div>

	                @if(! $galeriVideos->count())
	                  <div class="alert alert-danger">
	                    Data Tidak Ditemukan
	                  </div>
	                @else
	                    @if($onlyTrashed)
	                      @include('backend.galeri-video.table-trash')
	                    @else
	                      @include('backend.galeri-video.table')
	                    @endif
	                @endif
	              </div>
	              <!-- /.card-body -->
	              <div class="card-footer clearfix">
	                <div class="clearfix">
	                    {{ $galeriVideos->appends( Request::query() )->render() }}
	                  </div>
	                  <div class="pull-right">
	                    <small>{{ $galeriVideosCount }} {{ str_plural('Record', $galeriVideosCount)}}</small>
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