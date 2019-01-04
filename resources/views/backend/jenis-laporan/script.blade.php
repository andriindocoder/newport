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
