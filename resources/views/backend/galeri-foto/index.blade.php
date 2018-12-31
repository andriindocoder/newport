@extends('layouts.backend.main')
@section('pageTitle','Pengaturan Galeri Foto')
@section('breadcrumb','Galeri Foto')

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
	                <h3 class="card-title">Pengaturan Galeri Foto</h3>
	                <div class="card-tools">

	                </div>
	              </div>
				  	

	              <!-- /.card-header -->
	              <div class="card-body p-1">
	              	<div class="row">
	              		<div class="col-md-12" style="padding-left: 10px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; ">
			                @include('backend.galeri-foto.message')
	              			<a href="{{ route('admin.galeri-foto.create') }}" class="btn btn-info float-left">
	              			  <span>
	              			    <i class="fa fa-plus-circle"></i>
	              			    <span>
	              			      Tambah Foto
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

	                @if(! $galeriFotos->count())
	                  <div class="alert alert-danger">
	                    Data Tidak Ditemukan
	                  </div>
	                @else
	                    @if($onlyTrashed)
	                      @include('backend.galeri-foto.table-trash')
	                    @else
	                      @include('backend.galeri-foto.table')
	                    @endif
	                @endif
	              </div>
	              <!-- /.card-body -->
	              <div class="card-footer clearfix">
	                <div class="clearfix">
	                    {{ $galeriFotos->appends( Request::query() )->render() }}
	                  </div>
	                  <div class="pull-right">
	                    <small>{{ $galeriFotosCount }} {{ str_plural('Record', $galeriFotosCount)}}</small>
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