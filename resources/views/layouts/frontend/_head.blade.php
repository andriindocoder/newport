<style>
    .nav-top {
        margin-top: 35px;
    }
    #hello {
        margin-bottom: 5px;
    }
</style>
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="logo-box">
                <a href="{{ url('/') }}">
                        <img src="{{ asset('frontend-asset/images/logo.png') }}" />
                        <span><big style="font-size: 15px">Kantor Otoritas pelabuhan utama tanjung priok</big><small>direktorat jenderal perhubungan laut<br/>kementerian perhubungan republik indonesia</small></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 right">
                <ul class="nav-top list">
                        
                    @if(!Auth::check())
                    <li><a href="{{ route('login') }}" class="btn btn-outline-light"><span>Login</span><i class="fa fa-key"></i></a></li>
                    @else   
                    <p id="hello" style="color:#ffb900">Selamat Datang, <strong>{{ Auth::user()->name }}</strong></p><li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-outline-light"><span>Logout</span><i class="fa fa-sign-out"></i></a></li>
                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endif
                    <li><a href="{{ route('registrasi') }}" class="btn btn-outline-light"><span>Daftar</span><i class="fa fa-pencil"></i></a></li>
                    <br>
                    <div id="google_translate_element"></div>
                </ul>
            </div>
        </div>
</div>

