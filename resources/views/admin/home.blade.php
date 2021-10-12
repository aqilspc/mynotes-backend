@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL KEGIATAN</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">attach_money</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL TAGIHAN</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="content">
                        <div class="text">DATA KEHADIRAN</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h3>
                           VISI MISI SMK N 1 Pasuruan
                        </h3>
                        
                    </div>
                    <div class="body">
                        Visi SMK Negeri 1 Pasuruan<br>
                        Terwujudnya insan yang berakhlak mulia, kreatif, inovatif, mandiri, dan peduli lingkungan.<br><br>
                        Misi SMK Negeri 1 Pasuruan <br>
                        1. Meningkatkan Nilai Keimanan dan Ketaqwaan kepada Tuhan Yang Maha Esa<br>
                        2. Menumbuhkembangkan Jiwa Nasionalisme<br>
                        3. Meningkatkan Prestasi dalam Ilmu Pengetahuan, Teknologi, Seni Budaya dan Olahraga<br>
                        4. Menumbuhkembangkan Kreatifitas, Inovatif dan Produktifitas dalam Peningkatan Mutu Pendidikan<br>
                        5. Menumbuhkembangkan Kemandirian<br>
                        6. Menanamkan sikap pelestarian Lingkungan, Pencegahan Terjadinya  Pencemaran dan  Kerusakan Lingkungan
                    </div>
                </div>
                </div>
            </div>
        </div>
       
    </div>
</section>
@endsection