<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-th"></i> Tambah Berita</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Judul Berita') !!}
                    {!! Form::text('title', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('title'))
                      <span class="badge badge-danger">{{ $errors->first('title') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}} m-input">
                    {!! Form::label('body') !!}
                    {!! Form::textarea('body', null, ['class'=> 'form-control','id'=>'konten']) !!}

                    @if($errors->has('body'))
                    <span class="help-block text-danger">{{ $errors->first('body') }}</span>
                    @endif
                  </div>

                </div>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <div class="col-md-3">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"> Kategori</h3>
                </div>
                <div class="card-body">
                  <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
                    {!! Form::select('category_id', App\Model\KategoriBerita::pluck('title','id'), null, ['class'=> 'js-selectize form-control','placeholder' => 'Pilih Kategori']) !!}

                    @if($errors->has('category_id'))
                    <span class="help-block text-danger">{{ $errors->first('category_id') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"> Tags</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                      {!! Form::text('post_tags[]', null, ['class' => 'form-control input-tags']) !!}
                  </div>
                </div>
              </div>
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"> Foto Berita</h3>
                </div>
                <div class="card-body">
                  @if(!$post->image)

                  @else
                    <img src="{{ url($post->image) }}" width="100%"><br><br>
                  @endif
                  <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                    {!! Form::file('image') !!}

                    @if($errors->has('image'))
                    <span class="help-block text-danger">{{ $errors->first('image') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <!-- /.card -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"> Publikasikan</h3>
                </div>
                <!-- /.card-header -->
                  <!-- /.card-body -->

                  <div class="card-footer">
                      <div align="center">
                        @if($post->exists)
                        {!! Form::submit('Update',['class' => 'btn btn-info']) !!}
                        @else
                        {!! Form::submit('Publish',['class' => 'btn btn-info']) !!}
                        @endif
                      </div>
                  </div>
              </div>
          </div>
          <!-- right column -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
