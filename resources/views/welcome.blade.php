
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('frontend-assest/images/favicon.ico') }}">
    <title>Otoritas Pelabuhan Tanjung Priok Template</title>
    <link href="{{ asset('frontend-asset/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend-asset/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend-asset/css/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend-asset/css/jquery.fancybox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend-asset/css/animate.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend-asset/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo-box">
                        <a href="index.html">
                            <img src="{{ asset('frontend-asset/images/logo.png') }}" />
                            <span><big>Otoritas pelabuhan tanjung priok</big><small>direktorat jenderal perhubungan laut<br/>kementrian perhubungan republik indonesia</small></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <ul class="nav-top list">
                        <li><a href="#" class="btn btn-brown"><span>login</span><i class="fa fa-chevron-down"></i></a></li>
                        <li><a href="#" class="btn btn-org"><span>register</span><i class="fa fa-chevron-down"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav-menu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="navbar-header">
                            <nav class="navbar-menu">
                                <ul class="navbar-nav">
                                    <li class="active"><a href="index.html">beranda</a></li>
                                    <li><a href="profil.html">profil</a></li>
                                    <li><a href="#">pelayanan</a>
                                        <ul>
                                            <li><a href="pelayanan.html">pelayanan 1</a></li>
                                            <li><a href="pelayanan.html">pelayanan 2</a></li>
                                            <li><a href="pelayanan.html">pelayanan 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">fasilitas</a></li>
                                    <li><a href="#">publikasi</a></li>
                                    <li><a href="#">hubungi kami</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="slider-home">
            <div id="slider-home">
                <div class="slide">
                    <img src="{{ asset('frontend-asset/images/slider1.png') }}" />
                    <div class="container">
                        <div class="row slide-content">
                            <div class="col-sm-7">
                                <div class="desc" data-animation="fadeInLeftBig" data-delay="0.5s">
                                    <h1>Lorem Ipsum dolore sit amet</h1>
                                    <p>
                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit labonosam, nisi ut aliquid ex ea commodi consequatur
                                    </p>
                                    <a href="#" class="btn btn-blue" data-animation="fadeInUpBig" data-delay="1s">Read more <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('frontend-asset/images/slider1.png') }}" />
                    <div class="container">
                        <div class="row slide-content">
                            <div class="col-sm-7">
                                <div class="desc" data-animation="fadeInDownBig" data-delay="0.5s">
                                    <h1>Lorem Ipsum dolore sit amet</h1>
                                    <p>
                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit labonosam, nisi ut aliquid ex ea commodi consequatur
                                    </p>
                                    <a href="#" class="btn btn-blue" data-animation="fadeInLeftBig" data-delay="1s">Read more <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('frontend-asset/images/slider1.png') }}" />
                    <div class="container">
                        <div class="row slide-content">
                            <div class="col-sm-7">
                                <div class="desc" data-animation="fadeInUpBig" data-delay="0.5s">
                                    <h1>Lorem Ipsum dolore sit amet</h1>
                                    <p>
                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit labonosam, nisi ut aliquid ex ea commodi consequatur
                                    </p>
                                    <a href="#" class="btn btn-blue" data-animation="fadeInUpBig" data-delay="1s">Read more <i class="fa fa-chevron-right"></i></a>
                                </div>
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
                        <h4>Keselamatan Berlayar adalah Prioritas Kami</h4>
                    </div>
                    <div class="col-md-6 right">
                        <a href="#" class="btn btn-blue">Send Feedback <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
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
                            <span class="icon-hex"><i class="fa fa-user"></i></span>
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
                            <span class="icon-hex"><i class="fa fa-user"></i></span>
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
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-nav">
                        <label>head office</label>
                        <address>
                            Jl. Palmas, No.1, Pelabuhan Tanjung Priok, 14310
                            <br/> Jl. Raya Pelabuhan, Tj. Priok
                            <br/> Kota Jakarta Utara, Indonesia
                        </address>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-nav">
                        <label>Index</label>
                        <ul class="list">
                            <li><a href="#">Term of Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>&copy; 2018 Otoritas Pelabuhan Tanjung Priok Indonesia | Developed by Snipertechnology</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('frontend-asset/js/jquery.min.js') }}"></script>
    <script>
    window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
    </script>
    <script src="{{ asset('frontend-asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-asset/js/jquery.fancybox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-asset/js/script.js') }}"></script>
</body>

</html>