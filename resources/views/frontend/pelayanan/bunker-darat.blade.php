@extends('layouts.frontend.main')

@section('pageTitle', 'Pelayanan Bunker Darat')

@section('content')
	<section>
	    <div class="content-header">
	        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <div class="desc">
	                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Pelayanan</span></small>
	                        <h2>Bunker Darat</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="content-box">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label class="content-label">Bunker Darat</label>
                        </div>
                    </div>
                    @include('frontend.message')
                    
	            {!! Form::model($bunkerDarat, [
	                'method' => 'POST',
	                'route' => 'pelayanan.store',
	                'id' => 'pelayanan-bunker-darat-form',
	                'files' => true,
	            ]) !!}
	            <div class="row">
	                <div class="col">

	                    <div class="contact-form">
                                <label class="contact-label"><span>PMKU Non Inaportnet - Pelayanan Bunker Darat</span></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}} m-input">
                                                    {!! Form::label('Keterangan') !!}
                                                    {!! Form::textarea('konten', null, ['class'=> 'form-control','id'=>'konten']) !!}
                                
                                                    @if($errors->has('konten'))
                                                    <span class="help-block text-danger">{{ $errors->first('konten') }}</span>
                                                    @endif
                                                  </div>
                    
                                        </div>
									</div>
									{{ Form::hidden('jenis_pelayanan', 'BKDR') }}
									<small><sup>*</sup> <i>Tidak boleh kosong</i></small>
									<div class="btn-box">
										<button type="submit" class="btn btn-blue"><span>Send Form</span></button>
										<a href="{{ url('/') }}" class="btn btn-warning"> Cancel</a>
									</div>
                                    {!! Form::close() !!}
                                    @include('frontend.pelayanan.data-perusahaan')

	                    </div>
	                </div>
	            </div>
			    
                </div>
	    </div>
	</section>
@endsection