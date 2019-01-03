@if($konten->konten)
	{!! htmlspecialchars_decode(stripslashes($konten->konten))!!}
@endif

<?php
    $path = $konten->gambar;
    $ext = pathinfo($path, PATHINFO_EXTENSION);
?>

@if($konten->gambar)
	@if($ext == 'pdf')
		<object type="application/pdf" data="{{ url($path) }}" width="100%" height="500" style="height: 85vh;" class="domisili">No Support</object>
	@else 
        <a href="{{ url($path) }}" target="_blank"><img src="{{ url($path) }}" width="100%"></a>
    @endif
@endif
