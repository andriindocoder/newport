@extends('layouts.backend.main')
@section('pageTitle','Update Link Terkait')
@section('breadcrumbTitle','Update Link Terkait')
@section('breadcrumbParent','Pengaturan / Link Terkait')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($linkTerkait, [
		            'method' => 'PUT',
		            'route' => ['link-terkait.update', $linkTerkait->id],
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