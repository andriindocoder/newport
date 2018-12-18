@if (isset($categoryName))
    <div class="alert alert-info">
        <p>Kategori Berita: <strong>{{ $categoryName }}</strong></p>
    </div>
@endif
@if($term = request('term'))
  <div class="alert alert-info">
    <p>Hasil Pencarian Berita dengan Kategori: <strong>{{ $term }}</strong></p>
  </div>
@endif