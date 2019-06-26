@extends('layouts.frontend.main')
@section('pageTitle','Pelaporan')
@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Pelaporan</span></small>
                        <h2>Pelaporan Perusahaan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label class="content-label">Pelaporan Perusahaan</label>
                </div>
            </div>
        	@include('frontend.pelaporan.message')
            {!! Form::model($pelaporan, [
                'method' => 'POST',
                'route' => 'pelaporan.store',
                'id' => 'pelaporan-form',
                'files' => true,
            ]) !!}
            <?php
            	$perusahaan = Auth::user()->pmku; 
            ?>
            <div class="row">
                <div class="col">
                    <div class="contact-form">
                            <label class="contact-label"><span>Data Perusahaan</span></label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group m-input">
                                      <label>Nama Perusahaan <sup>*</sup></label>
					
                                      {!! Form::text(null, null, ['class'=> 'form-control', 'disabled', 'placeholder'=>$perusahaan->nama_perusahaan]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group m-input">
                                      <label>Alamat Perusahaan <sup>*</sup></label>
					
                                      {!! Form::textarea(null, null, ['class'=> 'form-control', 'disabled', 'placeholder'=>$perusahaan->alamat_perusahaan, 'rows'=>3]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group m-input">
                                      <label>Nomor SIUP <sup>*</sup></label>
					
                                      {!! Form::text(null, null, ['class'=> 'form-control', 'disabled', 'placeholder'=>$perusahaan->nomor_siup]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group m-input">
                                      <label>NPWP <sup>*</sup></label>
					
                                      {!! Form::text(null, null, ['class'=> 'form-control', 'disabled', 'placeholder'=>$perusahaan->npwp]) !!}
                                    </div>
                                </div>
                            </div>

                            <label class="contact-label"><span>Data Laporan</span></label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group {{ $errors->has('jenis_pelaporan_id') ? 'has-error' : ''}} m-input">
										<label>Jenis Laporan <sup>*</sup></label>
										{!! Form::select('jenis_pelaporan_id',App\Model\JenisLaporan::pluck('nama','id'),null,['class'=>'selectpicker','title' => 'Pilih Jenis Laporan ...','id'=>'pelaporan-id','data-live-search'=>'true']) !!}

										@if($errors->has('jenis_pelaporan_id'))
										<span class="help-block badge badge-danger">{{ $errors->first('jenis_pelaporan_id') }}</span>
										@endif
									  </div>
                                    <div class="row">
                                    	<div class="col-md-2">
                                    		    <div class="form-group {{ $errors->has('tahun') ? 'has-error' : ''}} m-input">
                                    		        <label>Tahun <sup>*</sup></label>
                                    		        {!! Form::select('tahun',App\Model\Tahun::pluck('tahun','id'),null,['class'=>'selectpicker','title' => 'Pilih Tahun ...','id'=>'tahun-id','data-live-search'=>'true']) !!}
                                    		        @if($errors->has('tahun'))
                                    			  <span class="help-block badge badge-danger">{{ $errors->first('tahun') }}</span>
                                    			  @endif
                                    		    </div>
                                    	</div>
                                    	<div class="col-md-2">
                                    		    <div class="form-group {{ $errors->has('bulan') ? 'has-error' : ''}} m-input">
                                    		        <label>Bulan <sup>*</sup></label>
                                    		        {!! Form::select('bulan',App\Model\Bulan::pluck('nama','id'),null,['class'=>'selectpicker','title' => 'Pilih bulan ...','id'=>'bulan-id','data-live-search'=>'true']) !!}
                                    		        @if($errors->has('bulan'))
                                    			  <span class="help-block badge badge-danger">{{ $errors->first('bulan') }}</span>
                                    			  @endif
                                    		    </div>
                                    	</div>
                                    </div>
                                    <div class="form-group {{ $errors->has('judul_laporan') ? 'has-error' : ''}} m-input">
                                      <label>Judul Laporan <sup>*</sup></label>

                                      {!! Form::text('judul_laporan', null, ['class'=> 'form-control']) !!}

                                      @if($errors->has('judul_laporan'))
                                      <span class="help-block badge badge-danger">{{ $errors->first('judul_laporan') }}</span>
                                      @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if(Auth::user()->pmku->jenis_usaha_id == 1)
                                            <a href="{{ url('format-laporan/bongkar-peti-kemas.xlsx') }}" class="btn btn-success btn-sm btn-block"><i class="fa fa-download"></i>  Download Format Laporan Bongkar Peti Kemas</a>
                                            <a href="{{ url('format-laporan/muat-peti-kemas.xlsx') }}" class="btn btn-info btn-sm btn-block"><i class="fa fa-download"></i>  Download Format Laporan Muat Peti Kemas</a>
                                            <a href="{{ url('format-laporan/bongkar-multi-purpose.xlsx') }}" class="btn btn-success btn-sm btn-block"><i class="fa fa-download"></i>  Download Format Laporan Bongkar Multi Purpose</a>
                                            <a href="{{ url('format-laporan/muat-multi-purpose.xlsx') }}" class="btn btn-info btn-sm btn-block"><i class="fa fa-download"></i>  Download Format Laporan Muat Multi Purpose</a>
                                            <a href="{{ url('format-laporan/bongkar-muat-alat-berat.xlsx') }}" class="btn btn-success btn-sm btn-block"><i class="fa fa-download"></i>  Download Format Laporan Bongkar Muat Alat Berat</a>
                                            @else
                                            <a href="{{ url('format-laporan/format_laporan_kunjungan_kapal.xlsx') }}" class="btn btn-info btn-sm btn-block"><i class="fa fa-download"></i>  Download Format Laporan Kunjungan Kapal</a>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                    	<div class="col-md-6">
                                    		<div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}} m-input">
                                    		    <label>File Laporan <sup>*</sup></label><br>
                                                <small><i> <span style="color:red">File Laporan Harus Sesuai dengan Format. Silahkan Download Format Laporan dengan klik tombol Download di atas terlebih dahulu.</span></i></small><br>
                                    		    {!! Form::file('konten',['class'=>'form-control-file']) !!}
                                    		    @if($errors->has('konten'))
                                    		    <span class="help-block badge badge-danger">{{ $errors->first('konten') }}</span>
                                    		    @endif
                                    		</div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            
                            <small><sup>*</sup> <i>Tidak boleh kosong</i></small><br>
                            <div class="btn-box">
                                <button type="submit" class="btn btn-blue"><span class="fa fa-plus-circle"></span> Kirim</button>
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
                    <h4>How can we help you?</h4>
                </div>
                <div class="col-md-6 right">
                    <a href="#" class="btn btn-blue">Send Feedback <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection