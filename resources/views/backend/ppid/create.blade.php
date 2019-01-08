@extends('layouts.backend.main')
@section('pageTitle','Tambah PPID')
@section('breadcrumbTitle','Tambah PPID')
@section('breadcrumbParent','Pengaturan  PPID')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($ppid, [
		            'method' => 'POST',
		            'route' => 'ppid.store',
		            'id' => 'ppid-form'
		        ]) !!}

		        @include('backend.ppid.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
	@include('layouts.backend.footer')
@endsection
@include('backend.ppid.script')