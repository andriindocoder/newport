    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web Portal Kantor Otoritas Pelabuhan Utama Tanjung Priok">
    <meta name="author" content="Otoritas Pelabuhan Tanjung Prok">
    <link rel="icon" href="{{ asset('frontend-asset/images/dephub.ico') }}">
    <link rel="shortcut icon" href="{{ asset('frontend-asset/images/dephub.ico?v=2') }}" type="image/x-icon">
    <title>{{ config('app.name') }} | @yield('pageTitle')</title>
    <link href="{{ asset('frontend-asset/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend-asset/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend-asset/css/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend-asset/css/jquery.fancybox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend-asset/css/animate.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend-asset/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend-asset/css/custom.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
<style>
	.container {
		max-width: 1200px;
	}

	#splashscreen {
	    position:fixed;
	    margin: auto;
	    top: 0;
	    right: 0;
	    bottom: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    background-color: black;
	    opacity:0.9;
	    z-index: 10000;
	}
	#splashscreen img {
	    margin: auto;
	    top: 0;
	    right: 0;
	    bottom: 0;
	    left: 0;
	    height: 80%;
	    position: absolute;	
	}
	.whistleblower{text-decoration: none;color:#ccc;position:fixed;padding:0 10px 4px 10px;background:#FFB900;color:#191260;font-size:12px;font-weight:bold;top:80%;right:0;float:right;margin:0 -5px 0 0;font-family:Verdana;white-space:nowrap;z-index:10000;border-radius:15px 0 0 15px;line-height:50px;vertical-align:middle;transform-origin:right top 0;transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;-ms-transition:all .2s ease-in-out;border:1px solid #000; z-index: 1000;}
	.whistleblower:hover{text-decoration: none; cursor:pointer; padding:0 10px 4px 10px;margin:0 -1px 0 0;color:#666;border-color:#666}

.wrap{
	background-image:url('priokblur.jpg');
	background-repeat: repeat-x;
	background-size: auto 450px;
}

</style>