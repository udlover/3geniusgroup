<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:09:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Admin Panel | 3GeniusGroup</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{asset('public/admin_assets/dist/img/ico/3g.png')}}" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="{{asset('public/admin_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="admin_assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="{{asset('public/admin_assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="{{asset('public/admin_assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="admin_assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="login" method="POST" id="loginForm" novalidate>
                            @csrf
                            @if (session()->has('error'))
                                <label class="control-label text-danger text-center">{{session()->get('error')}}</label>
                            @endif
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="Enter your username" value="{{old('username')}}" title="Please enter you username" name="username" id="username" class="form-control">
                                @error('username')
                                    <div><label class="text-danger">{{$message}}</label></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="Enter your password" name="password" id="password" class="form-control">
                                @error('password')
                                    <div><label class="text-danger">{{$message}}</label></div>
                                @enderror
                            </div>
                            <div>
                                <button class="btn btn-add" type="submit">Login</button>
                            </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="{{asset('public/admin_assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="{{asset('public/admin_assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:09:03 GMT -->
</html>