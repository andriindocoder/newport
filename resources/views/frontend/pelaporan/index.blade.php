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
        	
            <div class="row">
                <div class="col">
                    <a href="{{ route('pelaporan.create') }}" class="btn btn-info"><span class="fa fa-plus-circle"></span> Tambah Pelaporan</a>
                    
                    <div class="card-body p-1">
                    <div class="row">
                        <div class="col-md-12" style="padding-left: 10px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; ">
                            @include('frontend.pelaporan.message')

                        </div>
                    </div>
                    @if(! $pelaporans->count())
                      <div class="alert alert-danger">
                        Data Tidak Ditemukan
                      </div>
                    @else
                        @include('frontend.pelaporan.table')
                    @endif
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <div class="clearfix">
                        {{ $pelaporans->appends( Request::query() )->render() }}
                      </div>
                      <div class="pull-right">
                        <small>{{ $pelaporansCount }} {{ str_plural('Report', $pelaporansCount)}}</small>
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