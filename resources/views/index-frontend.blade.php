@extends('layouts.frontend.main')
@section('pageTitle','Beranda')
@section('content')
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">Pelayanan Pelabuhan</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="img-box">
                    <img src="{{ asset('frontend-asset/images/service1.jpg') }}" />
                    <div class="desc">
                        <div class="detail">
                            <h5>Otoritas Pelabuhan</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-box">
                    <img src="{{ asset('frontend-asset/images/service1.jpg') }}" />
                    <div class="desc">
                        <div class="detail">
                            <h5>Tata Usaha</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-box">
                    <img src="{{ asset('frontend-asset/images/service1.jpg') }}" />
                    <div class="desc">
                        <div class="detail">
                            <h5>Fasilitas Pelabuhan</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-box bg-grey">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">Kegiatan Otoritas</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-ship"></i></span>
                    <div class="desc">
                        <h5>kapal labuh</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-anchor"></i></span>
                    <div class="desc">
                        <h5>bongkar muat</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                        <h5>pembangunan</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                        <h5>pelsus</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                        <h5>pengiriman barang</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                        <h5>lorem ipsum</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">News Informasi</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="news-box">
                    <div class="img-box">
                        <a href="#"><img src="{{ asset('frontend-asset/images/news1.jpg') }}" /></a>
                    </div>
                    <div class="desc">
                        <h5><a href="#">Within the construction industry as their overdraft</a></h5>
                        <small><i class="fa fa-clock-o"></i> January 22, 2016</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-box">
                    <div class="img-box">
                        <a href="#"><img src="{{ asset('frontend-asset/images/service1.jpg') }}" /></a>
                    </div>
                    <div class="desc">
                        <h5><a href="#">Strategic and commercial approach with issues</a></h5>
                        <small><i class="fa fa-clock-o"></i> January 22, 2016</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-box">
                    <div class="img-box">
                        <a href="#"><img src="{{ asset('frontend-asset/images/news1.jpg') }}" /></a>
                    </div>
                    <div class="desc">
                        <h5><a href="#">Seven weeks working 'probono' with a charity</a></h5>
                        <small><i class="fa fa-clock-o"></i> January 22, 2016</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-box">
                    <div class="img-box">
                        <a href="#"><img src="{{ asset('frontend-asset/images/service1.jpg') }}" /></a>
                    </div>
                    <div class="desc">
                        <h5><a href="#">Retail banks wake up to digital lending this year</a></h5>
                        <small><i class="fa fa-clock-o"></i> January 22, 2016</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection