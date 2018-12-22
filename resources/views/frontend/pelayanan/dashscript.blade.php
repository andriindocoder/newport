@section('script')
<script>
    $(document).ready(function(){
        $('#modalKTP').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var ktp = button.data('ktp');
            
            $(this).find('img.ktp').attr('src',ktp);
            $(this).find('a.ktp').attr('href',ktp);
            $(this).find('a.ktp').attr('target','_blank');
        });
    });
</script>
@endsection