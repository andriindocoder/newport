@extends('layouts.backend.main')
@section('pageTitle','Edit Berita')
@section('breadcrumbTitle','Edit Berita')
@section('breadcrumbParent','Pengaturan / Berita')

@section('content')
	<div class="content-wrapper">
		@include('layouts.backend.breadcrumb')
		<!-- Main content -->
		    <div class="row">
		      <div class="col-lg-12">
		        {!! Form::model($post, [
		            'method' => 'PUT',
		            'route' => ['berita.update', $post->id],
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