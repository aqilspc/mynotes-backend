@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA TAGIHAN</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Tagihan
                        </h2>
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/tagihan/update/'.$data->id_tagihan)}}">
                            @csrf

                        <label for="nis">Siswa</label>
                           <div class="form-group">
                                <div class="form-line">
                                    <input type="text" disabled value="{{$data->nama_siswa}}" class="form-control" placeholder="tanggal">
                                    <input type="hidden" name="id_siswa" value="{{$data->id_siswa}}" class="form-control" placeholder="tanggal">
                                </div>
                            </div>

                                
                            <label for="nis">JENIS TAGIHAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="jenis" class="form-control" placeholder="Jenis Tagihan"
                                    value="{{$data->jenis}}">
                                </div>
                            </div>
                            <label for="nis">JUMLAH TAGIHAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="double" name="jumlah" class="form-control" placeholder="Jumlah Tagihan"  value="{{$data->jumlah}}">
                                </div>
                            </div>
                            <label for="status">STATUS</label>
                            <div class="form-group">

                                <select class="form-control show-tick"
                               name="status">

                              <option value="Lunas" {{$data->status=='Lunas'?'selected':''}}>
                                                       Lunas
                                                </option>
                                                <option value="Belum_Lunas" 
                                                {{$data->status=='Belum_Lunas'?'selected':''}}>
                                                       Belum Lunas
                                                </option>

                            </select>

                            </div>            
                                 <div>
                                <button type="submit" class="btn btn-primary .p-r-30 .margin-15 center-block" style="width: 100px"  >UPDATE</button>
                            </div>
                            </div>
                           
                        </div>
                        </form>
                    </div>
                </div>
            </div>
</section>
@endsection