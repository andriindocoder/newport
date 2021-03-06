<!-- Modal -->
<?php
    $path = Auth::user()->pmku->file_akta;
    $ext = pathinfo($path, PATHINFO_EXTENSION);
?>
<div class="modal fade" id="modalDomisili" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">File Domisili Perusahaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        @if($ext == 'pdf')
            <object type="application/pdf" data="{{ url($path) }}" width="100%" height="500" style="height: 85vh;" class="domisili">No Support</object>
        @else 
            <img src="{{ url($path) }}" class="domisili" width="100%">
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
</div>
</div>