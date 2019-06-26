@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$("select#bulan").hide();
			$('select#tahun').hide();
			$('#cke_konten').show();
			$("label[for='Konten']").show();

			$('select[name=jenisInformasi]').change(function() {
			    if (this.value == 4 || this.value == 7) {
			        $('#bulan').show();
			        $('#tahun').show();
			        $('#cke_konten').hide();
			        $("label[for='Konten']").hide();
			    }
			    else{
			        $('#bulan').hide();
			        $('#tahun').hide();
			        $('#cke_konten').show();
			        $("label[for='Konten']").show();
			    }
			});
		});
	</script>
@endsection