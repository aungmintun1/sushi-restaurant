@extends('layouts.admin')

@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit User </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/users" class="breadcrumb-link">All Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Users</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
     
           
            <div class="row">
                <!-- ============================================================== -->
                <!-- basic form -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Edit New User</h5>
                        <div class="card-body">
                            <form id="basicform" method="POST" action="/admin/users/{{$user->id}}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <input class="form-control form-control-lg" placeholder="First Name"
                                    id="fname" class="block mt-1 w-full" type="text" name="fname" value="{{$user->fname}}" required autofocus>
                                    <span style="color: red;">@error('fname') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" placeholder="Last Name"
                                    id="lname" class="block mt-1 w-full" type="text" name="lname" value="{{$user->lname}}" required autofocus>
                                    <span style="color: red;">@error('lname') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" placeholder="Email address" id="email" type="text" name="email" value="{{$user->email}}" required autofocus>
                                    <span style="color: red;">@error('email') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg"  placeholder="Enter password" id="password" type="password" name="password" value="password" required autofocus>
                                    <span style="color: red;">@error('password') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" placeholder="Confirm Password" id="password_confirmation" type="password" value="password" name="password_confirmation"  required autofocus>
                                    <span style="color: red;">@error('password_confirmation') {{$message}} @enderror</span>
                                </div>
                              
                                <div class="form-group">
                                 <label for="inputrole">Role</label>
                                  <select class="form-control" id="inputrole" name="role_id">
                                    <option value="1" @if ($role == 1) selected @endif>Admin</option>
                                    <option value="2" @if ($role == 2) selected @endif>Employee</option>
                                  </select>
                                </div>
                                
                                

                              
                                <div class="row">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                        
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                         
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form -->
                <!-- ============================================================== -->
     
            </div>
         
   
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
@endsection