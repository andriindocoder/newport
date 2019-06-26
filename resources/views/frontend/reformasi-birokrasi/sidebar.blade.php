<div class="sidebar-list">
    <div class="sidebar-box sidebar-news">
        <label>Sub Menu Reformasi Birokrasi</label>
        <ul class="list">
            @foreach($subMenus as $subMenu)
                <li class="active"><a href="{{ $subMenu->slug }}">{{ $subMenu->judul_menu }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
