<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Title</th>
    <th class="text-center">Slug</th>
    <th class="text-center">Excerpt</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($posts as $post)
  	<tr>
  	  <td>{{ $no }}.</td>
  	  <td>{{ $post->title }}</td>
  	  <td align="center">{{ $post->slug }}</td>
  	  <td align="center">{{ $post->excerpt }}</td>
      <td align="center" ="center">
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'PUT', 'route' => ['admin.berita.restore', $post->id]]) !!}
          <button title="Restore" class="btn btn-warning btn-sm btn-block">
              <i class="fa fa-refresh text-black"></i> Restore
          </button>
        {!! Form::close() !!}
        {!! Form::open(['style'=>'display:inline-block;', 'method' => 'DELETE', 'route' => ['admin.berita.force-destroy', $post->id]]) !!}
          <button title="Permanent Delete" onclick="return confirm('You are about to delete post permanently. Are you sure?')" type="submit" class="btn btn-danger btn-sm btn-block">
            <i class="fa fa-times-circle"></i> Hapus Permanen
          </button>
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
</table>