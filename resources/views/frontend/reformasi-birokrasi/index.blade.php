@extends('layouts.frontend.main')

@section('pageTitle', 'Reformasi Birokrasi')

@section('content')
	<section>
        <div class="content-header">
            <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="desc">
                            <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Informasi</span></small>
                            <h2>Reformasi Birokrasi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-11">
                @include('frontend.reformasi-birokrasi.form')
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