@extends('layouts.frontend.main')

@section('pageTitle', 'Profile')

@section('content')
	<section>
	    <div class="content-header">
	        <img src="{{ asset('frontend-asset/images/bg-header2.jpg')}}" />
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <div class="desc">
	                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Galeri Kegiatan</span></small>
	                        <h2>Galeri Foto</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
		<div class="info-box">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h4>Tampilkan Kategori : </h4>
						</div>
						<div class="col-md-9">
							@foreach($kategoriFotos as $kategoriFoto)
						<div class="btn btn-blue"><input style="cursor: pointer;" id="{{ $kategoriFoto->slug }}" type="checkbox" aria-label="{{ $kategoriFoto->title }}" name="kategori" checked="checked" value="{{ $kategoriFoto->slug }}">  {{ $kategoriFoto->title }} <i class="fa fa-chevron-down"></i></div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
	    <div class="content-box">
	        <div class="container">
	            <div class="row">
	            	@foreach($gallerys as $gallery)
	            		<div class="col-md-4 gambar">
							<div class="news-box" data-kategori="{{ $gallery->kategoriFoto->slug }}">
	            		        <div class="img-box">
	            		            <a class="gallery-image-link" href="{{ url($gallery->namafile) }}" data-fancybox="gallery-set" data-caption="{{ $gallery->caption }}"><img src="{{ url($gallery->namafile) }}" width="350px" height="180px" /></a>
	            		        </div>
	            		        <div class="desc">
	            		            <h5><a href="#">{{ $gallery->title }}</a></h5>
	            		            <small><i class="fa fa-clock-o"></i> {{ date('d M Y H:i:s', strtotime($gallery->created_at)) }}</small>
	            		        </div>
	            		    </div>
	            		</div>
	            	@endforeach
	            </div>
	        </div>
	    </div>
	    <div class="info-box">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    
	                </div>
	                <div class="col-md-6 right">
	                    
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
@endsection
@section('script')
<script>
	$(document).ready(function(){
		$("#kategori-satu").on('change',function(evt){
			updateProductView("kategori-satu", evt.target.checked);
		});
		$("#kategori-dua").on('change',function(evt){
			updateProductView("kategori-dua", evt.target.checked);
		});
		$("#kategori-tiga").on('change',function(evt){
			updateProductView("kategori-tiga", evt.target.checked);
		});

		function updateProductView(categoryName, bVisible) {
            // get a list of the product items for the given category.
            // Use the data attributes to narrow the list
            var dataSelectorVal = "";
            switch (categoryName) {
            case "kategori-satu":
                dataSelectorVal = "[data-kategori='kategori-satu']";
                break;
            case "kategori-dua":
                dataSelectorVal = "[data-kategori='kategori-dua']";
                break;
            case "kategori-tiga":
                dataSelectorVal = "[data-kategori='kategori-tiga']";
                break;
            }
            // use the has() function to select the li tags that are product items
            // that contain the h2 tag with the corresponding data attribute value
            $(".gambar").has(dataSelectorVal).css('display', bVisible ? "" : "none");
        }
	});

</script>
@endsection