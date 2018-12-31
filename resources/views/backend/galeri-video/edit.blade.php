@extends('layouts.backend.main')
@section('pageTitle','Tambah Video')
@section('breadcrumbTitle','Tambah Video')
@section('breadcrumbParent','Pengaturan / Video')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($galeriVideo, [
		            'method' 	=> 'PUT',
		            'route' 	=> ['admin.galeri-video.update', $galeriVideo->id],
		            'id' 			=> 'galeri-video-form'
		        ]) !!}

		        @include('backend.galeri-video.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
@endsection
@include('backend.berita.script')