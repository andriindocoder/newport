@extends('layouts.frontend.main')

@section('pageTitle', 'Whistleblower')

@section('content')
	<section>
	    <div class="content-header">
	        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <div class="desc">
	                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Kontak</span></small>
	                        <h2>Whistleblower</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="content-box">
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <label class="content-label">Whistleblower</label>
	                </div>
	            </div>
            	@include('frontend.pengaduan.message')
	            {!! Form::model($pengaduan, [
	                'method' => 'POST',
	                'route' => 'pengaduan.store',
	                'id' => 'frontend-pengaduan-form',
	                'files' => true,
	            ]) !!}
	            <div class="row">
	                <div class="col">
	                    <div class="contact-form">
	                        <form role="form">
	                        	<p align="justify"><em>Form whistleblower ini digunakan untuk memproses pengaduan dan pemberian informasi oleh whistleblower sehubungan dengan adanya perbuatan yang melanggar perundang-undangan, peraturan/standar, kode etik, dan kebijakan, serta tindakan lain yang sejenis berupa ancaman langsung atas kepentingan umum, serta Korupsi, Kolusi, dan Nepotisme (KKN).</em></p>
	                        	<p align="justify"><em>Whistleblower adalah seseorang yang melaporkan perbuatan berindikasi tindak pidana/pelanggaran dan memiliki akses informasi yang memadai atas terjadinya indikasi tindakan tersebut.</em></p>
	                        	<p align="justify"><strong><em>Anda tidak perlu khawatir terungkapnya identitas diri Anda karena Kantor Otoritas Pelabuhan Tanjung Priok akan merahasiakan identitas diri Anda sebagai whistleblower. Kami menghargai informasi yang Anda laporkan. Fokus kami kepada materi informasi yang Anda laporkan.</em></strong></p>
	                            <label class="contact-label"><span>Data Pengirim</span></label>
	                            <div class="row"> 
	                                <div class="col-md-12">
	                                	<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}} m-input">
	                                	  <label>Nama <sup>*</sup></label>

	                                	  {!! Form::text('nama', null, ['class'=> 'form-control']) !!}

	                                	  @if($errors->has('nama'))
	                                	  <span class="help-block badge badge-danger">{{ $errors->first('nama') }}</span>
	                                	  @endif
										</div>
										
										<div class="form-group {{ $errors->has('jenis_id') ? 'has-error' : ''}} m-input">
											<label>Jenis Identitas<sup>*</sup></label>

											{!! Form::select('jenis_id',['KTP' => 'KTP', 'NPWP' => 'NPWP', 'SIM' => 'SIM'],null,['class'=>'selectpicker','title' => 'Pilih jenis identitas ...','id'=>'identitas-id','data-live-search'=>'true']) !!}

											@if($errors->has('jenis_id'))
											<span class="help-block badge badge-danger">{{ $errors->first('jenis_id') }}</span>
											@endif
										</div>

										<div class="form-group {{ $errors->has('nomor_id') ? 'has-error' : ''}} m-input">
											<label>Nomor Identitas<sup>*</sup></label>

											{!! Form::text('nomor_id', null, ['class'=> 'form-control']) !!}

											@if($errors->has('nomor_id'))
											<span class="help-block badge badge-danger">{{ $errors->first('nomor_id') }}</span>
											@endif
										</div>

	                                	<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} m-input">
	                                	  <label>Email <sup>*</sup></label>

	                                	  {!! Form::text('email', null, ['class'=> 'form-control']) !!}

	                                	  @if($errors->has('email'))
	                                	  <span class="help-block badge badge-danger">{{ $errors->first('email') }}</span>
	                                	  @endif
	                                	</div>
	                                	<div class="form-group {{ $errors->has('instansi') ? 'has-error' : ''}} m-input">
	                                	  <label>Instansi</label>

	                                	  {!! Form::text('instansi', null, ['class'=> 'form-control']) !!}

	                                	  @if($errors->has('instansi'))
	                                	  <span class="help-block badge badge-danger">{{ $errors->first('instansi') }}</span>
	                                	  @endif
	                                	</div>
	                                    <div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}} m-input">
	                                      <label>Alamat</label>

	                                      {!! Form::textarea('alamat', null, ['class'=> 'form-control','rows'=>3]) !!}

	                                      @if($errors->has('alamat'))
	                                      <span class="help-block badge badge-danger">{{ $errors->first('alamat') }}</span>
	                                      @endif
	                                    </div>
	                                    <div class="form-group {{ $errors->has('pesan') ? 'has-error' : ''}} m-input">
	                                      <label>Pesan <sup>*</sup></label>

	                                      {!! Form::textarea('pesan', null, ['class'=> 'form-control','rows'=>8]) !!}

	                                      @if($errors->has('pesan'))
	                                      <span class="help-block badge badge-danger">{{ $errors->first('pesan') }}</span>
	                                      @endif
	                                    </div>
	                                    <div class="form-group {{ $errors->has('namafile') ? 'has-error' : ''}} m-input">
	                                        <label>Upload Foto (Jika Diperlukan)</label>
	                                        {!! Form::file('namafile',['class'=>'form-control-file']) !!}
	                                        @if($errors->has('namafile'))
	                                        <span class="help-block badge badge-danger">{{ $errors->first('namafile') }}</span>
	                                        @endif
	                                    </div>
	                                </div>
	                            </div>
	                            
	                            <small><sup>*</sup> <i>Tidak boleh kosong</i></small>
	                            <div class="btn-box">
	                                <button type="submit" class="btn btn-blue">Send Form</button>
	                                <button type="reset" class="btn btn-org">Cancel</button>
	                            </div>
	                    </div>
	                </div>
	            </div>
	        {!! Form::close() !!}
	        </div>
	    </div>
	    <div class="info-box">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    
	                </div>
	                <div class="col-md-6 right">
	                    
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
@endsection