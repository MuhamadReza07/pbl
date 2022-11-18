<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>KasirKite</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <link rel="shortcut icon" href="{{ url('/') }}/assets/images/kasir.png">

    <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('/') }}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->


    <!-- Begin page -->
    <div class="accountbg">

        <div class="content-center">
            <div class="content-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                            <div class="card">
                                <div class="card-body">

                                    <h3 class="text-center mt-0 m-b-15">
                                        {{-- <a href="index.html" class="logo logo-admin"><img src="#" height="30"
                                                alt="logo"></a> --}}
                                        <h2 class="text-center text-primary">KasirKite</h2>
                                    </h3>

                                    <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>

                                    <div class="p-2">
                                        <form class="form-horizontal m-t-20"action="{{ url('login/proses') }}"
                                            method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input
                                                        class="form-control   @error('username')
                                                    is-invalid
                                                @enderror"
                                                        type="text" placeholder="Username" name="username" require>
                                                </div>
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input
                                                        class="form-control  @error('password')
                                                    is-invalid
                                                @enderror"
                                                        type="password" placeholder="Password" name="password" require>
                                                </div>
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Remember
                                                            me</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group text-center row m-t-20">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit">Log In</button>
                                                </div>
                                            </div>


                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/js/modernizr.min.js"></script>
    <script src="{{ url('/') }}/assets/js/detect.js"></script>
    <script src="{{ url('/') }}/assets/js/fastclick.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.blockUI.js"></script>
    <script src="{{ url('/') }}/assets/js/waves.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="{{ url('/') }}/assets/js/app.js"></script>

</body>

</html>
