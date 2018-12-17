<div class="col-md-3">
        <div class="sidebar-list">
            <div class="sidebar-box sidebar-search">
                <form action="{{ route('berita.index') }}">
                <div class="input-group">
                    <input type="text" class="form-control" name="term" value="{{ request('term') }}" placeholder="Cari Berita" />
                    <div class="input-group-append">
                        <button class="btn btn-blue" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                </form>
            </div>
            <div class="sidebar-box sidebar-news">
                <label>Berita Terbaru</label>
                <ul class="list">
                    @foreach($news as $new)
                    <li>
                        <h6><a href="{{ route('berita.show', $new->slug) }}">{{ $new->title }}</a></h6>
                        <small><i class="fa fa-clock-o"></i> {{ $new->date }}</small>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="sidebar-box sidebar-news">
                <label>Berita Terpopuler</label>
                <ul class="list">
                    @foreach($populer as $pop)
                    <li>
                        <h6><a href="{{ route('berita.show', $pop->slug) }}">{{ $pop->title }}</a></h6>
                        <small><i class="fa fa-eye"></i>Dilihat {{ $pop->view_count }} kali</small>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="sidebar-box sidebar-news">
                <label>Kategori</label>
    
                <div class="sidebar-box sidebar-nav">
                    <ul class="list">
                        @foreach($kats as $kat)
                        <?php
                            $url = url()->current();
                        ?>
                        @if(strpos($url, $kat->slug) !== false)
                        <li class="active">
                        @else
                        <li>
                        @endif
                            <a href="{{ route('berita.kategori', $kat->slug) }}">{{ $kat->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>