@extends('layouts.backend.main')
@section('pageTitle','Informasi')
@section('breadcrumb','Informasi')

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
	                <h3 class="card-title">List Informasi</h3>
	                <div class="card-tools">
	                  
	                </div>
	              </div>
				  	

	              <!-- /.card-header -->
	              <div class="card-body p-1">
	              	<div class="row">
	              		<div class="col-md-12" style="padding-left: 10px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; ">
			                @include('backend.informasi.message')
			                @role('superadmin')
	              			<a href="{{ route('admin.informasi.create') }}" class="btn btn-info float-left">
	              			  <span>
	              			    <i class="fa fa-plus-circle"></i>
	              			    <span>
	              			      Tambah Informasi
	              			    </span>
	              			  </span>
	              			</a>
	              			<div class="float-right" style="color: blue;">
	              				<?php $links = [];?>
	              				@foreach($statusList as $key => $value)
	              				    @if($value)
	              				      <?php $selected = Request::get('status') == $key ? 'selected-status' : '' ?>
	              				      <?php $links[] = "<a class=\"{$selected}\" href=\"?status={$key}\">" .ucwords($key) ."({$value}) </a>"?>
	              				    @endif
	              				@endforeach
	              				{!! implode(' | ', $links) !!}
	              			</div>
	              			@endrole
	              		</div>
	              	</div>

	                @if(! $informasis->count())
	                  <div class="alert alert-danger">
	                    Data Tidak Ditemukan
	                  </div>
	                @else
	                    @if($onlyTrashed)
	                      @include('backend.informasi.table-trash')
	                    @else
	                      @include('backend.informasi.table')
	                    @endif
	                @endif
	              </div>
	              <!-- /.card-body -->
	              <div class="card-footer clearfix">
	                <div class="clearfix">
	                    {{ $informasis->appends( Request::query() )->render() }}
	                  </div>
	                  <div class="pull-right">
	                    <small>{{ $informasisCount }} {{ str_plural('Record', $informasisCount)}}</small>
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