<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('frontend-asset/js/jquery.min.js') }}"></script>
    <script>
    window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
    </script>
    <script src="{{ asset('frontend-asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-asset/js/jquery.fancybox.min.js') }}"></script>
    <script>
        $(document).click(function() { $('#splashscreen').fadeOut(500).remove(); });
    </script>
    <script type="text/javascript" src="{{ asset('frontend-asset/js/script.js') }}"></script>
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5c185d05423bba0012ec3b1c&product=inline-share-buttons"></script>