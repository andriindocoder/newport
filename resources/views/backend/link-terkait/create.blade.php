@extends('layouts.backend.main')
@section('pageTitle','Tambah Link Terkait')
@section('breadcrumbTitle','Tambah Link Terkait')
@section('breadcrumbParent','Pengaturan / Link Terkait')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($linkTerkait, [
		            'method' => 'POST',
		            'route' => 'link-terkait.store',
								'id' => 'link-terkait-form',
								'files'=> TRUE,
		        ]) !!}

		        @include('backend.link-terkait.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
@endsection
@include('backend.link-terkait.script')