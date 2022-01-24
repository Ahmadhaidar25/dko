<!doctype html>

    <html class="no-js" lang="en">
    <!--<![endif]-->

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>DKO</title>
            <meta name="description" content="DKO">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="apple-touch-icon" href="apple-icon.png">
            <link rel="shortcut icon" href="favicon.ico">

            <link rel="stylesheet" href="{{asset('layout/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('layout/vendors/font-awesome/css/font-awesome.min.css')}}">
            <link rel="stylesheet" href="{{asset('layout/vendors/themify-icons/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('layout/vendors/flag-icon-css/css/flag-icon.min.css')}}">
            <link rel="stylesheet" href="{{asset('layout/vendors/selectFX/css/cs-skin-elastic.css')}}">
            <link rel="stylesheet" href="{{asset('layout/vendors/jqvmap/dist/jqvmap.min.css')}}">


            <link rel="stylesheet" href="{{asset('layout/assets/css/style.css')}}">

            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="{{asset('sweetalert/sweetalert2.min.css')}}">

        </head>

        <body>


            <!-- Left Panel -->

            <aside id="left-panel" class="left-panel">
                <nav class="navbar navbar-expand-sm navbar-default">

                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="./">
                            <img src="{{asset('layout/images/karawang.png')}}" alt="Logo" 
                            class="rounded-circle"></a>


                        </div>
                        
                        <div id="main-menu" class="main-menu collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href=""> <i class="menu-icon fa fa-dashboard"></i>Home</a>
                                </li>
                                @if (auth()->user()->level=='admin')
                                <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->

                                <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Master Data</a>
                                    <ul class="sub-menu children dropdown-menu">

                                        <li>
                                            <i class="fa fa-database">
                                            </i>
                                            <a href="{{url('data_kecelakaan1')}}">
                                            Data Kecelakaan</a>
                                        </li>

                                         <li>
                                            <i class="fa fa-database">
                                            </i>
                                            <a href="{{url('data_kecelakaan2')}}">
                                            Data Kecelakaan</a>
                                        </li>
                                        </ul>
                                    </li>

                                    @endif

                                    @if (auth()->user()->level=='client')
                                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                                    <li class="menu-item-has-children dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Menu</a>
                                        <ul class="sub-menu children dropdown-menu">
                                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{url('tahap1')}}">Tahap 1</a></li>
                                            <li><i class="menu-icon ti-themify-logo"></i>
                                                <a href="{{url('tahap2')}}">Tahap 2</a></li>
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

                                    </div>

                                    <div class="col-sm-5">
                                        <div class="user-area dropdown float-right">
                                            {{Auth::user()->name}}&nbsp;
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="user-avatar rounded-circle" src="{{asset('layout/images/admin.jpg')}}" alt="User Avatar">
                                            </a>

                                            <div class="user-menu dropdown-menu">
                                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa fa-user">
                                                        Profile
                                                    </i>
                                                </a>
                                         <a href="{{url('logout')}}" class="nav-link btn2">Logout</a>



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
                                            <h1>Selamat Datang</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="page-header float-right">
                                        <div class="page-title">
                                            <ol class="breadcrumb text-right">
                                                <li class="active">UPTD Ketenagakerjaan Wilayah II Jabar</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content mt-3">

                                <div class="col-sm-12">
                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Selamat Datang</span>
                                    {{Auth::user()->name}} 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>

                                <img src="{{asset('layout/images/logo.jpg')}}" class="img-fluid col-sm-12" alt="..." style="height: 400px;">

                                <br><br>
                                @if (auth()->user()->level=='admin')
                                <div class="card col-sm-12">
                                  <div class="card-body">

                                    <p class="card-text"> UPTD Pengawasan Ketenagakerjaan Wilayah II Jabar adalah Balai Pelayanan Pengawasan Ketenagakerjaan Wilayah II mempunyai tugas pokok menyelenggarakan sebagian kegiatan teknis operasional di bidang pelayanan pengawasan ketenagakerjaan meliputi, pengawasan norma kerja, pengawasan keselamatan dan kesehatan kerja serta mengendalikan pelaksanaan tugas pokok dan fungsi Balai Pelayanan Pengawasan Ketenagakerjaan.</p>

                                </div>
                            </div>
                        @endif
                          
                    </div>
                </div>
                <!--end modal-->

               <script src="{{asset('layout/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('layout/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('layout/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('layout/assets/js/bootstrap.js')}}"></script>

<script src="{{asset('layout/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('layout/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('layout/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('layout/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('layout/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('layout/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('layout/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('layout/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('layout/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('layout/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('layout/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

<script type="text/javascript" src="{{asset('sweetalert/sweetalert2.all.min.js')}}"></script>
                <script>

                   


                    $(".btn2").click(function(e){
    e.preventDefault();
    var log = $(this).attr('href');
    Swal.fire({
      title: 'Yakin',
      text: "Anda Akan Keluar",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya'
  }).then((result) => {
      if (result.isConfirmed) {
        window.location=log;
    }
})
});
              </script>

          </body>
            @include('sweetalert::alert')
          </html>
