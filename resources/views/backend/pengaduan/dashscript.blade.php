@section('script')
<script>
    $(document).ready(function(){
        $('#modalDetail').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var no_pengaduan = button.data('no_pengaduan')
            var nama = button.data('nama') 
            var jenis_id = button.data('jenis_id')
            var nomor_id = button.data('nomor_id')  
            var email = button.data('email')
            var instansi = button.data('instansi')
            var alamat = button.data('alamat')
            var pesan = button.data('pesan')
            var attachment = button.data('attachment')
            var balasan = button.data('balasan')
            
            $(this).find('#modalDetailLabel').html('Pengaduan ' + no_pengaduan);
            $(this).find('input#nomor_pengaduan').attr('placeholder',no_pengaduan);
            $(this).find('input#nama').attr('placeholder',nama);
            $(this).find('input#jenis_id').attr('placeholder',jenis_id);
            $(this).find('input#nomor_id').attr('placeholder',nomor_id);
            $(this).find('input#email').attr('placeholder',email);
            $(this).find('input#instansi').attr('placeholder',instansi);
            $(this).find('#alamat').attr('placeholder',alamat);
            $(this).find('#pesan').attr('placeholder',pesan);
            $(this).find('img.attachment').attr('src',attachment);
            $(this).find('a.attachment').attr('href',attachment);
            $(this).find('a.attachment').attr('target','_blank');
            $(this).find('#balasan').attr('placeholder',balasan);
        })
    });
</script>
@endsection