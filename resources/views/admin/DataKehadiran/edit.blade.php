@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KEHADIRAN</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Kehadiran
                        </h2>
                    </div>
                    <div class="body">
                       <form enctype="multipart/form-data" method="POST" action="{{url('admin/kehadiran/update/'.$data->id_kehadiran)}}">
                            @csrf
                            
                            <label for="nis">Siswa</label>
                            <div class="form-group">
                            <div class="form-line">
                                    <input type="text" disabled value="{{$data->nama_siswa}}" class="form-control" placeholder="tanggal">
                                    <input type="hidden" name="id_siswa" value="{{$data->id_siswa}}" class="form-control" placeholder="tanggal">
                                </div>
                            </div>
                            <label for="nama_siswa">TANGGAL</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" name="tanggal" class="form-control" placeholder="tanggal"
                                    value="{{$data->tanggal}}">
                                </div>
                            </div>
                            
                            <label for="status">STATUS</label>
                            <div class="form-group">

                               <select class="form-control show-tick"
                               name="status">
                                <option value="Hadir" {{$data->status=='Hadir'?'selected':''}}>
                                       Hadir
                                </option>
                                <option value="Izin" {{$data->status=='Izin'?'selected':''}}>
                                       Izin
                                </option>
                                <option value="Sakit" {{$data->status=='Sakit'?'selected':''}}>
                                       Sakit
                                </option>
                                <option value="Alpha" {{$data->status=='Alpha'?'selected':''}}>
                                       Alpha
                                </option>
                            </select>
                            </div>
                            <label for="nama_wali">JAM</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="time" name="jam" class="form-control" placeholder="Jam"
                                    value="{{$data->jam}}"
                                    >
                                </div>
                            </div>
                            
                            <div>
                            <button type="submit" class="btn btn-primary center-block" >UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection