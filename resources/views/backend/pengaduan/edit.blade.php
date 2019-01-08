@extends('layouts.backend.main')
@section('pageTitle','Update Pengaduan Whistleblower')
@section('breadcrumbTitle','Update Pengaduan Whistleblower')
@section('breadcrumbParent','Pengaturan / Pengaduan Whistleblower')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($pengaduan, [
		            'method' => 'PUT',
		            'route' => ['pengaduan.update', $pengaduan->id],
		            'id' => 'pengaduan-form',
		            'files'=> TRUE,
		        ]) !!}

		        @include('backend.pengaduan.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
	@include('layouts.backend.footer')
@endsection