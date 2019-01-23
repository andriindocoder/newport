@extends('layouts.frontend.main')

@section('pageTitle', 'Pelayanan Rekomendasi Surat Izin Kerja Keruk')

@section('content')
	<section>
	    <div class="content-header">
	        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <div class="desc">
	                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Pelayanan</span></small>
	                        <h2>Rekomendasi Surat Izin Kerja Keruk</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="content-box">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label class="content-label">Rekomendasi Surat Izin Kerja Keruk</label>
                        </div>
                    </div>
                    @include('frontend.message')
                    
	            {!! Form::model($rekomendasiSikk, [
	                'method' => 'POST',
	                'route' => 'pelayanan.storeSikk',
	                'id' => 'pelayanan-rekomendasi-sikk',
	                'files' => true,
	            ]) !!}
	            <div class="row">
	                <div class="col">
	                    @include('frontend.pelayanan.form-sikk')
	                </div>
	            </div>
	            {{ Form::hidden('jenis_pelayanan', 'SIKK') }}
			    {!! Form::close() !!}
                </div>
	    </div>
	</section>
@endsection