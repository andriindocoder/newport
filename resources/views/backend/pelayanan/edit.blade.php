@extends('layouts.backend.main')
@section('pageTitle','Proses Pelayanan')
@section('breadcrumbTitle','Proses Pelayanan')
@section('breadcrumbParent','Pengaturan / Informasi')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($pelayanan, [
		            'method' => 'PUT',
		            'route' => ['admin.pelayanan.update', $pelayanan->id],
		            'id' => 'link-terkait-form',
		            'files'=> TRUE,
		        ]) !!}

		        @include('backend.pelayanan.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
@endsection
@include('backend.pelayanan.script')