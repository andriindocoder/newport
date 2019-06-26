@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Alamat Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link Verifikasi sudah terkirim ke email yang Anda daftarkan.') }}
                        </div>
                    @endif

                    {{ __('Sebelum Melanjutkan, silahkan check email untuk melakukan verifikasi email.') }}
                    {{ __('Jika email verifikasi belum Anda terima') }}, <a href="{{ route('verification.resend') }}">{{ __('klik disini untuk melakukan pengiriman email verifikasi') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
