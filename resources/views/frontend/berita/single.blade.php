@extends('layouts.frontend.main')

@section('pageTitle', $berita->title)
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
                                <div class="news-header">
                                    <h5><a href="{{ route('berita.show', $berita->slug) }}"><strong>{{ $berita->title }}</strong></a></h5>
                                    <div class="news-nav">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <small><i class="fa fa-clock-o"></i> {{ $berita->date }}</small>|
                                                <small>Oleh : {{ ucwords($berita->author->name) }}</small>|
                                                <small>Kategori: {{ $berita->category->title }}</small>
                                            </div>
                                            <div class="col-md-3 right">
                                                <small><i class="fa fa-comment-o"></i> No Comments</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($berita->image)
                                <div class="news-img">
                                    <img src="{{ url($berita->image) }}" width="100%" />
                                </div>
                                @else
                                <br>
                                @endif
                                {!! htmlspecialchars_decode(stripslashes($berita->body))!!}
                            </article>
                            <div class="sharethis-inline-share-buttons"></div>
                        </div>
                        <hr>
                    </div>
                    @include('frontend.berita.sidebar-berita')
                </div>
            </div>
        </div>
        <div class="info-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>How can we help you?</h4>
                    </div>
                    <div class="col-md-6 right">
                        <a href="#" class="btn btn-blue">Send Feedback <i class="fa fa-chevron-right"></i></a>
                    </div>
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