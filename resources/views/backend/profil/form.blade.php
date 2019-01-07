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
                <h3 class="card-title"><i class="fa fa-th"></i> Edit Link Terkait</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Judul') !!}

                    {!! Form::text('title', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('title'))
                    <span class="help-block label-danger">{{ $errors->first('title') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Konten') !!}

                    {!! Form::textarea('konten', null, ['class'=> 'form-control', 'rows'=>8, 'id'=>'konten']) !!}

                    @if($errors->has('konten'))
                    <span class="help-block label-danger">{{ $errors->first('konten') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('gambar1') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Foto') !!}
                    &nbsp;<br>
                    @if($profil->gambar1)
                      <a href="{{ url($profil->gambar1) }}" target="_blank"><img src="{{ url($profil->gambar1) }}" width="50%"></a><br>
                    @endif
                    {!! Form::file('gambar1', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('gambar1'))
                    <span class="help-block label-danger">{{ $errors->first('gambar1') }}</span>
                    @endif
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>  {{ $profil->exists ? 'Update' : 'Save'}}</button>
                  <a href="{{ route('admin.link-terkait.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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
