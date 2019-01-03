@extends('layouts.backend.main')
@section('pageTitle','Update Informasi')
@section('breadcrumbTitle','Update Informasi')
@section('breadcrumbParent','Pengaturan / Informasi')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($informasi, [
		            'method' => 'PUT',
		            'route' => ['admin.informasi.update', $informasi->id],
		            'id' => 'link-terkait-form',
		            'files'=> TRUE,
		        ]) !!}

		        @include('backend.informasi.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
@endsection
@include('backend.informasi.script')