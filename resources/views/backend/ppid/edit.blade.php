@extends('layouts.backend.main')
@section('pageTitle','Update PPID')
@section('breadcrumbTitle','Update PPID')
@section('breadcrumbParent','Pengaturan / PPID')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($ppid, [
		            'method' => 'PUT',
		            'route' => ['admin.ppid.update', $ppid->id],
		            'id' => 'ppid-form',
		            'files'=> TRUE,
		        ]) !!}

		        @include('backend.ppid.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
	@include('layouts.backend.footer')
@endsection