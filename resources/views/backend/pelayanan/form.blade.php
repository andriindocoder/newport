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
                <h3 class="card-title"><i class="fa fa-th"></i> Proses Pelayanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">

                  <div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Konten Pelayanan') !!}

                    {!! Form::textarea('konten', null, ['class'=> 'form-control','id'=>'konten']) !!}

                    @if($errors->has('konten'))
                    <span class="help-block label-danger">{{ $errors->first('konten') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('gambar') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Gambar / Dokumen Pelayanan') !!}
                    &nbsp;<br>
                    @if($pelayanan->gambar)
                      <?php
                          $path = $pelayanan->gambar;
                          $ext = pathinfo($path, PATHINFO_EXTENSION);
                      ?>
                      @if($ext == 'pdf')
                        <object type="application/pdf" data="{{ url($path) }}" width="50%" height="500" style="height: 85vh;" class="domisili">No Support</object><br><br>
                      @else 
                        <a href="{{ url($path) }}" target="_blank"><img src="{{ url($path) }}" width="50%"></a><br>
                      @endif
                    @else
                    @endif

                  </div>

                  <div class="form-group {{ $errors->has('balasan') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Balasan Petugas') !!}

                    {!! Form::textarea('balasan', null, ['class'=> 'form-control','id'=>'balasan']) !!}

                    @if($errors->has('balasan'))
                    <span class="help-block label-danger">{{ $errors->first('balasan') }}</span>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  <button type="submit" class="btn btn-info"><i class="fa fa-comments"></i>  {{ $pelayanan->exists ? 'Balas' : 'Save'}}</button>
                  <a href="{{ route('admin.pelayanan.index') }}" class="btn btn-success"><i class="fa fa-check"></i> Proses Selesai</a>
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
@include('backend.pelayanan.script')