@extends('layouts.backend.main')
@section('pageTitle','Update Sub Menu Reformasi Birokrasi')
@section('breadcrumbTitle','Update Sub Menu Reformasi Birokrasi')
@section('breadcrumbParent','Pengaturan / Sub Menu Reformasi Birokrasi')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($subMenu, [
		            'method' => 'PUT',
		            'route' => ['admin.reformasi-birokrasi.update', $subMenu->id],
		            'id' => 'reformasi-birokrasi-form',
		            'files'=> TRUE,
		        ]) !!}

		        @include('backend.reformasi-birokrasi.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
@endsection
@include('backend.reformasi-birokrasi.script')