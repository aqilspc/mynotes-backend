@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
               DATA TAGIHAN
                
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                             <a href="{{url('admin/tagihan/create_page')}}" class="btn btn-success waves-effect" type="button">+Tambah data</a>
                        </h2>
                    </div>
                    <div class="body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th>Jenis</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($data as $key => $d)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$d->nama_siswa}}</td>
                                            <td>{{$d->jumlah}}</td>
                                            <td>{{$d->jenis}}</td>
                                            <td>
                                                <?php echo str_replace('_', ' ', $d->status)?>
                                            </td>
                                            <td>
                                                <a href="{{url('admin/tagihan/edit/'.$d->id_tagihan)}}"><i class="material-icons">create</i> </a>
                                                &nbsp;
                                                 <a
                                                 onclick="return confirm('Apakah anda yakin untuk menghapus data?')"
                                                 href="{{url('admin/kebijakan/tagihan/'.$d->id_tagihan)}}"><i class="material-icons">delete</i> </a>
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
