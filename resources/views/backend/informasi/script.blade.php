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

    $('.js-selectize').selectize();

    $('select[name=jenis_informasi_id]').change(function() {
          if (this.value == 4 || this.value == 7) {
              $('#cke_konten').hide();
              $("label[for='Konten']").hide();
          }
          else{
              $('#cke_konten').show();
              $("label[for='Konten']").show();
          }
      });
      
  </script>
@endsection
