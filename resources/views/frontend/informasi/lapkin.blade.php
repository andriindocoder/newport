@extends('layouts.frontend.main')

@section('pageTitle', $konten->nama)

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Informasi</span></small>
                        <h2>{{ $konten->judul_informasi }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label class="content-label">{{ $konten->judul_informasi }}</label>
                </div>
            </div>
        	@include('frontend.message')
            <div class="row">
                <div class="col-md-12">
					<table class="table table-striped">
					  <tr>
					    <th style="width: 10px">No</th>
					    <th>Judul</th>
					    <th>Tahun</th>
					    <th>Bulan</th>
					    <th class="text-center" style="width: 200px">Download LapKin</th>
					  </tr>
					    <tr>
					      <td>1</td>
					      <td>Laporan Kinerja Kantor Otoritas Pelabuhan Tanjung Priok Januari 2019</td>
					      <td>2019</td>
					      <td>Januari</td>
					      <td align="center">
					        <a href="#" class="btn btn-sm btn-block btn-success"><i class="fa fa-download"></i> Download</a>
					      </td>
				        {!! Form::close() !!}
					    </tr>
					</table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection