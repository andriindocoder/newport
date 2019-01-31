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
       CKEDITOR.config.extraPlugins = 'justify';
       CKEDITOR.config.extraPlugins = 'colorbutton';

    $('.js-selectize').selectize({
      sortField: 'text'
    });

    $('.input-tags').selectize({
    delimiter: ',',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        }
    }
    });
  </script>
@endsection
