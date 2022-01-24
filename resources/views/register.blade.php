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



                        </head>

                        <body class="bg-white">


                            <div class="sufee-login d-flex align-content-center flex-wrap">
                                <div class="container">
                                    <div class="login-content shadow p-3 mb-5 bg-body rounded">
                                        <div class="login-logo">
                                           
                                        </div>
                                        <div class="login-form">
                                         <form method="POST" action="{{ url('post_register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Nama Perusahaan</label>
                                                <input type="text" class="form-control" placeholder="Nama Perusahaan" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Level</label>
                                                <select name="level" class="form-control" required>
                                                    <option>--Pilih Level--</option>
                                                    <option value="client">Client</option>
                                                </select>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" style="border-radius: 30px 30px 30px;">Register</button>

                                            <div class="register-link m-t-15 text-center">
                                                <p>Already have account ? <a href="/"> Sign in</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <script src="{{asset('layout/vendors/jquery/dist/jquery.min.js')}}"></script>
                        <script src="{{asset('layout/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
                        <script src="{{asset('layout/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                        <script src="{{asset('layout/assets/js/main.js')}}"></script>

                         @include('sweetalert::alert')
                    </body>

                    </html>
