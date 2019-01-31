@section('script')
  <script type="text/javascript">
    $('#title').on('blur',function(){
      var theTitle = this.value.toLowerCase().trim(),
        slugInput = $('#slug'),
        theSlug = theTitle.replace(/&/g, '-and-')
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/\-\-+/g, '-')
            .replace(/^-+|-+$/g, '');

      slugInput.val(theSlug);
    });

    var konten = document.getElementById("konten");
         CKEDITOR.replace(konten,{
         language:'en-gb'
       });
       CKEDITOR.config.allowedContent = true;
       CKEDITOR.config.height = 400;
       CKEDITOR.config.extraPlugins = ['justify','colorbutton'];
  </script>
@endsection
