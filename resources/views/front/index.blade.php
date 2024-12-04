@extends('layout.main')

@section('container')
  <!-- Top News Slider Start -->
  <div class="container-fluid py-3">
      <div class="container">
          <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
              <div class="d-flex">
                  <img src="{{ asset('img/news-100x100-1.jpg') }}" style="width: 80px; height: 80px; object-fit: cover;">
                  <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                      <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                  </div>
              </div>
              <div class="d-flex">
                  <img src="{{ asset('img/news-100x100-2.jpg') }}" style="width: 80px; height: 80px; object-fit: cover;">
                  <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                      <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                  </div>
              </div>
              <div class="d-flex">
                  <img src="{{ asset('img/news-100x100-3.jpg') }}" style="width: 80px; height: 80px; object-fit: cover;">
                  <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                      <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                  </div>
              </div>
              <div class="d-flex">
                  <img src="{{ asset('img/news-100x100-4.jpg') }}" style="width: 80px; height: 80px; object-fit: cover;">
                  <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                      <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Top News Slider End -->

  <!-- Main News Slider Start -->
  <div class="container-fluid py-3">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                      <div class="position-relative overflow-hidden" style="height: 435px;">
                          <img class="img-fluid h-100" src="{{ asset('img/news-700x435-1.jpg') }}" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-1">
                                  <a class="text-white" href="">Technology</a>
                                  <span class="px-2 text-white">/</span>
                                  <a class="text-white" href="">January 01, 2045</a>
                              </div>
                              <a class="h2 m-0 text-white font-weight-bold" href="">Sanctus amet sed amet ipsum lorem. Dolores et erat et elitr sea sed</a>
                          </div>
                      </div>
                      <div class="position-relative overflow-hidden" style="height: 435px;">
                          <img class="img-fluid h-100" src="{{ asset('img/news-700x435-2.jpg') }}" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-1">
                                  <a class="text-white" href="">Technology</a>
                                  <span class="px-2 text-white">/</span>
                                  <a class="text-white" href="">January 01, 2045</a>
                              </div>
                              <a class="h2 m-0 text-white font-weight-bold" href="">Sanctus amet sed amet ipsum lorem. Dolores et erat et elitr sea sed</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                      <h3 class="m-0">Categories</h3>
                      <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                  </div>
                  <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                      <img class="img-fluid w-100 h-100" src="{{ asset('img/cat-500x80-1.jpg') }}" style="object-fit: cover;">
                      <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                          Business
                      </a>
                  </div>
                  <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                      <img class="img-fluid w-100 h-100" src="{{ asset('img/cat-500x80-2.jpg') }}" style="object-fit: cover;">
                      <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                          Technology
                      </a>
                  </div>
                  <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                      <img class="img-fluid w-100 h-100" src="{{ asset('img/cat-500x80-3.jpg') }}" style="object-fit: cover;">
                      <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                          Entertainment
                      </a>
                  </div>
                  <div class="position-relative overflow-hidden" style="height: 80px;">
                      <img class="img-fluid w-100 h-100" src="{{ asset('img/cat-500x80-4.jpg') }}" style="object-fit: cover;">
                      <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                          Sports
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Main News Slider End -->

  <!-- Category News Slider Start -->
  <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 py-3">
                  <div class="bg-light py-2 px-4 mb-3">
                      <h3 class="m-0">Business</h3>
                  </div>
                  <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="{{ asset('img/news-500x280-1.jpg') }}" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="{{ asset('img/news-500x280-2.jpg') }}" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="{{ asset('img/news-500x280-3.jpg') }}" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 py-3">
                  <div class="bg-light py-2 px-4 mb-3">
                      <h3 class="m-0">Technology</h3>
                  </div>
                  <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="{{ asset('img/news-500x280-4.jpg') }}" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="{{ asset('img/news-500x280-5.jpg') }}" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="{{ asset('img/news-500x280-6.jpg') }}" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  <!-- Category News Slider End -->

  <!-- Category News Slider Start -->
  <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 py-3">
                  <div class="bg-light py-2 px-4 mb-3">
                      <h3 class="m-0">Entertainment</h3>
                  </div>
                  <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="img/news-500x280-6.jpg" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="img/news-500x280-5.jpg" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="img/news-500x280-4.jpg" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 py-3">
                  <div class="bg-light py-2 px-4 mb-3">
                      <h3 class="m-0">Sports</h3>
                  </div>
                  <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="img/news-500x280-3.jpg" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="img/news-500x280-2.jpg" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                      <div class="position-relative">
                          <img class="img-fluid w-100" src="img/news-500x280-1.jpg" style="object-fit: cover;">
                          <div class="overlay position-relative bg-light">
                              <div class="mb-2" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  <!-- Category News Slider End -->

  <!-- News With Sidebar Start -->
  <div class="container-fluid py-3">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="row mb-3">
                      <div class="col-12">
                          <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                              <h3 class="m-0">Berita Nasional</h3>
                              <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="position-relative mb-3">
                              <img class="img-fluid w-100" src="img/news-500x280-2.jpg" style="object-fit: cover;">
                              <div class="overlay position-relative bg-light">
                                  <div class="mb-2" style="font-size: 14px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                  <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <img src="img/news-100x100-1.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                              <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                  <div class="mb-1" style="font-size: 13px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <img src="img/news-100x100-2.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                              <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                  <div class="mb-1" style="font-size: 13px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="position-relative mb-3">
                              <img class="img-fluid w-100" src="img/news-500x280-3.jpg" style="object-fit: cover;">
                              <div class="overlay position-relative bg-light">
                                  <div class="mb-2" style="font-size: 14px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                  <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <img src="img/news-100x100-3.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                              <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                  <div class="mb-1" style="font-size: 13px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <img src="img/news-100x100-4.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                              <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                  <div class="mb-1" style="font-size: 13px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <div class="mb-3 pb-3">
                      <a href=""><img class="img-fluid w-100" src="{{ asset('img/ads-700x70.jpg') }}" alt=""></a>
                  </div>
                  
                  <div class="row">
                      <div class="col-12">
                          <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                              <h3 class="m-0">Latest</h3>
                              <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="position-relative mb-3">
                              <img class="img-fluid w-100" src="img/news-500x280-5.jpg" style="object-fit: cover;">
                              <div class="overlay position-relative bg-light">
                                  <div class="mb-2" style="font-size: 14px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                  <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <img src="img/news-100x100-5.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                              <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                  <div class="mb-1" style="font-size: 13px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <img src="img/news-100x100-1.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                              <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                  <div class="mb-1" style="font-size: 13px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="position-relative mb-3">
                              <img class="img-fluid w-100" src="img/news-500x280-6.jpg" style="object-fit: cover;">
                              <div class="overlay position-relative bg-light">
                                  <div class="mb-2" style="font-size: 14px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                  <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <img src="img/news-100x100-2.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                              <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                  <div class="mb-1" style="font-size: 13px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <img src="img/news-100x100-3.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                              <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                  <div class="mb-1" style="font-size: 13px;">
                                      <a href="">Technology</a>
                                      <span class="px-1">/</span>
                                      <span>January 01, 2045</span>
                                  </div>
                                  <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-lg-4 pt-3 pt-lg-0">
                  <!-- Social Follow Start -->
                  <div class="pb-3">
                      <div class="bg-light py-2 px-4 mb-3">
                          <h3 class="m-0">Follow Us</h3>
                      </div>
                      <div class="d-flex mb-3">
                          <a href="https://www.facebook.com/profile.php?id=61564325677662&mibextid=kFxxJD" target="_blank" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: linear-gradient(45deg, #1877f2, #3b5998);">
                              <small class="fab fa-facebook-f mr-2"></small><small>Risalah Maritim</small>
                          </a>
                          <a href="https://www.tiktok.com/@risalah.maritim?_t=8osqWfDAGh7&_r=1" target="_blank" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: linear-gradient(45deg, #ee1d52, #ff4350, #ff5349, #69c9d0, #60a5fa);">
                              <small class="fab fa-tiktok mr-2"></small><small>@risalamaritim</small>
                          </a>
                      </div>
                      <div class="d-flex mb-3">
                          <a href="https://www.linkedin.com/in/risalah-maritim-umrah-3b733131b/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: linear-gradient(45deg, #0077b5, #005582);">
                              <small class="fab fa-linkedin-in mr-2"></small><small>Risalah Maritim</small>
                          </a>
                          <a href="https://www.instagram.com/risalahmaritim.umrah/" target="_blank" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888)">
                              <small class="fab fa-instagram mr-2"></small><small>@risalahmaritim</small>
                          </a>
                      </div>
                  </div>
                  <!-- Social Follow End -->

                  <!-- Newsletter Start -->
                  <div class="pb-3">
                      <div class="bg-light py-2 px-4 mb-3">
                          <h3 class="m-0">Newsletter</h3>
                      </div>
                      <div class="bg-light text-center p-4 mb-3">
                          <p>Ingin tahu perkembangan berita, artikel, opini dan karya sastra dari kami? Drop email anda untuk berlangganan</p>
                          <div class="input-group" style="width: 100%;">
                              <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                              <div class="input-group-append">
                                  <button class="btn btn-primary">Sign Up</button>
                              </div>
                          </div>
                          <small>Keamanan email anda menjadi prioritas keamanan kami</small>
                      </div>
                  </div>
                  <!-- Newsletter End -->

                  <!-- Ads Start -->
                  <div class="mb-3 pb-3">
                      <a href=""><img class="img-fluid" src="{{ asset('img/news-500x280-4.jpg') }}" alt=""></a>
                  </div>
                  <!-- Ads End -->

                  <!-- Popular News Start -->
                  <div class="pb-3">
                      <div class="bg-light py-2 px-4 mb-3">
                          <h3 class="m-0">Global News</h3>
                      </div>
                      <div class="d-flex mb-3">
                          <img src="img/news-100x100-1.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                          <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                              <div class="mb-1" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                          </div>
                      </div>
                      <div class="d-flex mb-3">
                          <img src="img/news-100x100-2.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                          <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                              <div class="mb-1" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                          </div>
                      </div>
                      <div class="d-flex mb-3">
                          <img src="img/news-100x100-3.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                          <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                              <div class="mb-1" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                          </div>
                      </div>
                      <div class="d-flex mb-3">
                          <img src="img/news-100x100-4.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                          <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                              <div class="mb-1" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                          </div>
                      </div>
                      <div class="d-flex mb-3">
                          <img src="img/news-100x100-5.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                          <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                              <div class="mb-1" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                          </div>
                      </div>
                      <div class="d-flex mb-3">
                          <img src="img/news-100x100-5.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                          <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                              <div class="mb-1" style="font-size: 13px;">
                                  <a href="">Technology</a>
                                  <span class="px-1">/</span>
                                  <span>January 01, 2045</span>
                              </div>
                              <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                          </div>
                      </div>
                  </div>
                  <!-- Popular News End -->
              </div>
          </div>
      </div>
  </div>
  </div>
  <!-- News With Sidebar End -->
@endsection