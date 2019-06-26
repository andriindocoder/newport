@extends('layouts.frontend.main')

@section('pageTitle', 'Pendaftara PMKU')

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                    <small class="breadcrumb-list"><span><a href="{{ url('/') }}">Beranda</a></span><span>Pendaftaran PMKU</span></small>
                        <h2>Pendaftaran PMKU</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="container">
            @include('frontend.message')
            <div class="row">
                <div class="col">
                    <label class="content-label">Pendaftaran PMKU</label>
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