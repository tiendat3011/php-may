<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Login </title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">
    <link href="backend/css/customize.css" rel="stylesheet">


</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Login Page</h2>
                <p>
                    Welcome to my project
                </p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    @if ($errors->any())
                        {{-- <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div> --}}
                    @endif
                    <form method="post" class="m-t"  role="form" action="{{ route('auth.login') }}">
                        @csrf
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="email" 
                                class="form-control" 
                                placeholder="Email" >
                            @if ($errors->has('email'))
                            <span class="error-message"> *
                                {{$errors->first('email')}}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="password" 
                                class="form-control" 
                                placeholder="Password">
                            @if ($errors->has('password'))
                            <span class="error-message"> *
                                {{$errors->first('password')}}
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
                    </form>
                    <p class="m-t">
                        <small>Have a nice day</small>
                    </p>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                Copyright Emdatluonvuituoi
            </div>
            <div class="col-md-6 text-right">
                <small>© 2024</small>
            </div>
        </div>
    </div>

</body>

</html>