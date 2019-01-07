@extends('layouts.backend.main')
@section('pageTitle','Update Profil')
@section('breadcrumbTitle','Update Profil')
@section('breadcrumbParent','Pengaturan / Profil')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($profil, [
		            'method' => 'PUT',
		            'route' => ['admin.profil.update', $profil->id],
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