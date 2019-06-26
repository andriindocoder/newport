<p class="breadcrumb-list">
    <span><a href="#">Portal OP</a></span>
    <span><a href="#">Profil</a></span>
    <span>Sejarah Singkat Otoritas Pelabuhan</span>
</p>
<div class="news-desc">
    <article>
        <div class="news-header">
            <h2>Sejarah <small>Sejarah Singkat Kantor Otoritas Pelabuhan Utama</small></h2>
        </div>
        <div class="news-img">
            @if(!empty($sejarah->gambar1))
            <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($sejarah->gambar2))
            <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($sejarah->gambar3))
            <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($sejarah->gambar4))
            <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($sejarah->gambar5))
            <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
            @endif
        </div>
        {!! htmlspecialchars_decode(stripslashes($sejarah->konten))!!}
    </article>
</div>