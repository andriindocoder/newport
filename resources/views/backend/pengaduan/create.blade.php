@extends('layouts.backend.main')
@section('pageTitle','Tambah Pengaduan Whistleblower')
@section('breadcrumbTitle','Tambah Pengaduan Whistleblower')
@section('breadcrumbParent','Pengaturan  Pengaduan Whistleblower')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($pengaduan, [
		            'method' => 'POST',
		            'route' => 'pengaduan.store',
		            'id' => 'pengaduan-form'
		        ]) !!}

		        @include('backend.pengaduan.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
	@include('layouts.backend.footer')
@endsection
@include('backend.pengaduan.script')