@extends('layouts.frontend.main')

@section('pageTitle', 'PPID')

@section('content')
	<section>
        <div class="content-header">
            <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="desc">
                            <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>PPID</span></small>
                            <h2>Layanan Penyediaan Informasi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-box">
            <div class="container">
                <div class="row">
                    @include('frontend.ppid.form-ppid')
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