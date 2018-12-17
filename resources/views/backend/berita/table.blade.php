<table class="table table-striped">
  <tr>
    <th style="width: 10px">No</th>
    <th>Judul</th>
    <th>Kategori</th>
    <th>Body</th>
    <th>Dilihat</th>
    <th>Tanggal Publikasi</th>
    <th class="text-center">Aksi</th>
  </tr>
  <?php $no = paging_number($perPage);?>
  @foreach($posts as $post)
  	<tr>
  	  <td>{{ $no }}.</td>
  	  <td>{{ $post->title }}</td>
      <td>{{ $post->category->title }}</td>
      <td>{!! substr(htmlspecialchars_decode(stripslashes($post->body)),0,250) !!} ...</td>
      <td align="center">{{ $post->view_count }} kali</td>
      <td>{{ $post->date }}</td>
      <td align="center">
        {!! Form::open(['method' => 'DELETE', 'route' => ['berita.destroy', $post->id]]) !!}
        <a href="{{ route('berita.edit', $post->id) }}" class="btn btn-sm btn-warning btn-block" title="Edit">
          <i class="fa fa-edit text-black"></i> Edit
        </a>
          <button onclick="return confirm('Apakah Anda yakin untuk menghapus berita?')" type="submit" class="btn btn-sm btn-danger btn-block" title="Move to Trash">
            <i class="fa fa-trash"></i> Hapus
          </button>
        {!! Form::close() !!}
      </td>
  	</tr>
    <?php $no++;?>
  @endforeach
</table>