@extends('user.layout.master')
@section('content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <div class="info-stat">
                    <h6>Nama Siswa</h6>
                    <h4>{{$siswa->nama_siswa}}</h4>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="info-stat">
                    <h6>NIS</h6>
                    <h4>{{$siswa->nis}}</h4>
                  </div>
                </div>
                <div class="col-lg-12">
                  <h2>SMK NEGERI 1 PASURUAN</h2>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="assets/images/banner-right-image.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="features" class="features section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="features-content">
          <div class="row">
            <div class="col-lg">
              <a href="{{url('info/kehadiran')}}">
              <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="first-number number">
                  <h6>01</h6>
                </div>
                <div class="icon"></div>
                <h4>Data Kehadiran</h4>
                <div class="line-dec"></div>
                <p>Data kehadiran merupakan 
                  data yang berisi kalkulasi 
                  absensi perbulan dari siswa 
                  mulai dari izin, sakit hingga 
                  alpha.</p>
              </div>
            </a>
            </div>
            <div class="col-lg">
              <a href="{{url('info/pelanggaran')}}">
              <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="second-number number">
                  <h6>02</h6>
                </div>
                <div class="icon"></div>
                <h4>Data Pelanggaran</h4>
                <div class="line-dec"></div>
                <p>Data kehadiran merupakan 
                  data yang berisi pelanggaran-
                  pelanggaran yang dilakukan
                  oleh siswa selama di sekolah.</p>
              </div>
            </a>
            </div>
            <div class="col-lg">
              <a href="{{url('info/tagihan')}}">
              <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="third-number number">
                  <h6>03</h6>
                </div>
                <div class="icon"></div>
                <h4>Data Tagihan</h4>
                <div class="line-dec"></div>
                <p>Data kehadiran merupakan 
                  data yang berisi tagihan
                  yang dimiliki oleh siswa
                  dan belum dibayar.</p>
              </div>
            </a>
            </div>
            <div class="col-lg">
              <a href="{{url('info/kegiatan')}}">
              <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="fourth-number number">
                  <h6>04</h6>
                </div>
                <div class="icon"></div>
                <h4>Data Kegiatan</h4>
                <div class="line-dec"></div>
                <p>Data kehadiran merupakan 
                  data yang berisi kegiatan
                  yang diadakan oleh pihak
                  sekolah untuk siswa yang
                  bersangkutan.</p>
              </div>
            </a>
            </div>
            <div class="col-lg">
              <a href="{{url('info/kebijakan')}}">
              <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="first-number number">
                  <h6>05</h6>
                </div>
                <div class="icon"></div>
                <h4>Data Kebijakan</h4>
                <div class="line-dec"></div>
                <p>Data kehadiran merupakan 
                  data yang berisi 
                  Kebijakan yang
                  dimiliki oleh sekolah
                  untuk beberapa
                  aturan.</p>
              </div>
            </a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>


<!-- <div id="contact" class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading">
                <h6>Contact Us</h6>
                <h2>Wali Murid Bisa Mengirimkan Pesan <span>kepada</span> kami <em>Touch</em> di sini</h2>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="row">
                <div class="col-lg-6">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                  </fieldset>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="contact-info">
                <ul>
                  <li>
                    <div class="icon">
                      <img src="assets/images/contact-icon-01.png" alt="email icon">
                    </div>
                    <a href="#">admin@gmail.com</a>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="assets/images/contact-icon-02.png" alt="phone">
                    </div>
                    <a href="#">(0343) 421380</a>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="assets/images/contact-icon-03.png" alt="location">
                    </div>
                    <a href="#">Jalan Veteran, Bugul Lor, 
                      Panggungrejo, Bugul Lor,
                       Panggungrejo, Kota Pasuruan, 
                      Jawa Timur 67122</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->


@endsection
  