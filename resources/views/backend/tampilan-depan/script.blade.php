@section('script')
  <script type="text/javascript">

    var konten = document.getElementById("konten");
         CKEDITOR.replace(konten,{
         language:'en-gb'
       });
       CKEDITOR.config.allowedContent = true;
       CKEDITOR.config.height = 200;
       CKEDITOR.config.extraPlugins = ['justify','colorbutton'];

  </script>
@endsection
