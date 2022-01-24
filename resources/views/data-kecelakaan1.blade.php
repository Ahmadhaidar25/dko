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
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
                                        Data Kecelakaan 1</a>
                                    </li>

                                    <li>
                                        <i class="fa fa-database">
                                        </i>
                                        <a href="{{url('data_kecelakaan2')}}">
                                        Data Kecelakaan 2</a></li>
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
                                    <h1>Data Kecelakaan Kerja 1</h1>
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
                                            <strong class="card-title">Data Kecelakaan Kerja 1</strong>
                                        </div>
                                       
                                        <div class="card-body">
                                             <a href="{{url('export')}}" class="btn btn-success text-white">Export</a>
                                             <br>
                                             <br>
                                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered demo-table responsive">
                                                <thead class="bg-success">
                                                    <tr>
                                                        
                                                        <th>Nama Peserta</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Tahun Lahir</th>
                                                        <th>Nama Perusahaan</th>
                                                        <th>Wilayah</th>
                                                         <th>No Tlp</th>
                                                         <th>Setatus</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                               
                                                <tbody>
                                                     @foreach ($data as $x)
                                                    <tr>

                                                        
                                                        <td>{{$x->nama_peserta}}</td>
                                                        <td>{{$x->jk}}</td>
                                                        <td>{{$x->thn_lahir}}</td>
                                                        <td>{{$x->nama_perusahaan}}</td>
                                                        <td>{{$x->wilayah}}</td>
                                                         <td>{{$x->no_tlp}}</td>
                                                         <td>
                                           <!-- Material switch -->
<div class="switch">
  
    
    <input type="checkbox">
    
</div>

                                             
                                                        </td>

                                                        <td>
                                                            <div class="btn-group">
                                                              <a href="#" class="btn btn-success text-white" data-bs-toggle="modal" 
                                                              data-bs-target="#acc-{{$x->id}}">Setujui</a>

                                                             <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tolak-{{$x->id}}">Tolak</a>

                                                               <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detail-{{$x->id}}">Detail</a>

                                                              <a href="{{url('/hapus-client1', $x->id)}}" class="btn btn-danger btn1">Hapus</a>


                                                          </div>
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
              @foreach ($data as $d)
              <div class="modal fade" id="detail-{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Detail Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <table class="table">
                          <thead>
                            <tr>

                             
                              <th>Tanggal</th>
                              <th>Tempat</th>
                              <th>Unsur Penyebab</th>
                              <th>Uraian</th>
                              <th>SKD</th>
                              <th>Foto</th>
                              <th>Email</th>
                          </tr>
                      </thead>
                      <tbody>

                         <tr>

                            
                             <td>{{$d->tgl_kecelakaan}}</td>
                             <td>{{$d->tempat_kejadian}}</td>
                             <td>{{$d->unsur_penyebab}}</td>
                             <td>{{$d->uraian_kecelakaan}}</td>
                             <td>{{$d->skd}}</td>
                             <td><img src="{{asset('poto/' .$d->unggah_poto)}}" style="width: 50px;"></td>
                             <td>{{$d->email}}</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
@endforeach


<!-- Modal Tolak -->
@foreach ($data as $t)
<div class="modal fade" id="tolak-{{$t->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header btn-secondary">
        <h5 class="modal-title text-white" id="exampleModalLabel">Tolak Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
     <form action="{{url('/kirim-email-tolak',$t->id)}}" method="post">
    <div class="modal-body">
        @csrf
        <input type="text" name="email" value="{{$t->email}}" class="form-control" readonly><br>
        <input type="text" name="nama_peserta" value="{{$t->nama_peserta}}" class="form-control" readonly><br>
        <select class="form-control" name="setatus">
        
        <option value="Tolak">Tolak</option>
        </select>
       
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">OK</button>
    </div>
    </form>
</div>
</div>
</div>
@endforeach

<!-- Modal ACC -->
@foreach ($data as $ac)
<div class="modal fade" id="acc-{{$ac->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-white" id="exampleModalLabel">Di Setujui</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="{{url('kirim-email-acc')}}" method="post">
    <div class="modal-body">
           @csrf
            <input type="text" name="email" value="{{$ac->email}}" class="form-control" readonly><br>
            <input type="text" name="nama_peserta" value="{{$ac->nama_peserta}}" class="form-control" readonly><br>

            <select class="form-control" name="setatus">
                
                <option value="Acc">Acc</option>
            </select>
       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">OK</button>
    </div>
     </form>
</div>
</div>
</div>
@endforeach

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


   $('#toggle_event_editing button').click(function(){
  if($(this).hasClass('locked_active') || $(this).hasClass('unlocked_inactive')){
    /* code untuk switch on */
  }else{
    /* code untuk switch off */
  }
  
  /* reverse locking status */
  $('#toggle_event_editing button').eq(0).toggleClass('locked_inactive locked_active btn-danger btn-info');
  $('#toggle_event_editing button').eq(1).toggleClass('unlocked_inactive unlocked_active btn-info btn-danger');
});
</script>
@include('sweetalert::alert')
</body>

</html>
