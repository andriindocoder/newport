<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-nav">
                    <label>{!! $judulalamat ? $judulalamat->konten : '' !!}</label>
                    <address>
                            {!! $alamat ? $alamat->konten : '' !!}
                    </address>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-nav">
                    <label>Index</label>
                    <ul class="list">
                        <li><a href="#">Term of Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-nav">
                    <label>Jumlah Pengunjung</label>
                    <div align="left">
                    <a href="http://www.blogcounter4free.com" target="_blank"><img src="http://www.blogcounter4free.com/counter.php?page=http://localhost/work/port-authority/public/&digits=4&unique=1" alt="page visitor counter" border="0;"></a><br />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>{!! $copyright ? $copyright->konten : '' !!}</p>
                </div>
            </div>
        </div>
    </div>
</footer>