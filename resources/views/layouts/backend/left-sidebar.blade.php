  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-info">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link bg-info">
          <img src="{{ asset('frontend-asset/images/logo.png') }}" alt="{{ config('app.name') }}" class="brand-image"
               style="opacity: .8">
          <span class="brand-text font-weight">Portal OP Priok</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('backend-asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ ucwords(Auth::user()->name) }}</a>
             <p><span class="text-info"><em>{{ Auth::user()->name }}</em></span></p>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link active">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              @role(['superadmin','humas'])
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-pie-chart"></i>
                  <p>
                    Statistik
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/charts/chartjs.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>ChartJS</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Flot</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/inline.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Inline</p>
                    </a>
                  </li>
                </ul>
              </li>
              @endrole
              @role(['superadmin'])
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p>Peraturan
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-circle-o text-primary nav-icon"></i>
                      <p>List Peraturan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-circle-o text-success nav-icon"></i>
                      <p>Tambah Peraturan</p>
                    </a>
                  </li>
                </ul>
              </li>
              @endrole
              @role(['humas','superadmin'])
              <li class="nav-header">PENGATURAN BERITA</li>
              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-edit"></i>
                    <p>
                      Berita
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-circle-o text-primary nav-icon"></i>
                        <p>List Berita</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-circle-o text-success nav-icon"></i>
                        <p>Tambah Berita</p>
                      </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('kategori-berita.index') }}" class="nav-link">
                        <i class="fa fa-circle-o text-warning nav-icon"></i>
                        <p>Kategori Berita</p>
                    </a>
                    </li>
                  </ul>
              </li>
              <li class="nav-header">GALERI FOTO DAN VIDEO</li>
              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-image"></i>
                    <p>
                      Galeri Foto
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-circle-o text-primary nav-icon"></i>
                        <p>List Foto</p>
                      </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('kategori-foto.index') }}" class="nav-link">
                        <i class="fa fa-circle-o text-warning nav-icon"></i>
                        <p>Kategori Foto</p>
                    </a>
                    </li>
                  </ul>
              </li>
    
              <li class="nav-header">PENGATURAN PROFIL</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-university"></i>
                  <p>Profil OP</p>
                </a>
              </li>
    
              <li class="nav-header">WHISTLEBLOWING DAN PPID</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-bullhorn"></i>
                  <p>Whistleblowing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-bullhorn"></i>
                  <p>PPID</p>
                </a>
              </li>
    
              <li class="nav-header">TAMPILAN KEGIATAN</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-camera"></i>
                  <p>Profil PPID</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-camera"></i>
                  <p>Informasi Publik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-camera"></i>
                  <p>Program dan Kegiatan</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-camera"></i>
                  <p>Data dan Informasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-camera"></i>
                  <p>Kinerja</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-camera"></i>
                  <p>Tarif PNBP</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-camera"></i>
                  <p>Indeks Kepuasan Masyarakat</p>
                </a>
              </li>         
              @endrole
              @role(['superadmin'])
              <li class="nav-header">PELAPORAN DAN STATISTIK</li>
              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-file-pdf-o"></i>
                    <p>
                      Laporan Keuangan
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-circle-o text-primary nav-icon"></i>
                        <p>List Berita</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-circle-o text-success nav-icon"></i>
                        <p>Tambah Berita</p>
                      </a>
                    </li>
                  </ul>
                </li>
              
              
              <li class="nav-header">PENGATURAN MODUL</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>Modul PMKU</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>Modul Perijinan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>Modul Jenis Usaha</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>Modul Tarif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>Modul Jadwal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>Modul Pelaporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>Modul Pengaduan</p>
                </a>
              </li>
              @endrole
    
              @role(['superadmin','humas'])
              <li class="nav-header">PENGATURAN</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>Menu</p>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="{{ route('tampilan-depan.index') }}" class="nav-link">
                  <i class="nav-icon fa fa-tv"></i>
                  <p>Tampilan</p>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-link"></i>
                  <p>Link Terkait</p>
                </a>
              </li>
              @endrole
    
              @role(['superadmin'])
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users"></i>
                  <p>Manajemen User</p>
                </a>
              </li>
              @endrole
    
              {{-- Role Adminlala --}}
              @role(['lala'])
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Pelayanan AP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Bunker Laut</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>PBM</p>
                </a>
              </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-folder-open"></i>
                    <p>Laporan LK3</p>
                  </a>
              </li>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-folder-open"></i>
                <p>Bongkar Muat Barang</p>
              </a>
            </li>
    
              <li class="nav-header">REKOMENDASI</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Cabang AP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Cabang SIUPKK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>SIUP PBM</p>
                </a>
              </li>
              @endrole
    
              {{-- Role adminbimus --}}
              @role(['bimus'])
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Pelayanan JPT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Rekomendasi JPT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>LAB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Laporan Kinerja</p>
                </a>
              </li>
              @endrole
    
              {{-- Role adminfasilitas --}} 
              @role(['fasilitas'])
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Input Data Fasilitas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Pelayanan Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Bunker Darat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Docking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Fumigasi</p>
                </a>
              </li>
              @endrole
    
              {{-- Role Admindesain --}}
              @role(['desain'])
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Kerja Keruk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Laporan Pengerukan</p>
                </a>
              </li>
              <li class="nav-header">SURAT IZIN KERJA KERUK</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Rekomendasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-folder-open"></i>
                  <p>Surat Izin</p>
                </a>
              </li>
              @endrole
              
              @role(['superadmin'])
              <li class="nav-header">MENU BIDANG</li>
              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                      Admin Bimus
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-folder-open"></i>
                        <p>Pelayanan JPT</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-folder-open"></i>
                        <p>Rekomendasi JPT</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-folder-open"></i>
                        <p>LAB</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-folder-open"></i>
                        <p>Laporan Kinerja</p>
                      </a>
                    </li>
                  </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Admin Desain
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Kerja Keruk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Laporan Pengerukan</p>
                    </a>
                  </li>
                  <li class="nav-header">SURAT IZIN KERJA KERUK</li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Rekomendasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Surat Izin</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Admin Fasilitas
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Pelayanan Supplier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Bunker Darat</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Docking</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Fumigasi</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Admin Kepegawaian
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Admin Keuangan
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Admin Lala
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Pelayanan AP</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Bunker Laut</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>PBM</p>
                    </a>
                  </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-folder-open"></i>
                        <p>Laporan LK3</p>
                      </a>
                  </li>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-folder-open"></i>
                    <p>Bongkar Muat Barang</p>
                  </a>
                </li>
        
                  <li class="nav-header">REKOMENDASI</li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Cabang AP</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>Cabang SIUPKK</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>SIUP PBM</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Admin Renpro
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Admin Tarif
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                </ul>
              </li>
              @endrole
    
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>