@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KEHADIRAN SISWA</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Kehadiran
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/kehadiran/create')}}">
                            @csrf
                            
                            <label for="nis">Pilih Ssiswa</label>
                            <div class="form-group">
                               <select class="form-control show-tick" data-live-search="true" multiple 
                               name="id_siswa[]" >
                                @foreach($siswa as $sw)
                                    <option value="{{$sw->id_siswa}}">
                                        Nis : {{$sw->nis}} - Nama : {{$sw->nama_siswa}}
                                    </option>
                                @endforeach
                            </select>
                            </div>
                            <label for="nama_siswa">TANGGAL</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" name="tanggal" class="form-control" placeholder="tanggal">
                                </div>
                            </div>
                            
                            <label for="status">STATUS</label>
                            <div class="form-group">
                            <select class="form-control show-tick"
                               name="status">
                                <option value="Hadir">
                                       Hadir
                                </option>
                                <option value="Izin">
                                       Izin
                                </option>
                                <option value="Sakit">
                                       Sakit
                                </option>
                                <option value="Alpha">
                                       Alpha
                                </option>
                            </select>
                            </div>
                            <label for="nama_wali">JAM</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="time" name="jam" class="form-control" placeholder="Jam">
                                </div>
                            </div>
                            
                            <div>
                            <button type="submit" class="btn btn-primary center-block" >SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->
        
    </div>
</section>
@endsection