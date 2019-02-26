@extends('layouts.backend.main')
@section('pageTitle','Menu Reformasi Birokrasi')
@section('breadcrumb','Menu Reformasi Birokrasi')

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
	                <h3 class="card-title">List Menu Reformasi Birokrasi</h3>
	                <div class="card-tools">
	                  
	                </div>
	              </div>
				  	

	              <!-- /.card-header -->
	              <div class="card-body p-1">
	              	<div class="row">
	              		<div class="col-md-12" style="padding-left: 10px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; ">
			                @include('backend.reformasi-birokrasi.message')
	              			<a href="{{ route('admin.reformasi-birokrasi.create') }}" class="btn btn-info float-left">
	              			  <span>
	              			    <i class="fa fa-plus-circle"></i>
	              			    <span>
	              			      Tambah Menu Reformasi Birokrasi
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
	              		</div>
	              	</div>

	                @if(! $subMenus->count())
	                  <div class="alert alert-danger">
	                    Data Tidak Ditemukan
	                  </div>
	                @else
	                    @if($onlyTrashed)
	                      @include('backend.reformasi-birokrasi.table-trash')
	                    @else
	                      @include('backend.reformasi-birokrasi.table')
	                    @endif
	                @endif
	              </div>
	              <!-- /.card-body -->
	              <div class="card-footer clearfix">
	                <div class="clearfix">
	                    {{ $subMenus->appends( Request::query() )->render() }}
	                  </div>
	                  <div class="pull-right">
	                    <small>{{ $subMenusCount }} {{ str_plural('Record', $subMenusCount)}}</small>
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