<style>
        .nav-top {
            margin-top: 35px;
        }
    </style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="logo-box">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('frontend-asset/images/logo.png') }}" />
                    <span><big style="font-size: 15px">Kantor Otoritas Pelabuhan Utama Tanjung Priok</big><small>direktorat jenderal perhubungan laut<br/>kementerian perhubungan republik indonesia</small></span>
                </a>
            </div>
        </div>
        <div class="col-md-6 right">
            <ul class="nav-top list">
                <li><a href="{{ route('login') }}" class="btn btn-outline-light"><span>Login</span><i class="fa fa-key"></i></a></li>
                <li><a href="{{ route('register') }}" class="btn btn-outline-light"><span>Daftar</span><i class="fa fa-edit"></i></a></li>
            </ul>
        </div>
    </div>
</div>