@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KEGIATAN</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Kegiatan
                        </h2>
                    </div>
                    <div class="body">
                          <form enctype="multipart/form-data" method="POST" action="{{url('admin/kegiatan/update/'.$data->id_kegiatan)}}">
                            @csrf
                            
                            <label for="nama_kegiatan">NAMA KEGIATAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_kegiatan" class="form-control" placeholder="nama kegiatan" value="{{$data->nama_kegiatan}}">
                                </div>
                            </div>
                            <label for="gambar">GAMBAR</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="gambar" class="form-control" placeholder="gambar">
                                    <input type="hidden" value="{{$data->gambar}}" name="old_gambar">
                                </div>
                                 <small>Upload ulang bila ada perubahan gambar</small>
                            </div>
                            <label for="keterangan">ISI</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea id="alamat" class="form-control summernote" name="keterangan" >
                                        {{$data->keterangan}}
                                   </textarea>
                                </div>

                            </div>
                            <label for="tanggal">TANGGAL</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" name="tanggal"  class="form-control" placeholder="tanggal"
                                    value="{{$data->tanggal}}">
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
    <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote({
        tabsize: 2,
        height: 200
    });
});
    </script>
@endsection