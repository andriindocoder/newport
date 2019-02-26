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
                <h3 class="card-title"><i class="fa fa-th"></i> Tambah Sub Menu Reformasi Birokrasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group {{ $errors->has('judul_menu') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Judul Menu Reformasi Birokrasi') !!}

                    {!! Form::text('judul_menu', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('judul_menu'))
                    <span class="help-block label-danger">{{ $errors->first('judul_menu') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Konten') !!}

                    {!! Form::textarea('konten', null, ['class'=> 'form-control','id'=>'konten']) !!}

                    @if($errors->has('konten'))
                    <span class="help-block label-danger">{{ $errors->first('konten') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('attachment') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Attachment') !!}
                    &nbsp;<br>
                    @if($subMenu->attachment)
                      <a href="{{ url($subMenu->attachment) }}" target="_blank"><img src="{{ url($subMenu->attachment) }}" width="10%"></a><br>
                    @endif
                    {!! Form::file('attachment', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('attachment'))
                    <span class="help-block label-danger">{{ $errors->first('attachment') }}</span>
                    @endif
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>  {{ $subMenu->exists ? 'Update' : 'Save'}}</button>
                  <a href="{{ route('admin.reformasi-birokrasi.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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
