<p class="breadcrumb-list">
    <span><a href="#">Portal OP</a></span>
    <span><a href="#">Profil</a></span>
    <span>Tugas Pokok dan Fungsi Kantor Otoritas Pelabuhan</span>
</p>
<div class="news-desc">
    <article>
        <div class="news-header">
            <h2>Tupoksi <small>Tugas Pokok dan Fungsi Kantor Otoritas Pelabuhan Utama Tanjung Priok</small></h2>
        </div>
        <div class="news-img">
            @if(!empty($tupoksi->gambar1))
            <img src="{{ url($tupoksi->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($tupoksi->gambar2))
            <img src="{{ url($tupoksi->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($tupoksi->gambar3))
            <img src="{{ url($tupoksi->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($tupoksi->gambar4))
            <img src="{{ url($tupoksi->gambar1) }}" width="100%" /><br>
            @endif
            @if(!empty($tupoksi->gambar5))
            <img src="{{ url($tupoksi->gambar1) }}" width="100%" /><br>
            @endif
        </div>
        {!! htmlspecialchars_decode(stripslashes($tupoksi->konten))!!}
    </article>
</div>