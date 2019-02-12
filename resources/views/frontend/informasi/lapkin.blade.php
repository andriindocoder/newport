@extends('layouts.frontend.main')

@section('pageTitle', 'Laporan Kinerja')

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Informasi</span></small>
                        <h2>Laporan Kinerja Kantor OP Tanjung Priok</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label class="content-label">Laporan Kinerja Kantor Otoritas Pelabuhan Tanjung Priok</label>
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
                      <?php $no = paging_number($perPage);?>
                        @foreach($kontens as $konten)
					    <tr>
					      <td>{{ $no }}</td>
					      <td><a href="#">{{ $konten->judul_informasi }}</a></td>
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
            </div>
        </div>
    </div>
</section>
@endsection