@section('script')
  <script type="text/javascript">
    $(function(){

      $('#registrasi-pmku-form').hide();
      $('#form-siupkk').hide();
      $('#form-nib').hide();

      $('input[type=radio][name=agen_pelayaran]').change(function() {
          if (this.value == 1) {
              $('#form-siupkk').show();
              $('#form-nib').hide();
          }
          else if (this.value == 2) {
              $('#form-siupkk').hide();
              $('#form-nib').show();
          }
      });

    });

  </script>
@endsection
