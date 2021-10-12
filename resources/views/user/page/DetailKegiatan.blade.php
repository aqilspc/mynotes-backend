@extends('user.layout.master')
@section('content')
    
<div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="{{$data->gambar}}" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h6>{{$data->nama_kegiatan}}</h6>
            <h2>Detail</h2>
          </div>
         <?php echo $data->keterangan?>
          <div class="main-green-button"><a href="{{url('info/kegiatan')}}">Kegiatan Lain</a></div>
        </div>
      </div>
    </div>
  </div>
@endsection