@extends('layouts.backend.main')
@section('pageTitle','Link Terkait')
@section('breadcrumb','Link Terkait')

@section('content')
	<div class="content-wrapper">
	@include('layouts.backend.breadcrumb')
	    <!-- Main content -->
	    <section class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-md-12">
	            <div class="card">
	              <!-- /.card-header -->
	              <div class="card-header">
	                <h3 class="card-title">List Link Terkait</h3>
	                <div class="card-tools">
	                  
	                </div>
	              </div>
				  	

	              <!-- /.card-header -->
	              <div class="card-body p-1">
	              	<div class="row">
	              		<div class="col-md-12" style="padding-left: 10px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; ">
			                @include('backend.link-terkait.message')
	              			<a href="{{ route('link-terkait.create') }}" class="btn btn-success float-left">
	              			  <span>
	              			    <i class="fa fa-plus-circle"></i>
	              			    <span>
	              			      Tambah Link Terkait
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

	                @if(! $linkTerkaits->count())
	                  <div class="alert alert-danger">
	                    Data Tidak Ditemukan
	                  </div>
	                @else
	                    @if($onlyTrashed)
	                      @include('backend.link-terkait.table-trash')
	                    @else
	                      @include('backend.link-terkait.table')
	                    @endif
	                @endif
	              </div>
	              <!-- /.card-body -->
	              <div class="card-footer clearfix">
	                <div class="clearfix">
	                    {{ $linkTerkaits->appends( Request::query() )->render() }}
	                  </div>
	                  <div class="pull-right">
	                    <small>{{ $linkTerkaitsCount }} {{ str_plural('Record', $linkTerkaitsCount)}}</small>
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