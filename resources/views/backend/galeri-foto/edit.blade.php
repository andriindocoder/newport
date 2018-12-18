@extends('layouts.backend.main')
@section('pageTitle','Tambah Foto')
@section('breadcrumbTitle','Tambah Foto')
@section('breadcrumbParent','Pengaturan / Foto')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($galeriFoto, [
		            'method' 	=> 'PUT',
		            'route' 	=> ['galeri-foto.update', $galeriFoto->id],
		            'id' 			=> 'galeri-foto-form'
		        ]) !!}

		        @include('backend.galeri-foto.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
@endsection
@include('backend.berita.script')