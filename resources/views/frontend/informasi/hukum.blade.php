@extends('layouts.frontend.main')

@section('pageTitle', 'Produk Hukum')

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Informasi</span></small>
                        <h2>Produk Hukum</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label class="content-label">Produk Hukum Kepala Kantor OP Tanjung Priok</label>
                </div>
            </div>
        	@include('frontend.message')
            <div class="row">
                <div class="col-md-10">
					<table class="table table-striped">
					  <tr>
					    <th style="width: 10px">No</th>
					    <th>Judul</th>
					    <th>Tahun</th>
					    <th>Bulan</th>
					    <th class="text-center" style="width: 200px">Download</th>
					  </tr>
                      <?php $no = paging_number($perPage);?>
                        @foreach($kontens as $konten)
					    <tr>
					      <td>{{ $no }}</td>
					      <td>{{ $konten->judul_informasi }}</td>
					      <td>{{ $konten->year ? $konten->year->tahun :  '_'}}</td>
                          <td>{{ $konten->month ? $konten->month->nama : '-'}}</td>
					      <td align="center">
                            @if($konten->gambar)
					        <a href="{{ url($konten->gambar) }}" class="btn btn-sm btn-block btn-success" download><i class="fa fa-download"></i> Download</a>
                            @else
                            -
                            @endif
					      </td>
				        {!! Form::close() !!}
					    </tr>
                        <?php $no++;?>
                        @endforeach
					</table>
                </div>
                <div class="col-md-1">
                    <a href="http://jdih.dephub.go.id/" class="btn btn-info" target="_blank"><i class="fa fa-balance-scale"></i> Link JDIH Kemenhub</a>
                </div> 
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</section>
@endsection