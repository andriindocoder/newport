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
		            'method' 	=> 'POST',
		            'route' 	=> 'galeri-foto.store',
		            'id'		 	=> 'galeri-foto-form',
								'files'		=> TRUE
		        ]) !!}

		        @include('backend.galeri-foto.form')

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
@include('backend.galeri-foto.script')