@extends('layouts.frontend.main')

@section('pageTitle', 'Pelayanan Rekomendasi Pembukaan Kantor Cabang Keagenan Kapal')

@section('content')
	<section>
	    <div class="content-header">
	        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <div class="desc">
	                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Pelayanan</span></small>
	                        <h2>Rekomendasi Pembukaan Kantor Cabang Keagenan Kapal</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="content-box">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label class="content-label">Rekomendasi Pembukaan Kantor Cabang Keagenan Kapal</label>
                        </div>
                    </div>
                    @include('frontend.message')
                    
	            {!! Form::model($rekomendasiCabangSiupkk, [
	                'method' => 'POST',
	                'route' => 'pelayanan.store',
	                'id' => 'pelayanan-rekomendasi-cabang-siupkk-form',
	                'files' => true,
	            ]) !!}
	            <div class="row">
	                <div class="col">

	                    <div class="contact-form">
                                <label class="contact-label"><span>PMKU Non Inaportnet - Pelayanan Rekomendasi Pembukaan Kantor Cabang Keagenan Kapal</span></label>
                                    <div class="row">
                                		<div class="col-md-6">
                                	    	<div class="form-group {{ $errors->has('file_pengangkatan') ? 'has-error' : ''}} m-input">
                                	    	    <label>Upload Dokumen File Pengangkatan Kepala Cabang <sup>*</sup></label>
                                	    	    <input type="file" class="form-control-file" name="file_pengangkatan">
                                	    	    @if($errors->has('file_pengangkatan'))
                                	    	    <span class="help-block badge badge-danger">{{ $errors->first('file_pengangkatan') }}</span>
                                	    	    @endif
                                	    	</div>
                                	    	<div class="form-group {{ $errors->has('file_npwp_cabang') ? 'has-error' : ''}} m-input">
                                	    	    <label>Upload Dokumen NPWP Kantor Cabang <sup>*</sup></label>
                                	    	    <input type="file" class="form-control-file" name="file_npwp_cabang">
                                	    	    @if($errors->has('file_npwp_cabang'))
                                	    	    <span class="help-block badge badge-danger">{{ $errors->first('file_npwp_cabang') }}</span>
                                	    	    @endif
                                	    	</div>
                                	    	<div class="form-group {{ $errors->has('file_ktp_cabang') ? 'has-error' : ''}} m-input">
                                	    	    <label>Upload KTP Kepala Cabang <sup>*</sup></label>
                                	    	    <input type="file" class="form-control-file" name="file_ktp_cabang">
                                	    	    @if($errors->has('file_ktp_cabang'))
                                	    	    <span class="help-block badge badge-danger">{{ $errors->first('file_ktp_cabang') }}</span>
                                	    	    @endif
                                	    	</div>
                                	    	<div class="form-group {{ $errors->has('file_siupalkk') ? 'has-error' : ''}} m-input">
                                	    	    <label>Upload Dokumen SIUPAL/SIUPKK <sup>*</sup></label>
                                	    	    <input type="file" class="form-control-file" name="file_siupalkk">
                                	    	    @if($errors->has('file_siupalkk'))
                                	    	    <span class="help-block badge badge-danger">{{ $errors->first('file_siupalkk') }}</span>
                                	    	    @endif
                                	    	</div>
                                	    	<div class="form-group {{ $errors->has('voyage_report') ? 'has-error' : ''}} m-input">
                                	    	    <label>Upload Voyage Report <sup>*</sup></label>
                                	    	    <input type="file" class="form-control-file" name="voyage_report">
                                	    	    @if($errors->has('voyage_report'))
                                	    	    <span class="help-block badge badge-danger">{{ $errors->first('voyage_report') }}</span>
                                	    	    @endif
                                	    	</div>
                                		</div>
                                        <div class="col-md-12">
                                        	<div class="form-group {{ $errors->has('domisili') ? 'has-error' : ''}} m-input">
                                                    {!! Form::label('Domisili Kantor Cabang') !!}
                                                    {!! Form::textarea('domisili', null, ['class'=> 'form-control','id'=>'domisili']) !!}
                                
                                                    @if($errors->has('domisili'))
                                                    <span class="help-block text-danger">{{ $errors->first('domisili') }}</span>
                                                    @endif
                                                  </div>
                                            <div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}} m-input">
                                                    {!! Form::label('Keterangan (Opsional)') !!}
                                                    {!! Form::textarea('konten', null, ['class'=> 'form-control','id'=>'konten']) !!}
                                
                                                    @if($errors->has('konten'))
                                                    <span class="help-block text-danger">{{ $errors->first('konten') }}</span>
                                                    @endif
                                                  </div>
                    
                                        </div>
									</div>
									{{ Form::hidden('jenis_pelayanan', 'RCSP') }}
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