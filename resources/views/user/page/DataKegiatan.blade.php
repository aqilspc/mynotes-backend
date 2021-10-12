@extends('user.layout.master')
@section('content')
<div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Kegiatan</h6>
            <h2>Daftar kegiatan  <em>sekolah</em></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        @foreach($data as $d)
        <a href="{{url('info/kegiatan/detail/'.$d->id_kegiatan)}}">
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="{{$d->gambar}}" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>{{$d->nama_kegiatan}}</h4>
                  <?php echo mb_strimwidth($d->keterangan, 0, 184, "..")?>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
@endsection