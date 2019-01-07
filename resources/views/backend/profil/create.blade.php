@extends('layouts.backend.main')
@section('pageTitle','Tambah Profil')
@section('breadcrumbTitle','Tambah Profil')
@section('breadcrumbParent','Pengaturan / Profil')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($profil, [
		            'method' => 'POST',
		            'route' => 'admin.profil.store',
								'id' => 'profil-form',
								'files'=> TRUE,
		        ]) !!}

		        @include('backend.profil.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
@endsection
@include('backend.profil.script')