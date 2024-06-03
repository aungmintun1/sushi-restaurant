<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/css/style.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="First Name"
                    id="fname" class="block mt-1 w-full" type="text" name="fname" value="{{old('fname')}}" required autofocus>
                    <span style="color: red;">@error('fname') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Last Name"
                    id="lname" class="block mt-1 w-full" type="text" name="lname" value="{{old('lname')}}" required autofocus>
                    <span style="color: red;">@error('lname') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Email address" id="email" type="text" name="email" value="{{old('email')}}" required autofocus>
                    <span style="color: red;">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg"  placeholder="Enter password" id="password" type="password" name="password" value="{{old('password')}}" required autofocus>
                    <span style="color: red;">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Confirm Password" id="password_confirmation" type="password" name="password_confirmation" value="{{old('password_confirmation')}}" required autofocus>
                    <span style="color: red;">@error('password_confirmation') {{$message}} @enderror</span>
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
                <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="#" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>