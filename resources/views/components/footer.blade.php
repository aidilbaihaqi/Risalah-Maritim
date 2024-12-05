<div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
  <div class="row">
      <div class="col-lg-5 col-md-6 mb-5">
          <a href="index.html" class="navbar-brand">
              <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">Risalah </span>Maritim</h1>
          </a>
          <p>Ingin baca cerita inspiratif, berita terupdate dan karya menarik? Kami hadir untuk mendorong literasi di kalangan muda</p>
          <div class="d-flex justify-content-start mt-4">
              <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" target="_blank" href="https://www.tiktok.com/@risalah.maritim?_t=8osqWfDAGh7&_r=1"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" target="_blank" href="https://www.facebook.com/profile.php?id=61564325677662&mibextid=kFxxJD"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" target="_blank" href="https://www.tiktok.com/@risalah.maritim?_t=8osqWfDAGh7&_r=1"><i class="fab fa-tiktok"></i></a>
              <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" target="_blank" href="https://www.linkedin.com/in/risalah-maritim-umrah-3b733131b/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" target="_blank" href="https://www.instagram.com/risalahmaritim/"><i class="fab fa-instagram"></i></a>
          </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">
          <h4 class="font-weight-bold mb-4">Kategori</h4>
          <div class="d-flex flex-wrap m-n1">
            @foreach ($categories as $category)
                <a href="" class="btn btn-sm btn-outline-secondary m-1">{{ $category->name }}</a>
            @endforeach
          </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
          <h4 class="font-weight-bold mb-4">Quick Links</h4>
          <div class="d-flex flex-column justify-content-start">
              <a class="text-secondary mb-2" href=""><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
              <a class="text-secondary mb-2" href=""><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
              {{-- <a class="text-secondary mb-2" href=""><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
              <a class="text-secondary mb-2" href=""><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a> --}}
              <a class="text-secondary" href=""><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5">
  <p class="m-0 text-center">
      &copy; <a class="font-weight-bold" href="/">2024 Risalah Maritim</a>. All Rights Reserved. 
  </p>
</div>