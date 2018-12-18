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
                <h3 class="card-title"><i class="fa fa-th"></i> Tambah Link Terkait</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group {{ $errors->has('nama_instansi') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Link Website Instansi') !!}

                    {!! Form::text('nama_instansi', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('nama_instansi'))
                    <span class="help-block label-danger">{{ $errors->first('nama_instansi') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Deskripsi') !!}

                    {!! Form::textarea('deskripsi', null, ['class'=> 'form-control', 'rows'=>8]) !!}

                    @if($errors->has('deskripsi'))
                    <span class="help-block label-danger">{{ $errors->first('deskripsi') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('logo_instansi') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Logo Instansi') !!}
                    &nbsp;
                    {!! Form::file('logo_instansi', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('logo_instansi'))
                    <span class="help-block label-danger">{{ $errors->first('logo_instansi') }}</span>
                    @endif
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>  {{ $linkTerkait->exists ? 'Update' : 'Save'}}</button>
                  <a href="{{ route('link-terkait.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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
