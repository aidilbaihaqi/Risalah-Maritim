<div class="container-fluid">
  <div class="row align-items-center bg-light px-lg-5">
      <div class="col-12 col-md-8">
          <div class="d-flex justify-content-between">
              <div class="bg-primary text-white text-center py-2" style="width: 100px;">Global news</div>
              <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                  <div class="text-truncate"><a class="text-secondary" href="">Berita Satu: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus enim beatae vel quod expedita reprehenderit earum aspernatur dolorum dolore rem.</a></div>
                  <div class="text-truncate"><a class="text-secondary" href="">Berita Dua: Lorem, ipsum dolor sit amet consectetur adipisicing elit. A laboriosam esse tempora corporis optio voluptatum debitis assumenda neque repellendus laborum?</a></div>
              </div>
          </div>
      </div>
      <div class="col-md-4 text-right d-none d-md-block">
        @php
            use Carbon\Carbon;
            Carbon::setLocale('id');
        @endphp
        <b>{{ Carbon::now()->translatedFormat('l, j F Y') }}</b>
      </div>
  </div>
  <div class="row align-items-center py-2 px-lg-5">
      <div class="col-lg-4">
          <a href="{{ route('front.index') }}" class="navbar-brand d-none d-lg-block">
              <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Risalah </span>Maritim</h1>
          </a>
      </div>
      <div class="col-lg-8 text-center text-lg-right">
          <img class="img-fluid" src="{{ asset('img/ads-700x70.jpg') }}" alt="bannerads">
      </div>
  </div>
</div>