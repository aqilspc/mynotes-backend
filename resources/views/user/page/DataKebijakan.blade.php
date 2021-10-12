@extends('user.layout.master')
@section('content')
<div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Kebijakan</h6>
            <h2>Daftar kebijakan yang <span>dimiliki</span> oleh <em>sekolah</em></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        @foreach($data as $d)
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="{{url('assets/images/service-icon-01.png')}}" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>{{$d->nama_kebijakan}}</h4>
                 <p>
                   <a target="_blank" href="{{$d->file_kebijakan}}"><i class="fa fa-download"> Download</i></a>
                 </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection