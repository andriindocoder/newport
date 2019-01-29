@extends('layouts.frontend.main')

@section('pageTitle', 'Fasilitas Pelabuhan')

@section('content')
	<section>
        <div class="content-header">
            <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="desc">
                            <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Fasilitas Pelabuhan</span></small>
                            <h2>Fasilitas Pelabuhan Tanjung Priok</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            <div class="content-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="content-label" id="label-fasilitas">Rencana Induk Kepelabuhanan</label>
                        </div>
                        
                        <div class="col-md-12" style="padding-right:50px" id="fasilitas">

                        @if($konten->konten)
                            {!! htmlspecialchars_decode(stripslashes($konten->konten))!!}
                        @endif

                        <?php
                            $path = $konten->gambar;
                            $ext = pathinfo($path, PATHINFO_EXTENSION);
                        ?>

                        @if($konten->gambar)
                            @if($ext == 'pdf')
                                <a class="btn btn-sm btn-primary" href="{{ url($path) }}" target="_blank" download><i class="fa fa-download"></i> Download File Rencana Induk Pelabuhan</a>
                            @else 
                                <a href="{{ url($path) }}" target="_blank"><img src="{{ url($path) }}" width="100%"></a>
                            @endif
                        @endif
                        
                        </div>
                        
                    </div>
                </div>
            </div>

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