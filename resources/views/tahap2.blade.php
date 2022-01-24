<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{asset('layout/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('layout/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/vendors/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{asset('layout/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"></a>
                <a class="navbar-brand hidden" href="./"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/home"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>



                    @if (auth()->user()->level=='client')
                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Menu</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{url('tahap1')}}">Tahap 1</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i>
                                <a href="{{url('tahap2')}}">Tahap 2</a>
                            </li>
                        </ul>
                    </li>
                    @endif



                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">

                        <div class="form-inline">

                        </div>




                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        {{Auth::user()->name}}&nbsp;
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('layout/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="{{url('logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Input Tahap 2</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/home">Input Tahap 2</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">

                    <!--/.col-->





                    <div class="col-lg-8">
                        <form action="{{url('post-data2')}}" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-header bg-success">

                                </div>

                                <div class="card-body card-block">
                                    @csrf
                                    <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="nama_peserta" placeholder="Nama Peserta">
                                    </div>

                                    <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan">
                                    </div>
                                    
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="jk">
                                            <option>--Jenis Kelamin--</option>
                                          <option value="laki-laki">laki-laki</option>
                                           <option value="perempuan">perempuan</option>
                                           
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <select class="form-control" name="skd">
                                            <option>--SKD--</option>
                                          <option value="sembuh">Sembuh</option>
                                           <option value="cacat">Cacat</option>
                                            <option value="meninggal">Meninggal</option>
                                        </select>
                                    </div>



                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-cloud-arrow-up"></i>&nbsp;Unggah Bpjs</span>
                                        <input class="form-control" type="file" name="file_bpjs">
                                    </div>

                                    

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    
                                   
                                   
                                </div>
                        </form>
                    </div>


                </div>














            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->


    <script src="{{asset('layout/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('layout/vendors/popper.js/dist/umd/popper.min.js')}}"></script>

    <script src="{{asset('layout/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('layout/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>

    <script src="{{asset('layout/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('layout/assets/js/main.js')}}"></script>
  @include('sweetalert::alert')
</body>

</html>