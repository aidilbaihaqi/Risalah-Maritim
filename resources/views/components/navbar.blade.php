<div class="container-fluid p-0 mb-3">
  <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
      <a href="" class="navbar-brand d-block d-lg-none">
          <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Risalah </span>Maritim</h1>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
          <div class="navbar-nav mr-auto py-0">
              <a href="{{ route('front.index') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
              <a href="" class="nav-item nav-link">Berita</a>
              <a href="" class="nav-item nav-link">Opini & Artikel</a>
              <a href="" class="nav-item nav-link">Karya Sastra</a>
              <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategori</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="#" class="dropdown-item">Pengumuman</a>
                        <a href="#" class="dropdown-item">Akademik dan Pendidikan</a>
                        <a href="#" class="dropdown-item">Kegiatan Mahasiswa</a>
                        <a href="#" class="dropdown-item">Lingkungan dan Sosial</a>
                        <a href="#" class="dropdown-item">Prestasi</a>
                        <a href="#" class="dropdown-item">Teknologi dan Inovasi</a>
                    </div>
                </div>
              <a href="{{ route('feedback.index') }}" class="nav-item nav-link {{ request()->is('curhatan-mahasiswa') ? 'active' : '' }}">Curhatan Mahasiswa</a>
              <a href="" class="nav-item nav-link">Kontak</a>
            </div>
          <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
              <input type="text" class="form-control" placeholder="Cari">
              <div class="input-group-append">
                  <button class="input-group-text text-secondary"><i
                          class="fa fa-search"></i></button>
              </div>
          </div>
      </div>
  </nav>
</div>