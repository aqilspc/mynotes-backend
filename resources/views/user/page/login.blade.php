<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ADMIN | SMK Negeri 1 Pasuruan</title>
    <!-- Favicon-->
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('plugins/bootstrap/css/bootstrap.css')}}"  rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{url('plugins/node-waves/waves.css')}}"  rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('plugins/animate-css/animate.css')}}"  rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{url('css/style.css')}}"  rel="stylesheet">
</head>

<body class="login-page bg-indigo">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>WALI</b></a>
            <small>SMK NEGERI 1 PASURUAN</small>
        </div>
        <div class="card">
             @if($message=Session::get('success'))
                        <div class="alert bg-teal" role="alert">
                           
                           <p align="center" style="color: white;"> {{$message}}</p>
                        </div>
                        @endif
            <div class="body">
                <form id="sign_in" method="POST" action="{{url('login_wali')}}">
                    @csrf
                    <div class="msg">Akses Masuk Wali Murid</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            
                            <input type="text" class="form-control" name="nis" placeholder="NIS" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="kode_unik" placeholder="Kode unik" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">call</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="no_telepon" placeholder="Nomor Telepon" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                          <!--   <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label> -->
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-orange waves-effect" type="submit">MASUK</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{url('plugins/jquery/jquery.min.js')}}" ></script>

    <!-- Bootstrap Core Js -->
    <script src="{{url('plugins/bootstrap/js/bootstrap.js')}}" ></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{url('plugins/node-waves/waves.js')}}" ></script>

    <!-- Validation Plugin Js -->
    <script src="{{url('plugins/jquery-validation/jquery.validate.js')}}" ></script>

    <!-- Custom Js -->
    <script src="{{url('js/admin.js')}}" ></script>
    <script src="{{url('js/pages/examples/sign-in.js')}}" ></script>
</body>

</html>