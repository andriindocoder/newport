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
                <h3 class="card-title"><i class="fa fa-th"></i> Tambah Informasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group {{ $errors->has('jenis_informasi_id') ? 'has-error' : ''}}">
                    {!! Form::label('Jenis Informasi') !!}

                    {!! Form::select('jenis_informasi_id', App\Model\JenisInformasi::pluck('nama','id'), null, ['class'=> 'js-selectize form-control','placeholder' => 'Pilih Jenis Informasi','name'=>'jenis_informasi_id']) !!}

                    @if($errors->has('jenis_informasi_id'))
                    <span class="help-block text-danger">{{ $errors->first('jenis_informasi_id') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('judul_informasi') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Judul Informasi') !!}

                    {!! Form::text('judul_informasi', null, ['class'=> 'form-control']) !!}

                    @if($errors->has('judul_informasi'))
                    <span class="help-block label-danger">{{ $errors->first('judul_informasi') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Konten') !!}

                    {!! Form::textarea('konten', null, ['class'=> 'form-control','id'=>'konten']) !!}

                    @if($errors->has('konten'))
                    <span class="help-block label-danger">{{ $errors->first('konten') }}</span>
                    @endif
                  </div>

                  <div class=" bulan form-group {{ $errors->has('bulan') ? 'has-error' : ''}}">
                    {!! Form::label('Bulan') !!}

                    {!! Form::select('bulan', App\Model\Bulan::pluck('nama','id'), null, ['class'=> 'js-selectize bulan form-control','placeholder' => 'Pilih Bulan (Khusus Laporan Kinerja dan Indeks Kepuasan Masyarakat)','id'=>'bulan']) !!}

                    @if($errors->has('bulan'))
                    <span class="help-block text-danger">{{ $errors->first('bulan') }}</span>
                    @endif
                  </div>

                  <div class="tahun form-group {{ $errors->has('tahun') ? 'has-error' : ''}}">
                    {!! Form::label('Tahun') !!}

                    {!! Form::select('tahun', App\Model\Tahun::pluck('tahun','id'), null, ['class'=> 'js-selectize tahun form-control','placeholder' => 'Pilih Tahun (Khusus Laporan Kinerja dan Indeks Kepuasan Masyarakat)','id'=>'tahun']) !!}

                    @if($errors->has('tahun'))
                    <span class="help-block text-danger">{{ $errors->first('tahun') }}</span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('gambar') ? 'has-error' : ''}} m-input">
                    {!! Form::label('Gambar / Dokumen PDF') !!}
                    &nbsp;<br>
                    @if($informasi->gambar)
                      <?php
                          $path = $informasi->gambar;
                          $ext = pathinfo($path, PATHINFO_EXTENSION);
                      ?>
                      @if($ext == 'pdf')
                        <object type="application/pdf" data="{{ url($path) }}" width="50%" height="500" style="height: 85vh;" class="domisili">No Support</object><br><br>
                      @else 
                        <a href="{{ url($path) }}" target="_blank"><img src="{{ url($path) }}" width="50%"></a><br>
                      @endif
                    @else
                    @endif
  
                    {!! Form::file('gambar', null, ['class'=> 'form-control']) !!}
                    @if($errors->has('gambar'))
                    <span class="help-block label-danger">{{ $errors->first('gambar') }}</span>
                    @endif
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>  {{ $informasi->exists ? 'Update' : 'Save'}}</button>
                  <a href="{{ route('admin.informasi.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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
@include('backend.informasi.script')