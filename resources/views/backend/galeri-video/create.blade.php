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
		            'method' 	=> 'POST',
		            'route' 	=> 'admin.galeri-video.store',
		            'id'		 	=> 'galeri-video-form',
								'files'		=> TRUE
		        ]) !!}

		        @include('backend.galeri-video.form')

		        {!! Form::close() !!}
		      </div>
		    </div>
		  <!-- ./row -->
	</div>
@endsection
@section('javascript')
  <script type="text/javascript">

    //var simplemde1 = new SimpleMDE({ element: $("#content")[1] });

  </script>
@endsection
@include('backend.galeri-video.script')