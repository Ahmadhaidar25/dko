<!doctype html>
   
                    <html class="no-js" lang="en">
                   

                        <head>
                            <meta charset="utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <title> DKO</title>
                            <meta name="description" content=" DKO ">
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

                                    <div class="login-content shadow p-3 mb-5 bg-body rounded" style="border-radius: 5px 5px 5px 5px;">
                                        
                                        <div class="login-logo">
                                            <a href="index.html">
                                                 <img src="{{asset('layout/images/karawang.png')}}" alt="Logo" class="rounded-circle" style="height: 200px;">
                                            </a>
                                        </div>
                                        <div class="login-form">
                                         <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                            <div class="checkbox">
                                               
                                                <label class="pull-right">
                                                    <p><a href="{{ route('register') }}">Don't have account ? </a></p>
                                                </label>

                                            </div>
                                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" style="border-radius: 30px 30px 30px;">Login</button>

                                            <div class="register-link m-t-15 text-center">
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                       
                       
                      
                        
                        
                    </body>
                       @include('sweetalert::alert')
                    </html>
