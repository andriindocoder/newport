<div class="info-box" style="padding: 10px 0">
    <div class="container">
        <div class="row">
            <marquee behavior="scroll" direction="left" scrollamount="10" style="font-weight: bold;"><h4>{!!$marquee ? $marquee->konten : '' !!}</h4></marquee>
        </div>
    </div>
</div>
<div class="wrap">
<div class="slider-home col-md-8 offset-2">
        <div id="slider-home">
            <div class="slide">
                <img src="{{ url($slidesatu->foto) }}" height="100%" />
                
            </div>
            <div class="slide">
                <img src="{{ url($slidedua->foto) }}" height="100%" />
                <div class="container">
                    <div class="row slide-content">
                        <div class="col-sm-9">
                            <div class="desc" data-animation="fadeInDownBig" data-delay="0.5s">
                                <h1>{!! $judulslidedua ? $judulslidedua->konten : '' !!}</h1>
                                <p>
                                    {!! $slidedua ? $slidedua->konten : '' !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url($slidetiga->foto) }}" height="100%" />
                <div class="container">
                    <div class="row slide-content">
                        <div class="col-sm-9">
                            <div class="desc" data-animation="fadeInUpBig" data-delay="0.5s">
                                <h1>{!! $judulslidetiga ? $judulslidetiga->konten : ''  !!}</h1>
                                <p>
                                    {!! $slidetiga ? $slidetiga->konten : '' !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url($slideempat->foto) }}" height="100%" />
                
            </div>
            <div class="slide">
                <img src="{{ url($slidelima->foto) }}" height="100%" />
                
            </div>
        </div>
    </div>
</div>