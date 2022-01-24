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
            <link rel="stylesheet" href="{{asset('layout/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
            <link rel="stylesheet" href="{{asset('layout/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

            <link rel="stylesheet" href="{{asset('layout/assets/css/style.css')}}">

            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
            <style type="text/css">
        body {
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
        }
        
        /* Table */
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;

        }
        .demo-table {
            border-collapse: collapse;
            font-size: 13px;
        }
        .demo-table th, 
        .demo-table td {
            border-bottom: 1px solid #e1edff;
            border-left: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .demo-table th, 
        .demo-table td:last-child {
            border-right: 1px solid #e1edff;
        }
        .demo-table td:first-child {
            border-top: 1px solid #e1edff;
        }
        .demo-table td:last-child{
            border-bottom: 0;
        }
        caption {
            caption-side: top;
            margin-bottom: 10px;
        }
        
        /* Table Header */
        .demo-table thead th {
            background-color: #00b300;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
        
        /* Table Body */
        .demo-table tbody td {
            color: #353535;
        }
        
        .demo-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .demo-table tbody tr:hover th,
        .demo-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
            transition: all .2s;
        }

        @media screen and (max-width: 520px) {
    table.responsive {
        width: 100%;
    }
    thead {
        display: none;
    }
    td {
        display: block;
        text-align: right;
        border-right: 1px solid #e1edff;
    }
    td::before {
        float: left;
        text-transform: uppercase;
        font-weight: bold;
        content: attr(data-header);
    }
}
    </style>
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
                            <li>
                                <a href="{{asset('/home')}}"> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                            </li>
                            @if (auth()->user()->level=='admin')
                            <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data Kecelakaan</a>
                                <ul class="sub-menu children dropdown-menu">

                                    <li>
                                        <i class="fa fa-database">
                                        </i>
                                        <a href="{{url('data_kecelakaan1')}}">
                                        Data Kecelakaan </a>
                                    </li>

                                    <li>
                                        <i class="fa fa-database">
                                        </i>
                                        <a href="{{url('data_kecelakaan2')}}">
                                        Data Kecelakaan</a></li>
                                    </ul>

                                    
                                    
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
                                    <div class="header-left">

                                        <div class="form-inline">

                                        </div>




                                    </div>
                                </div>

                                <div class="col-sm-5">

                                    <div class="user-area dropdown float-right">
                                        {{Auth::user()->name}}
                                        &nbsp;
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="user-avatar rounded-circle" 
                                            src="{{asset('layout/images/admin.jpg')}}" alt="User Avatar">
                                        </a>

                                        <div class="user-menu dropdown-menu">
                                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i>
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
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
                                    <h1>Data Kecelakaan Kerja</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/home">Home</a></li>

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content mt-3">
                        <div class="animated fadeIn">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Data Kecelakaan Kerja</strong>
                                        </div>
                                       
                                        <div class="card-body">
                                             
                                             <br>
                                             <br>
                                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered demo-table responsive">
                                                <thead class="bg-success">
                                                    <tr>
                                                        <th>Nama Peserta</th>
                                                        <th>Nama Perusahaan</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Skd</th>
                                                        <th>File Bpjs</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                              
                                                <tbody>
                                                    @foreach ($data2 as $x)
                                                    <tr>

                                                        <td>{{$x->nama_peserta}}</td>
                                                        <td>{{$x->nama_perusahaan}}</td>
                                                        <td>{{$x->jk}}</td>
                                                        <td>{{$x->skd}}</td>
                                                        <td>

                                                            <object data="{{asset('file_bpjs/' .$x->file_bpjs)}}" width="340" height="270"></object>
                                                        </td>
                                                        <td>
                                                         <a href="{{url('/hapus-client2', $x->id)}}" class="btn btn-danger btn1">Hapus</a>
                                                        </td>
                                                        
                                                  </tr>
                                                   @endforeach
                                              </tbody>
                                             
                                          </table>
                                      </div>
                                  </div>
                              </div>


                          </div>
                      </div><!-- .animated -->
                  </div><!-- .content -->


              </div><!-- /#right-panel -->

              <!-- Right Panel -->

              <!-- Modal -->
              





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

<!-- <script type="text/javascript" src="{{asset('layout/alert/swal.js')}}"></script>-->
<script type="text/javascript">
 $(".btn1").click(function(e){
    e.preventDefault();
    var hapus = $(this).attr('href');
    Swal.fire({
      title: 'Yakin',
      text: "Anda Akan Menghapus Data",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
      if (result.isConfirmed) {
        window.location=hapus;
    }
})
});
</script>
@include('sweetalert::alert')
</body>

</html>
