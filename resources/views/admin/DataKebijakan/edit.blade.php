@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KEBIJAKAN</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Kebijakan
                        </h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" method="POST" action="{{url('admin/kebijakan/update/'.$data->id_kebijakan)}}">
                            @csrf
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <b>NAMA KEBIJAKAN</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">account_box</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control time24" value="{{$data->nama_kebijakan}}" required name="nama_kebijakan">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>FILE KEBIJAKAN</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">dvr</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="file" class="form-control time12" >
                                             <input type="hidden" class="form-control time12" name="old_file_kebijakan" value="{{$data->file_kebijakan}}">
                                            
                                        </div>
                                        <small>Upload file jika ada perubahan</small>
                                    </div>

                                </div>
                               
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary .p-r-30 .margin-15 center-block" style="width: 100px"  >Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection