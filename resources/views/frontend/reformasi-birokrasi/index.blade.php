@extends('layouts.frontend.main')

@section('pageTitle', 'Reformasi Birokrasi')
@section('content')
    <section>
        <div class="content-header">
            <img src="{{ asset('frontend-asset/images/head.png') }}" />
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="desc">
                            <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Berita</span></small>
                            <h2>Berita Terbaru</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <p class="breadcrumb-list">
                            <span><a href="#">Portal OP</a></span>
                            <span><a href="#">Berita</a></span>
                            <span>Berita Terbaru</span>
                        </p>
                        <div class="news-desc">
                            <article>
                                
                            </article>
                        </div>
                        <hr>
                    </div>
                    @include('frontend.reformasi-birokrasi.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(function(){
            $("ul.list>li a").on('click',function(){
                $('li').removeClass();
                $(this).parent().addClass('active');
            });
        });
    </script>
@endsection