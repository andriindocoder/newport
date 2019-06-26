<div class="col-md-12" style="padding-right: 50px;" id="ppid">
        @include('frontend.message')
        {!! Form::model($ppid, [
            'method' => 'POST',
            'route' => 'ppid.store',
            'id' => 'frontend-ppid-form',
            'files' => true,
        ]) !!}
        <div class="row">
            <p align="justify"><em>Sejak Undang-Undang Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik (UU KIP) diberlakukan secara efektif pada tanggal 30 April 2010 telah mendorong bangsa Indonesia satu langkah maju ke depan, menjadi bangsa yang transparan dan akuntabel dalam mengelola sumber daya publik. UU KIP sebagai instrumen hukum yang mengikat merupakan tonggak atau dasar bagi seluruh rakyat Indonesia untuk bersama-sama mengawasi secara langsung pelayanan publik yang diselenggarakan oleh Badan Publik.</em></p>
            <p align="justify"><em>Keterbukaan informasi adalah salah satu pilar penting yang akan mendorong terciptanya iklim transparansi. Terlebih di era yang serba terbuka ini, keinginan masyarakat untuk memperoleh informasi semakin tinggi. Diberlakukannya UU KIP merupakan perubahan yang mendasar dalam kehidupan bermasyarakat, berbangsa dan bernegara, oleh sebab itu perlu adanya kesadaran dari seluruh elemen bangsa agar setiap lembaga dan badan pemerintah dalam pengelolaan informasi harus dengan prinsip good governance, tata kelola yang baik dan akuntabilitas.</em></p>
            <p align="justify"><em>Sejalan dengan amanah Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Kementerian Perhubungan telah melakukan beberapa upaya menyelaraskan aspek legal dengan menetapkan Peraturan Menteri Perhubungan Nomor PM. 46 Tahun 2018 Tentang Pedoman Pengelolaan Informasi dan Dokumentasi di lingkungan Kementerian Perhubungan.</em></p>
            <div class="col-md-6">
                <div class="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : ''}} m-input">
                                    <label>Nama Lengkap<sup>*</sup></label>

                                    {!! Form::text('nama_lengkap', null, ['class'=> 'form-control']) !!}

                                    @if($errors->has('nama_lengkap'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('nama_lengkap') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}} m-input">
                                    <label>Alamat <sup>*</sup></label>

                                    {!! Form::textarea('alamat', null, ['class'=> 'form-control','rows'=>3]) !!}

                                    @if($errors->has('alamat'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('alamat') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('pekerjaan') ? 'has-error' : ''}} m-input">
                                    <label>Pekerjaan<sup>*</sup></label>

                                    {!! Form::text('pekerjaan', null, ['class'=> 'form-control']) !!}

                                    @if($errors->has('pekerjaan'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('pekerjaan') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('jenis_id') ? 'has-error' : ''}} m-input">
                                    <label>Jenis Identitas<sup>*</sup></label>

                                    {!! Form::select('jenis_id',['1' => 'KTP', '2' => 'NPWP'],null,['class'=>'selectpicker','title' => 'Pilih jenis identitas ...','id'=>'identitas-id','data-live-search'=>'true']) !!}

                                    @if($errors->has('jenis_id'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('jenis_id') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('nomor_id') ? 'has-error' : ''}} m-input">
                                    <label>Nomor Identitas<sup>*</sup></label>

                                    {!! Form::text('nomor_id', null, ['class'=> 'form-control']) !!}

                                    @if($errors->has('nomor_id'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('nomor_id') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} m-input">
                                    <label>Email <sup>*</sup></label>

                                    {!! Form::text('email', null, ['class'=> 'form-control']) !!}

                                    @if($errors->has('email'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('telepon') ? 'has-error' : ''}} m-input">
                                    <label>Telepon<sup>*</sup></label>

                                    {!! Form::text('telepon', null, ['class'=> 'form-control']) !!}

                                    @if($errors->has('telepon'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('telepon') }}</span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('file_berkas') ? 'has-error' : ''}} m-input">
                                    <label>Unggah Berkas Identitas</label>
                                    {!! Form::file('file_berkas',['class'=>'form-control-file']) !!}
                                    @if($errors->has('file_berkas'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('file_berkas') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('rincian_info') ? 'has-error' : ''}} m-input">
                                    <label>Rincian Informasi yang Dibutuhkan<sup>*</sup></label>

                                    {!! Form::textarea('rincian_info', null, ['class'=> 'form-control','rows'=>8, 'placeholder' => 'Rincian Informasi yang Dibutuhkan']) !!}

                                    @if($errors->has('rincian_info'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('rincian_info') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group {{ $errors->has('tujuan_info') ? 'has-error' : ''}} m-input">
                                    <label>Tujuan Penggunaan Informasi<sup>*</sup></label>

                                    {!! Form::textarea('tujuan_info', null, ['class'=> 'form-control','rows'=>6, 'placeholder' => 'Tujuan Penggunaan Informasi']) !!}

                                    @if($errors->has('tujuan_info'))
                                    <span class="help-block badge badge-danger">{{ $errors->first('tujuan_info') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('cara_info') ? 'has-error' : ''}} m-input">
                                    <label>Cara Memperoleh Informasi </label>
                                    <br>
                                    {!! Form::checkBox('cara_info[]',1) !!} Melihat / Membaca / Mendengarkan / Mencatat
                                    <br>
                                    {!! Form::checkBox('cara_info[]',2) !!} Mendapatkan Copy Salinan (hard copy)
                                    <br>
                                    {!! Form::checkBox('cara_info[]',3) !!} Mendapatkan Soft Copy
                                    @if($errors->has('cara_info'))
                                    <span class="help-block">{{ $errors->first('cara_info') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('cara_salinan') ? 'has-error' : ''}} m-input">
                                    <label>Cara Mendapatkan Salinan <sup>*</sup> </label>
                                    <br>
                                    {!! Form::radio('cara_salinan',1) !!} Mengambil Langsung
                                    <br>
                                    {!! Form::radio('cara_salinan',2) !!} Kurir
                                    <br>
                                    {!! Form::radio('cara_salinan',3) !!} POS
                                    <br>
                                    {!! Form::radio('cara_salinan',4) !!} Faksimili
                                    <br>
                                    {!! Form::radio('cara_salinan',5) !!} Email
                                    @if($errors->has('cara_salinan'))
                                    <span class="help-block">{{ $errors->first('cara_salinan') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>	                            
                </div>
            </div>
            <div class="col-md-12 contact-form">
                <small><sup style="color:red;">*</sup> <i>Tidak boleh kosong</i></small>
                <br><small> <i>Dengan mengklik tombol "Kirim Permohonan" di bawah, saya menyatakan bahwa informasi yang saya isikan diatas adalah BENAR. Pengisian yang salah dan tidak lengkap akan menyebabkan permohonan data Anda TIDAK AKAN DIPROSES.</i></small>
                <div class="btn-box">
                    <button type="submit" class="btn btn-blue">Kirim Permohonan</button>
                    <button type="reset" class="btn btn-org">Cancel</button>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div>