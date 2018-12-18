<p class="breadcrumb-list">
    <span><a href="#">Portal OP</a></span>
    <span><a href="#">Profil</a></span>
    <span>Struktur Organisasi Otoritas Pelabuhan</span>
</p>
<div class="news-desc">
    <article>
        <div class="news-header">
            <h2>Struktur Organisasi <small>Struktur Organisasi Kantor Otoritas Pelabuhan Utama Tanjung Priok</small></h2>
        </div>
        <div class="news-img">
            @if(!empty($struktur->gambar1))
            <img src="{{ url($struktur->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($struktur->gambar2))
            <img src="{{ url($struktur->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($struktur->gambar3))
            <img src="{{ url($struktur->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($struktur->gambar4))
            <img src="{{ url($struktur->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($struktur->gambar5))
            <img src="{{ url($struktur->gambar1) }}" width="100%" /><br>
            @endif
        </div>
        {!! htmlspecialchars_decode(stripslashes($struktur->konten))!!}
    </article>
</div>