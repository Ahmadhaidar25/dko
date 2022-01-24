r<!doctype html>
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
                        <h1>Input Tahap 1</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/home">Input Tahap 1</a></li>

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
                        <form action="{{url('post-data1')}}" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-header bg-success">

                                </div>

                                <div class="card-body card-block">
                                    @csrf

                                    <div class="input-group mb-3">


                                        <input type="nama peserta" id="nf-nama peserta" name="nama_peserta" placeholder="Nama Peserta.." class="form-control" required autofocus>
                                        &nbsp;

                                        <select class="form-control" name="jk" required>
                                            <option>--pilih--</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>

                                    </div>



                                    <div class="input-group mb-3">

                                        <input type="text" name="thn_lahir" placeholder="Tahun lahir" class="form-control" required>
                                        &nbsp;
                                        <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan.." class="form-control" required>

                                    </div>



                                    <div class="input-group mb-3">

                                        <select class="form-control" name="wilayah" required>
                                            <option>Pilih Wilayah</option>
                                            <option value="kota bekasi">Kota Bekasi</option>
                                            <option value="kab bekasi">Kab Bekasi</option>
                                            <option value="karawang">Karawang</option>
                                            <option value="subang">Subang</option>
                                            <option value="purwakarta">Purwakarta</option>
                                        </select>
                                        &nbsp;
                                        <input type="text" id="nf-No Telp perusahaan" name="no_tlp" placeholder="No Telp Perusahaan.." class="form-control" required>

                                        

                                    </div>

                                    



                                    <div class="input-group mb-3">
                                        <input type="date" name="tgl_kecelakaan" placeholder="Tanggal Kecelakaan.." class="form-control" required>
                                        &nbsp;
                                        <select class="form-control" name="tempat_kejadian" required>
                                            <option>--Tempat Kejadian--</option>
                                            <option value="di dalam kantor">Di Dalam Kantor</option>
                                            <option value="di luar kantor">Di Luar Kantor</option>
                                        </select>

                                    </div>



                                    <div class="input-group mb-3">
                                        <select class="form-control" name="unsur_penyebab" required>
                                            <option>--Unsur Penyebab--</option>
                                            <option value="mesin(mesin potong,mesin press,mesin stamping,mesin bor)">Mesin(Mesin potong,mesin press,mesin stamping,mesin bor)</option>
                                            <option value="penggerak mula dan pompa(motor bakar,pompa kompressor kipas angin,dsb)">Penggerak mula dan pompa(Motor bakar,pompa kompressor kipas angin,dsb)</option>
                                            <option value="lift">Lift(Lift orang,lift barang)</option>
                                            <option value="pesawat pengangkat(keran angkat,derek dongkrak,takel,lir,dsb)">Pesawat pengangkat(Keran angkat,derek dongkrak,takel,lir,dsb)</option>
                                            <option value="conveyor(ban berjalan,rantai berjalan,dsb)">Conveyor(Ban berjalan,rantai berjalan,dsb)</option>
                                            <option value="pesawat pengangkut(lori,forklift,gerobak,mobil,cerobong penghantar,dsb)">Pesawat Pengangkut(Lori,forklift,gerobak,mobil,cerobong penghantar,dsb)</option>
                                            <option value="alat transmisi mekanik(poros ban bergerak,rantai,puli,dsb">Alat transmisi mekanik(Poros ban bergerak,rantai,puli,dsb)</option>
                                            <option value="perkakas kerja tangan(pahat,palu,kikir,tang,pisau,kapak,dsb">Perkakas kerja tangan(Pahat,palu,kikir,tang,pisau,kapak,dsb)</option>
                                            <option value="pesawat uap dan bejana bertekanan(ketel uap,bejana uap pemanas air,dsb)">Pesawat uap dan bejana bertekanan(Ketel uap,bejana uap pemanas air,dsb)</option>
                                            <option value="peralatan listrik(motor listrik generator,transformator,ornamen listrik,dsb)">Peralatan listrik(Motor listrik generator,transformator,ornamen listrik,dsb)</option>
                                            <option value="bahan kimia">Bahan Kimia</option>
                                            <option value="debu berbahaya(debu organik/anorganik,debu silika,dsb)">Debu berbahaya(Debu ornagik/anorganik,debu silika,dsb)</option>
                                            <option value="radiasi dan bahan radioaktif(radium,cobalt,sinar ultra,sinar infra,dsb)">Radiasi dan Bahan Radioaktif(Radium,cobalt,sinar ultra,sinar infra,dsb)</option>
                                            <option value="faktor lingkungan(iklim kerja,tekanan udara,getaran bising,cahaya,dsb)">Faktor Lingkungan(Iklim kerja,tekanan udara,getaran bising,cahaya,dsb)</option>
                                            <option value="bahan mudah terbakar dan benda panas(lak,minyak,kertas kapuk,uap,dsb)">Bahan Mudah Tebakar dan Benda Panas(Lak,minyak,kertas kapuk,uap,dsb)</option>
                                            <option value="binatang(serangga,cacing,binatang buas,bakteri,dsb">Binatang(Serangga,cacing,binatang buas,bakteri,dsb)</option>
                                            <option value="permukaan lantai kerja(lantai bordes,jalan,pelataran,dsb)">Permukaan lantai kerja(Lantai bordes,jalan,pelataran,dsb)</option>
                                            <option value="lain-lain(lalu lintas,tangga,kaleng sampah,benda kerja,dsb)">Lain-lain(Lalu lintas,tangga,kaleng sampah,benda kerja,dsb)</option>
                                        </select>

                                        &nbsp;
                                        <select class="form-control" name="uraian_kecelakaan" required>
                                            <option>--Uraian--</option>
                                            <option value="persinggungan dengan benda(terbentur,tergores,tertusuk">Persinggungan dengan benda(terbentur,tergores,tertusuk</option>
                                            <option value="karena benda yang jatuh,meluncur,melayang(terpukul)">Karena benda yang jatuh,meluncur,melayang(terpukul)</option>
                                            <option value="tertangkap pada/diantara benda(terjepit,tergigit,tertimbun)">Tertangkap pada/diantara benda(terjepit,tergigit,tertimbun)</option>
                                            <option value="jatuh pada ketinggian yang sama">Jatuh pada ketinggian yang sama</option>
                                            <option value="jatuh pada ketinggian yang berbeda">Jatuh pada ketinggian yang berbeda</option>
                                            <option value="tergelincir">Tergelincir</option>
                                            <option value="terpapar(berhubungan dengan temperatur,tekanan udara,getar suara,cahaya)">Terpapar(Berhubungan dengan temperatur,tekanan udara,getar suara,cahaya)</option>
                                            <option value="penghisapan/penyerapan(menunjukan masuknya zat berbahaya)">Penghisapan/penyerapan(menunjukan masuknya zat berbahaya)</option>
                                            <option value="tersentuh arus listrik">Tersentuh arus listrik</option>
                                            <option value="lain-lain">Lain-lain</option>
                                        </select>
                                        &nbsp;


                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="skd" required>
                                            <option>--SKD--</option>
                                            <option value="rawat jalan">Rawat Jalan</option>
                                            <option value="cacat">Cacat</option>
                                            <option value="rawat inap">Rawat Inap</option>
                                            <option value="meninggal">Meninggal</option>
                                        </select>
                                    </div>



                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-cloud-arrow-up"></i>&nbsp;Unggah Foto</span>
                                        <input class="form-control" type="file"name="unggah_poto" required>
                                    </div>

                                    <div class="form-group">

                                        <input type="email" name="email" placeholder="alamat email.." class="form-control" required>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    
                                    <button type="reset" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i>&nbsp;Reset
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