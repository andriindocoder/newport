<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-th"></i> Tambah Video</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group {{ $errors->has('judul_video') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Judul Video') !!}
                    {!! Form::text('judul_video', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('judul_video'))
                      <span class="help-block">{{ $errors->first('judul_video') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('link_video') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Link Video Youtube') !!}
                    {!! Form::text('link_video', null, ['class'=> 'form-control','placeholder' => 'Contoh : https://www.youtube.com/watch?v=UJt8GhIXtW0']) !!}

                    @if($errors->has('link_video'))
                      <span class="help-block">{{ $errors->first('link_video') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('kategori_video_id') ? 'has-error' : ''}}">
                    {!! Form::label('Kategori Video') !!}

                    {!! Form::select('kategori_video_id', App\Model\KategoriVideo::pluck('title','id'), null, ['class'=> 'js-selectize form-control','placeholder' => 'Pilih Kategori']) !!}

                    @if($errors->has('kategori_video_id'))
                    <span class="help-block text-danger">{{ $errors->first('kategori_video_id') }}</span>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>  {{ $galeriVideo->exists ? 'Update' : 'Save'}}</button>
                  <a href="{{ route('admin.galeri-video.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                </div>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
