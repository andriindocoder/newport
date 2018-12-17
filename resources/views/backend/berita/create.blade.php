@extends('layouts.backend.main')
@section('pageTitle','Tambah Berita')
@section('breadcrumbTitle','Tambah Berita')
@section('breadcrumbParent','Pengaturan / Berita')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($post, [
		            'method' => 'POST',
		            'route' => 'berita.store',
		            'id' => 'berita-form',
		            'files'=> TRUE,

		        ]) !!}

		        @include('backend.berita.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
@endsection
@include('backend.berita.script')