@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA PELANGGARAN SISWA</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Pelanggaran
                        </h2>
                        
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" method="POST" action="{{url('admin/pelanggaran/create')}}">
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

                            <label for="tanggal">TANGGAL</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" name="tanggal" class="form-control" placeholder="tanggal">
                                </div>
                            </div>
                            <label for="status">STATUS</label>
                            <div class="form-group">
                               <select class="form-control show-tick"
                               name="status">
                                <option value="Berat">
                                       Berat
                                </option>
                                <option value="Ringan">
                                       Ringan
                                </option>
                            </select>
                            </div>
                            <label for="nama_wali">PELANGGARAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                     <textarea id="alamat" class="form-control summernote" name="pelanggaran" >
                                    </textarea>
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