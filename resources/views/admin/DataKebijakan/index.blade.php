@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA KEBIJAKAN
                
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <a href="{{url('admin/kebijakan/create_page')}}" class="btn btn-success waves-effect" type="button">+Tambah data</a>
                        </h2>
                    </div>
                    <div class="body">

                             <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $d)
                                        <tr>
                                           <td>{{$key+1}}</td>
                                            <td>{{$d->nama_kebijakan}}</td>
                                            <td>
                                                <a href="{{$d->file_kebijakan}}" target="_blank"><i class="material-icons">download</i></a>
                                                &nbsp;
                                                <a href="{{url('admin/kebijakan/edit/'.$d->id_kebijakan)}}"><i class="material-icons">create</i> </a>
                                                &nbsp;
                                                 <a
                                                 onclick="return confirm('Apakah anda yakin untuk menghapus data?')"
                                                 href="{{url('admin/kebijakan/delete/'.$d->id_kebijakan)}}"><i class="material-icons">delete</i> </a>
                                            </td>
                                        </tr>
                                   @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
@endsection

