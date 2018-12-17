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
            <div class="col-md-6">
                <div class="footer-nav">
                    <label>Index</label>
                    <ul class="list">
                        <li><a href="#">Term of Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
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