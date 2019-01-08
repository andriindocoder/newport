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
                <h3 class="card-title"><i class="fa fa-th"></i> Tambah PPID</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                    <div class="form-group {{ $errors->has('balasan') ? 'has-error' : ''}} m-input">
                      <label>Balasan<sup>*</sup></label>

                      {!! Form::textarea('balasan', null, ['class'=> 'form-control','rows'=>8, 'placeholder' => 'Balasan Admin Otoritas Pelabuhan']) !!}

                      @if($errors->has('balasan'))
                      <span class="help-block badge badge-danger">{{ $errors->first('balasan') }}</span>
                      @endif
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i>  {{ $ppid->exists ? 'Balas dan Kirim Email' : 'Save'}}</button>
                  <a href="{{ route('ppid.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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
