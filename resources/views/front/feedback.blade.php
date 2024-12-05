@extends('layout.main')
@section('container')
  <!-- Breadcrumb Start -->
  <div class="container-fluid">
      <div class="container">
          <nav class="breadcrumb bg-transparent m-0 p-0">
              <a class="breadcrumb-item" href="{{ route('front.index') }}">Home</a>
              <span class="breadcrumb-item active">Curhatan Mahasiswa</span>
          </nav>
      </div>
  </div>
  <!-- Breadcrumb End -->

  <!-- Contact Start -->
  <div class="container-fluid py-3">
    <div class="container">
        <div class="bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Form Curhatan Mahasiswa</h3>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="bg-light mb-3" style="padding: 30px;">
                    <h6 class="font-weight-bold">Bersuaralah, suara anda akan kami dengar!</h6>
                    <p>Kami menyediakan tempat anda untuk bercerita tentang keluh-kesah anda sebagai mahasiswa Universitas Maritim Raja Ali Haji. Segala masukan dari anda akan kami sampaikan sesuai apa yang anda isi pada kolom <i>kepada/tujuan</i></p>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa fa-2x fa-user-secret text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h6 class="font-weight-bold">Pesan Anonymous</h6>
                            <p class="m-0">Identitas anda saat submit form tidak kami ketahui.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h6 class="font-weight-bold">Sampaikan Dengan Detail</h6>
                            <p class="m-0">Ceritakan dan jabarkan semua keluh kesah mu agar tidak ada kesalahpahaman.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa fa-2x fa-arrow-right text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h6 class="font-weight-bold">Penyampain Langsung Kepihak yang dituju</h6>
                            <p class="m-0">Pesan anda akan kami sampaikan langsung kepada pihak yang dituju setiap 2 minggu sekali</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-2x fa-paperclip text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h6 class="font-weight-bold">Balasan dari pihak yang dituju</h6>
                            <p class="m-0">Kami akan mempublikasikan balasan-balasan pada laman artikel isak senja.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact-form bg-light mb-3" style="padding: 30px;">
                    <form action="{{ route('feedback.create') }}" method="POST">
                      @csrf
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      
                      @if (session('success'))
                          <div class="alert alert-success success">
                              <b>{{ session('success') }}</b> Terimakasih karena telah berbagi cerita anda kepada kami.
                          </div>
                      @endif
                        
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="control-group">
                                  <select class="form-select form-control mb-3" name="category">
                                    <option selected disabled>Pilih kategori masukan</option>
                                    <option value="kritik">Kritik</option>
                                    <option value="saran">Saran</option>
                                    <option value="curhatan">Curhatan</option>
                                    <option value="tuntutan">Tuntutan</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="control-group">
                                <select class="form-select form-control mb-3" name="to">
                                  <option selected disabled>Dituju kepada</option>
                                  <option value="perorangan">Perorangan</option>
                                  <option value="dosen">Dosen</option>
                                  <option value="fakultas">Fakultas</option>
                                  <option value="badan khusus">Badan Khusus</option>
                                  <option value="komunitas">Komunitas</option>
                                  <option value="organisasi">Organisasi</option>
                                </select>
                              </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-3" name="name" id="name" placeholder="Nama tujuan spesifik (boleh kosong)" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="4" name="description" id="description" placeholder="Tuliskan pesan anda secara detail agar tidak terjadi kesalahpahaman" required="required" data-validation-required-message="Mohon tulis pesan anda"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection