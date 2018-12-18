<p class="breadcrumb-list">
    <span><a href="#">Portal OP</a></span>
    <span><a href="#">Profil</a></span>
    <span>Visi Misi Otoritas Pelabuhan</span>
</p>
<div class="news-desc">
    <article>
        <div class="news-header">
            <h2>Visi dan Misi <small>Visi dan Misi Kantor Otoritas Pelabuhan Utama Tanjung Priok</small></h2>
        </div>
        <div class="news-img">
            @if(!empty($visimisi->gambar1))
            <img src="{{ url($visimisi->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($visimisi->gambar2))
            <img src="{{ url($visimisi->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($visimisi->gambar3))
            <img src="{{ url($visimisi->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($visimisi->gambar4))
            <img src="{{ url($visimisi->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($visimisi->gambar5))
            <img src="{{ url($visimisi->gambar1) }}" width="100%" /><br>
            @endif
        </div>
        {!! htmlspecialchars_decode(stripslashes($visimisi->konten))!!}
    </article>
</div>