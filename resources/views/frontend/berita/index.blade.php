@extends('layouts.frontend.main')

@section('pageTitle', 'Berita')

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
	                    @if(!$news->count())
	                      <div class="news-desc">
		                      @if($term = request('term'))
		                        <div class="alert alert-danger">
		                          <p>Berita Tentang <strong>{{ $term }}</strong> Tidak Ditemukan</p>
		                        </div>
		                      @endif
	                      </div>
	                    @else
		                    <div class="news-desc">
		                    	@include('layouts.frontend.alert')
		                    </div>
		                    
		                    @foreach($news as $new)
		                    <div class="news-desc">
		                        <article>
		                            <div class="news-header">
		                                <h5><a href="{{ route('berita.show', $new->slug) }}"><strong>{{ $new->title }}</strong></a></h5>
		                                <div class="news-nav">
		                                    <div class="row">
		                                        <div class="col-md-9">
		                                            <small><i class="fa fa-clock-o"></i> {{ $new->date }}</small>|
		                                            <small>Oleh : {{ ucwords($new->author->name) }}</small>|
		                                            <small>Kategori: {{ $new->category->title }}</small>
		                                        </div>
		                                        <div class="col-md-3 right">
		                                            <small><i class="fa fa-comment-o"></i> No Comments</small>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            @if($new->image)
		                            <div class="news-img">
		                                <img src="{{ url($new->image) }}" width="100%" />
		                            </div>
		                            @else
		                            <br>
		                            @endif
		                            {!! htmlspecialchars_decode(stripslashes($new->body))!!}
		                        </article>
		                        <div class="sharethis-inline-share-buttons"></div>
		                    </div>
		                    <hr>
		                    @endforeach
		                @endif
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