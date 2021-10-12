@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA TAGIHAN</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Tagihan
                        </h2>
                        
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" method="POST" action="{{url('admin/tagihan/create')}}">
                            @csrf
                            
                            <label for="nis">Pilih Siswa</label>

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

                            <label for="nis">JENIS TAGIHAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="jenis" class="form-control" placeholder="Jenis Tagihan">
                                </div>
                            </div>
                            <label for="nis">JUMLAH TAGIHAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="double" name="jumlah" class="form-control" placeholder="Jumlah Tagihan">
                                </div>
                            </div>
                            <label for="status">STATUS</label>
                            <div class="form-group">

                                <select class="form-control show-tick"
                               name="status">

                                <option value="Lunas" >
                                       Lunas
                                </option>

                                <option value="Belum_Lunas">
                                       Belum Lunas
                                </option>

                            </select>

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