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
                <h3 class="card-title"><i class="fa fa-th"></i> Tambah Foto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}} m-input">
                    {!! Form::label('title') !!}
                    {!! Form::text('title', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('title'))
                      <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('caption') ? 'has-error' : ''}} m-input">
                    {!! Form::label('caption') !!}
                    {!! Form::text('caption', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('caption'))
                      <span class="help-block">{{ $errors->first('caption') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('kategori_foto_id') ? 'has-error' : ''}}">
                    {!! Form::label('Kategori Foto') !!}

                    {!! Form::select('kategori_foto_id', App\Model\KategoriFoto::pluck('title','id'), null, ['class'=> 'js-selectize form-control','placeholder' => 'Pilih Kategori']) !!}

                    @if($errors->has('kategori_foto_id'))
                    <span class="help-block text-danger">{{ $errors->first('kategori_foto_id') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('namafile') ? 'has-error' : ''}} m-input">
                    {!! Form::label('namafile', 'Upload Gambar') !!}<br>
                    {!! Form::file('namafile') !!}

                    @if($errors->has('namafile'))
                      <span class="help-block">{{ $errors->first('namafile') }}</span>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>  {{ $galeriFoto->exists ? 'Update' : 'Save'}}</button>
                  <a href="{{ route('admin.galeri-foto.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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
