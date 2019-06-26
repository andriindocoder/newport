@section('script')
<script>
    $(document).ready(function(){
        $('#modalDetail').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var no_ppid = button.data('no_ppid') 
            var full_name = button.data('fullname')
            var alamat = button.data('alamat')
            var pekerjaan = button.data('pekerjaan')
            var jenis_id = button.data('jenis_id')
            var ktp = button.data('file_berkas')
            var nomor_id = button.data('nomor_id')
            var email = button.data('email')
            var telepon = button.data('telepon')
            var rincian_info = button.data('rincian_info')
            var tujuan_info = button.data('tujuan_info')
            var cara_info = button.data('cara_info')
            var info = [];
            cara_info.forEach(function(item){
                if(item == 1){
                    info += '| Melihat/Membaca/Mendengarkan/Mencatat | ';
                }else if(item == 2){
                    info += '| Mendapatkan Copy Salinan (Hard Copy) ';
                }else{
                    info += '| Mendapatkan Soft Copy | ';
                }
            });
        
            var cara_salinan = button.data('cara_salinan')
            var balasan = button.data('balasan')
            
            $(this).find('#modalDetailLabel').html('Permohonan ' + no_ppid);
            $(this).find('input#nomorppid').attr("placeholder",no_ppid);
            $(this).find('input#namalengkap').attr("placeholder",full_name);
            $(this).find('#alamat').attr("placeholder",alamat);
            $(this).find('input#pekerjaan').attr("placeholder",pekerjaan);
            if(jenis_id == 1){
                $(this).find('input#jenis_id').attr("placeholder",'KTP');
            }else{
                $(this).find('input#jenis_id').attr("placeholder",'NPWP');
            }
            $(this).find('input#nomor_id').attr("placeholder",nomor_id);
            $(this).find('#file_ktp').attr("src",'/' + ktp);
            $(this).find('input#email').attr("placeholder",email);
            $(this).find('input#telepon').attr("placeholder",telepon);
            $(this).find('#rincian_info').attr("placeholder",rincian_info);
            $(this).find('#tujuan_info').attr("placeholder",tujuan_info);
            $(this).find('#cara_info').attr("placeholder",info);
            switch(cara_salinan) {
                case 1:
                    var salinan = 'Mengambil Langsung';
                    break;
                case 2:
                    var salinan = 'Kurir';
                    break;
                case 3:
                    var salinan = 'Pos';
                    break;
                case 4:
                    var salinan = 'Faksimili';
                    break;
                case 5:
                    var salinan = 'Email';
                    break;
                default:
                    var salinan = '';
            }
            $(this).find('#cara_salinan').attr("placeholder",salinan);
            $(this).find('#balasan').attr("placeholder",balasan);
        })
    });
</script>
@endsection