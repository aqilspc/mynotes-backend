@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA PELANGGARAN</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Pelanggaran
                        </h2>
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/pelanggaran/update/'.$data->id_pelanggaran)}}">
                            @csrf
                            
                            <label for="nis">Siswa</label>
                           <div class="form-group">
                                <div class="form-line">
                                    <input type="text" disabled value="{{$data->nama_siswa}}" class="form-control" placeholder="tanggal">
                                    <input type="hidden" name="id_siswa" value="{{$data->id_siswa}}" class="form-control" placeholder="tanggal">
                                </div>
                            </div>

                            <label for="tanggal">TANGGAL</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" value="{{$data->tanggal}}" name="tanggal" class="form-control" placeholder="tanggal">
                                </div>
                            </div>
                            <label for="status">STATUS</label>
                            
                            <div class="form-group">
                               <select class="form-control show-tick"
                               name="status">

                                <option value="Berat" {{$data->status=='Berat'?'selected':''}}>
                                       Berat
                                </option>

                                <option value="Ringan" {{$data->status=='Ringan'?'selected':''}}>
                                       Ringan
                                </option>

                            </select>
                            </div>
                            <label for="nama_wali">PELANGGARAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                     <textarea class="form-control summernote" name="pelanggaran" >
                                        {{$data->pelanggaran}}
                                    </textarea>
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